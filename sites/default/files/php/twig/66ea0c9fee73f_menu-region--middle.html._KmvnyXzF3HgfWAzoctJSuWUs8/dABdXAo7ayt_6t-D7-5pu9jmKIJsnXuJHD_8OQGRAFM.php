<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gin/templates/navigation/menu-region--middle.html.twig */
class __TwigTemplate_3aa7b0a2fb54c0e452a1b9533b2535e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "<div class=\"admin-toolbar__item toolbar-block\">
  ";
        // line 3
        $context["menu_heading_id"] = ("menu--" . $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 3, $this->source));
        // line 4
        yield "  <h2 id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 4, $this->source), "html", null, true);
        yield "\" class=\"toolbar-block__title visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        yield "</h2>
  <ul class=\"toolbar-menu toolbar-menu toolbar-block__content toolbar-block__content--";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 5, $this->source), "html", null, true);
        yield "\" aria-toolbar-link__labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 5, $this->source), "html", null, true);
        yield "\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attribute"] ?? null)], 6, $context, $this->getSourceContext()));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "menu_name", "title", "items", "attribute", "item_id"]);        return; yield '';
    }

    // line 10
    public function macro_menu_items($__items__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 12
                yield "    ";
                $context["item_class"] = ("toolbar-link--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, true, 12), 12, $this->source)));
                // line 13
                yield "    <li id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 13, $this->source), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 13)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                yield " toolbar-menu__item toolbar-menu__item--level-1\" data-url=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                yield "\">
      ";
                // line 14
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 14))) {
                    // line 15
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15)) {
                        // line 16
                        yield "          <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-link toolbar-link--has-icon ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 16, $this->source), "html", null, true);
                        yield "\">
            <span>";
                        // line 17
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        yield "</span>
          </a>
        ";
                    } else {
                        // line 20
                        yield "          <button class=\"toolbar-link toolbar-link--has-icon ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 20, $this->source), "html", null, true);
                        yield "\">
            <span>";
                        // line 21
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                        yield "</span>
          </button>
        ";
                    }
                    // line 24
                    yield "      ";
                }
                // line 25
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25)) {
                    // line 26
                    yield "      <button class=\"toolbar-link toolbar-link--has-icon ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 26, $this->source), "html", null, true);
                    yield "\">
        <span class=\"toolbar-link__action\">";
                    // line 27
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    yield "</span>
        <span class=\"toolbar-link__label\">";
                    // line 28
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    yield "</span>
      </button>
      <div class=\"toolbar-menu__submenu\">
        <div class=\"toolbar-menu__arrow-ref\"></div>
        <ul class=\"toolbar-menu\">
          <li class=\"toolbar-menu__item toolbar-menu__item--to-title\">
            <a class=\"toolbar-link toolbar-link--has-icon ";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 34, $this->source), "html", null, true);
                    yield "\" href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    yield "\" data-url=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    yield "\">
              <span class=\"toolbar-link__action\">";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    yield "</span>
              <span class=\"toolbar-link__label\">";
                    // line 36
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    yield "</span>
            </a>
          </li>
          ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        yield "            <li class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                        yield " toolbar-menu__item toolbar-menu__item--level-2\">
              ";
                        // line 41
                        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 41))) {
                            // line 42
                            yield "                <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                            yield "\" class=\"toolbar-link\">
                <span>";
                            // line 43
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                            yield "</span>
              </a>
              ";
                        }
                        // line 46
                        yield "              ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46)) {
                            // line 47
                            yield "                <button class=\"toolbar-link\" aria-expanded=\"false\" data-url=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                            yield "\">
                  <span class=\"toolbar-link__action\">";
                            // line 48
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                            yield "</span>
                  <span class=\"toolbar-link__label\">";
                            // line 49
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                            yield "</span>
                </button>
                <ul class=\"toolbar-menu\">
                  ";
                            // line 52
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 53
                                yield "                    <li class=\"toolbar-menu__item toolbar-menu__item--level-3\">
                      <a href=\"";
                                // line 54
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                                yield "\" class=\"toolbar-link\">
                        <span class=\"toolbar-link__label\">";
                                // line 55
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                                yield "</span>
                      </a>
                    </li>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            yield "                </ul>
              ";
                        }
                        // line 61
                        yield "            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    yield "        </ul>
      </div>
    ";
                }
                // line 66
                yield "  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gin/templates/navigation/menu-region--middle.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  249 => 66,  244 => 63,  237 => 61,  233 => 59,  223 => 55,  219 => 54,  216 => 53,  212 => 52,  206 => 49,  202 => 48,  197 => 47,  194 => 46,  188 => 43,  183 => 42,  181 => 41,  176 => 40,  172 => 39,  166 => 36,  162 => 35,  154 => 34,  145 => 28,  141 => 27,  136 => 26,  133 => 25,  130 => 24,  124 => 21,  119 => 20,  113 => 17,  106 => 16,  103 => 15,  101 => 14,  92 => 13,  89 => 12,  84 => 11,  71 => 10,  60 => 6,  54 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gin/templates/navigation/menu-region--middle.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\gin\\templates\\navigation\\menu-region--middle.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 3, "macro" => 10, "for" => 11, "if" => 14);
        static $filters = array("escape" => 4, "clean_class" => 12, "t" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'for', 'if'],
                ['escape', 'clean_class', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
