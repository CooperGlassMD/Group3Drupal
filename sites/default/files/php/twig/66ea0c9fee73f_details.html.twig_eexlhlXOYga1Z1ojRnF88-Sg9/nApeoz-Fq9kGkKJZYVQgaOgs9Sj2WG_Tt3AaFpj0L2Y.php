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

/* themes/bootstrap5/templates/form/details.html.twig */
class __TwigTemplate_b8d24fdb349fa62018f3cf0a37ea7f04 extends Template
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
        // line 18
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["card"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        yield ">";
        // line 19
        if (($context["title"] ?? null)) {
            // line 21
            $context["summary_classes"] = [((            // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 23
($context["required"] ?? null)) ? ("form-required invalid-feedback") : ("")), "card-header bg-light"];
            // line 27
            yield "
    <summary";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 28, $this->source), "html", null, true);
            yield "</summary>";
        }
        // line 30
        yield "<div class=\"details-wrapper card-body\">
    ";
        // line 31
        if (($context["errors"] ?? null)) {
            // line 32
            yield "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 33, $this->source), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 36
        if (($context["description"] ?? null)) {
            // line 37
            yield "<div class=\"alert alert-info\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 37, $this->source), "html", null, true);
            yield "</div>";
        }
        // line 39
        if (($context["children"] ?? null)) {
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 40, $this->source), "html", null, true);
        }
        // line 42
        if (($context["value"] ?? null)) {
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 43, $this->source), "html", null, true);
        }
        // line 45
        yield "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/bootstrap5/templates/form/details.html.twig";
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
        return array (  90 => 45,  87 => 43,  85 => 42,  82 => 40,  80 => 39,  75 => 37,  73 => 36,  67 => 33,  64 => 32,  62 => 31,  59 => 30,  53 => 28,  50 => 27,  48 => 23,  47 => 22,  46 => 21,  44 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap5/templates/form/details.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\bootstrap5\\templates\\form\\details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 21);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
