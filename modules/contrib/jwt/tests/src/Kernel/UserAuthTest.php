<?php

namespace Drupal\Tests\jwt\Kernel;

use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\jwt\JsonWebToken\JsonWebToken;
use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\user\Traits\UserCreationTrait;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\Request;

// cspell:ignore wxyz

/**
 * Tests JWT config schema.
 *
 * @group JWT
 */
class UserAuthTest extends KernelTestBase {
  use UserCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'system',
    'user',
    'field',
    'key',
    'jwt',
    'jwt_auth_issuer',
    'jwt_auth_consumer',
    'jwt_test',
  ];

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();
    $this->installEntitySchema('user');

    $this->installConfig(['field', 'key', 'jwt', 'jwt_test']);
  }

  /**
   * Test logging of authentication failure for a user.
   */
  public function testAuthFailureLogging() {
    $mock_logger = $this->prophesize(LoggerChannelInterface::class);
    $mock_logger->error(Argument::type('string'), Argument::type('array'))->shouldBeCalled();
    $this->container->set('logger.channel.jwt', $mock_logger->reveal());
    $this->setSetting('jwt.debug_log', 1);
    /** @var \Drupal\Core\Authentication\AuthenticationProviderInterface $auth_service */
    $auth_service = $this->container->get('jwt.authentication.jwt');
    $request = Request::create('/');
    $token = $this->randomString();
    $request->headers->set('Authorization', 'Bearer ' . $token);
    $this->assertTrue($auth_service->applies($request));
    $user = $auth_service->authenticate($request);
  }

  /**
   * Verify the authentication for a user.
   */
  public function testAuth() {
    $mock_logger = $this->prophesize(LoggerChannelInterface::class);
    $mock_logger->error(Argument::any())->shouldNotBeCalled();
    $this->container->set('logger.channel.jwt', $mock_logger->reveal());
    $account = $this->createUser(['access content']);
    $this->setCurrentUser($account);
    /** @var \Drupal\jwt\Authentication\Provider\JwtAuth $auth */
    $auth = $this->container->get('jwt.authentication.jwt');
    $token = $auth->generateToken();
    /** @var \Drupal\jwt\Transcoder\JwtTranscoderInterface $transcoder */
    $transcoder = $this->container->get('jwt.transcoder');
    $decoded_jwt = $transcoder->decode($token);
    $this->assertEquals($account->id(), $decoded_jwt->getClaim(['drupal', 'uid']));
    /** @var \Drupal\Core\Authentication\AuthenticationProviderInterface $auth_service */
    $auth_service = $this->container->get('jwt.authentication.jwt');
    foreach (['Authorization', 'JWT-Authorization'] as $header) {
      $request = Request::create('/');
      $request->headers->set($header, 'Bearer ' . $token);
      $this->assertTrue($auth_service->applies($request));
      $user = $auth_service->authenticate($request);
      $this->assertEquals($account->id(), $user->id());
      // When blocked the account is no longer valid.
      $account->block()->save();
      $result = $auth_service->authenticate($request);
      $this->assertNull($result, 'User is blocked.');
      $account->activate()->save();
    }
  }

  /**
   * Test alternate claim uuid.
   */
  public function testUuidAuth() {
    $account = $this->createUser(['access content']);
    $this->setCurrentUser($account);
    $jwt = new JsonWebToken();
    $now = time();
    $jwt->setClaim('iat', time());
    $jwt->setClaim('exp', $now + 3600);
    $jwt->setClaim(['drupal', 'uuid'], $account->uuid());
    /** @var \Drupal\jwt\Transcoder\JwtTranscoderInterface $transcoder */
    $transcoder = $this->container->get('jwt.transcoder');
    $token = $transcoder->encode($jwt);
    /** @var \Drupal\Core\Authentication\AuthenticationProviderInterface $auth_service */
    $auth_service = $this->container->get('jwt.authentication.jwt');
    foreach (['Authorization', 'JWT-Authorization'] as $header) {
      $request = Request::create('/');
      $request->headers->set($header, 'Bearer ' . $token);
      $this->assertTrue($auth_service->applies($request));
      $user = $auth_service->authenticate($request);
      $this->assertEquals($account->id(), $user->id());
      // When blocked the account is no longer valid.
      $account->block()->save();
      $result = $auth_service->authenticate($request);
      $this->assertNull($result, 'User is blocked.');
      $account->activate()->save();
    }
    // Set an invalid uid. This is checked first and will be rejected.
    $jwt->setClaim(['drupal', 'uid'], $account->id() + 100);
    $token = $transcoder->encode($jwt);
    foreach (['Authorization', 'JWT-Authorization'] as $header) {
      $request = Request::create('/');
      $request->headers->set($header, 'Bearer ' . $token);
      $this->assertTrue($auth_service->applies($request));
      $user = $auth_service->authenticate($request);
      $this->assertNull($user, 'User is not found.');
    }
  }

  /**
   * Test alternate claim for name.
   */
  public function testNameAuth() {
    $account = $this->createUser(['access content']);
    $this->setCurrentUser($account);
    $jwt = new JsonWebToken();
    $now = time();
    $jwt->setClaim('iat', time());
    $jwt->setClaim('exp', $now + 3600);
    $jwt->setClaim(['drupal', 'name'], $account->getAccountName());
    /** @var \Drupal\jwt\Transcoder\JwtTranscoderInterface $transcoder */
    $transcoder = $this->container->get('jwt.transcoder');
    $token = $transcoder->encode($jwt);
    /** @var \Drupal\Core\Authentication\AuthenticationProviderInterface $auth_service */
    $auth_service = $this->container->get('jwt.authentication.jwt');
    foreach (['Authorization', 'JWT-Authorization'] as $header) {
      $request = Request::create('/');
      $request->headers->set($header, 'Bearer ' . $token);
      $this->assertTrue($auth_service->applies($request));
      $user = $auth_service->authenticate($request);
      $this->assertEquals($account->id(), $user->id());
      // When blocked the account is no longer valid.
      $account->block()->save();
      $result = $auth_service->authenticate($request);
      $this->assertNull($result, 'User is blocked.');
      $account->activate()->save();
    }
    // Set an invalid uuid. This is checked first and will be rejected.
    $jwt->setClaim(['drupal', 'uuid'], 'wxyz');
    $token = $transcoder->encode($jwt);
    foreach (['Authorization', 'JWT-Authorization'] as $header) {
      $request = Request::create('/');
      $request->headers->set($header, 'Bearer ' . $token);
      $this->assertTrue($auth_service->applies($request));
      $user = $auth_service->authenticate($request);
      $this->assertNull($user, 'User is not found.');
    }
  }

}
