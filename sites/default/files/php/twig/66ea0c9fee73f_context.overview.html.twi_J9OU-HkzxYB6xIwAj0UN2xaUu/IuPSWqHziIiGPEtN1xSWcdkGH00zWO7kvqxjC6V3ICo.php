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

/* @help_topics/context.overview.html.twig */
class __TwigTemplate_16566a3a43ad59b23ebcad2c753b06c4 extends Template
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
        // line 5
        $context["context_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 6
            yield t("Context", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "<h2>";
        yield t("About", array());
        yield "</h2>
<p>";
        // line 9
        yield t("The <em>Context</em> module lets users define conditions for when certain reactions should take place.", array());
        yield "</p>
<p>";
        // line 10
        yield t("An example of a condition could be when viewing a certain node type and blocks should be placed as a reaction when viewing a page with this node type.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Uses", array());
        yield "</h2>
<dl>
<dt>";
        // line 13
        yield t("Managing Context", array());
        yield "</dt>
<dd>";
        // line 14
        yield t("Users with <em>Administer contexts</em> permission can add contextual conditions and reactions for different portions of their site. For each context, they can choose the conditions that trigger this context to be active and choose different aspects of their site that should react to this active context.", array());
        yield "</dd>
<dt>";
        // line 15
        yield t("Adding new custom reactions", array());
        yield "</dt>
<dd>";
        // line 16
        yield t("Reactions for the context module are defined trough the new <a href=\"https://www.drupal.org/developing/api/8/plugins\">Drupal 8 Plugin API</a>.", array());
        yield "</dd>
<dd>";
        // line 17
        yield t("The Context module defines a plugin type named ContextReaction that users can extend when creating their own plugins.", array());
        yield "</dd>
<dd>";
        // line 18
        yield t("A context reaction requires a configuration form and execute method. The execution of the plugin is also something that will have to be handled by the author of the reaction.", array());
        yield "</dd>
</dl>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/context.overview.html.twig";
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
        return array (  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  59 => 11,  55 => 10,  51 => 9,  46 => 8,  42 => 6,  40 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/context.overview.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\contrib\\context\\help_topics\\context.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                [],
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
