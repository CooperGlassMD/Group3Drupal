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

/* themes/gin/templates/navigation/navigation--gin.html.twig */
class __TwigTemplate_c018e9fcbfb45954aade8d12ba3cb973 extends Template
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
        yield "<aside class=\"admin-toolbar\" id=\"admin-toolbar\" data-drupal-admin-styles>
  ";
        // line 3
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  ";
        // line 5
        $context["title_menu"] = "admin-toolbar-title";
        // line 6
        yield "
  ";
        // line 8
        yield "  <nav id=\"menu-builder\" class=\"admin-toolbar__content\" aria-labelledby=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu"] ?? null), 8, $this->source), "html", null, true);
        yield "\">
    <h3 id=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu"] ?? null), 9, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar content"));
        yield "</h3>

    <div class=\"admin-toolbar__header\">
      <div class=\"navigation-menu-wrapper menu--logo admin-toolbar__logo\">
        <ul class=\"toolbar-menu\" data-once=\"toolbar-menu\" aria-labelledby=\"menu--logo\">
          <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
            ";
        // line 15
        if (($context["icon_path"] ?? null)) {
            // line 16
            yield "              <a class=\"toolbar-link\" href=\"/\">
                <img alt=\"";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null), 17, $this->source)), "html", null, true);
            yield "\" loading=\"eager\" />
              </a>
            ";
        } else {
            // line 20
            yield "              <a href=\"/\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--gin-home\">
                <span>";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "</span>
              </a>
            ";
        }
        // line 24
        yield "          </li>
        </ul>
      </div>
    </div>

    ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_top"] ?? null), 29, $this->source), "html", null, true);
        yield "
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_middle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 31
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["section"], 31, $this->source), "html", null, true);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  </nav>

  ";
        // line 36
        yield "  <div class=\"admin-toolbar__sticky-section\">
    ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_bottom"] ?? null), 37, $this->source), "html", null, true);
        yield "
  </div>
</aside>
<script>
  if (localStorage.getItem('Drupal.navigation.sidebarExpanded') !== 'false') {
    document.documentElement.classList.add('admin-toolbar-expanded');
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_path", "menu_top", "menu_middle", "menu_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gin/templates/navigation/navigation--gin.html.twig";
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
        return array (  121 => 37,  118 => 36,  114 => 33,  105 => 31,  101 => 30,  97 => 29,  90 => 24,  84 => 21,  81 => 20,  73 => 17,  70 => 16,  68 => 15,  57 => 9,  52 => 8,  49 => 6,  47 => 5,  43 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gin/templates/navigation/navigation--gin.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\gin\\templates\\navigation\\navigation--gin.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "if" => 15, "for" => 30);
        static $filters = array("escape" => 8, "t" => 9);
        static $functions = array("file_url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 't'],
                ['file_url'],
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
