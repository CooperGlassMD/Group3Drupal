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

/* themes/gin/templates/navigation/menu-region--bottom.html.twig */
class __TwigTemplate_e50216977384729ecd52d601f51fbadd extends Template
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
        $context["item_id"] = ("item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 1, $this->source)));
        // line 2
        yield "
<div class=\"admin-toolbar__item toolbar-block\">
  <ul class=\"toolbar-menu\">
    ";
        // line 5
        if (($context["help_enabled"] ?? null)) {
            // line 6
            yield "    <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
      <a href=\"";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("help.main"));
            yield "\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--help\">
        <span>";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Help"));
            yield "</span>
      </a>
    </li>
    ";
        }
        // line 12
        yield "    <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
      <button aria-controls=\"admin-toolbar\" aria-expanded=\"true\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--sidebar-toggle sidebar-toggle\">
        ";
        // line 15
        yield "        <span id=\"sidebar-state\" class=\"toolbar-link__label\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </li>
    <li class=\"toolbar-menu__item toolbar-menu__item--has-dropdown toolbar-menu__item--user toolbar-menu__item--level-1\">
      <button class=\"toolbar-link toolbar-link--has-icon toolbar-link--";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 19, $this->source)), "html", null, true);
        yield "\" data-url=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 19, $this->source), "html", null, true);
        yield "\">
        <span class=\"toolbar-link__action\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
        yield "</span>
        <span class=\"toolbar-link__label\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
        yield "</span>
      </button>
      <div class=\"toolbar-menu__submenu\">
        <div class=\"toolbar-menu__arrow-ref\"></div>
        <ul class=\"toolbar-menu\">
          <li class=\"toolbar-menu__item toolbar-menu__item--to-title\">
            <button class=\"toolbar-link toolbar-link--has-icon toolbar-link--";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 27, $this->source)), "html", null, true);
        yield "\" tabindex=\"-1\">
              <span class=\"toolbar-link__action\">";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
        yield "</span>
              <span class=\"toolbar-link__label\">";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
        yield "</span>
            </button>
          </li>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            yield "            <li class=\"toolbar-menu__item toolbar-menu__item--level-2\">
              <a href=\"";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            yield "\" class=\"toolbar-link\">
                <span>";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "</span>
              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </ul>
      </div>
    </li>
  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "help_enabled", "menu_name", "url", "items"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gin/templates/navigation/menu-region--bottom.html.twig";
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
        return array (  129 => 39,  119 => 35,  115 => 34,  112 => 33,  108 => 32,  102 => 29,  98 => 28,  94 => 27,  85 => 21,  81 => 20,  75 => 19,  67 => 15,  63 => 12,  56 => 8,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gin/templates/navigation/menu-region--bottom.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\gin\\templates\\navigation\\menu-region--bottom.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5, "for" => 32);
        static $filters = array("clean_class" => 1, "t" => 8, "escape" => 19);
        static $functions = array("path" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 't', 'escape'],
                ['path'],
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
