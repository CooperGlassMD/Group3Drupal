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

/* themes/dxpr_theme/templates/page.html.twig */
class __TwigTemplate_3f1a680a13ab3b73faed8cd1d092a468 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'secondary_header' => [$this, 'block_secondary_header'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 60), "getString", [], "method", false, false, true, 60) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "boxed_layout", [], "any", false, false, true, 60)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 61
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 61), "getString", [], "method", false, false, true, 61) == "boxed"))) {
            // line 62
            yield "<div class=\"dxpr-theme-boxed-container\">
";
        }
        // line 64
        yield "
";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 66)) {
            // line 67
            yield "  ";
            yield from $this->unwrap()->yieldBlock('secondary_header', $context, $blocks);
        }
        // line 82
        yield "
";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 84) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 84))) {
            // line 85
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 142
        yield "
<div class=\"wrap-containers\">

";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146)) {
            // line 147
            yield "  ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
        }
        // line 151
        yield "
";
        // line 153
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 153) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 153), "page_title_home_hide", [], "any", false, false, true, 153) && ($context["is_front"] ?? null)))) {
            // line 154
            yield "
  ";
            // line 155
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        }
        // line 169
        yield "
";
        // line 171
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 171)) {
            // line 172
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        }
        // line 185
        yield "
";
        // line 187
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 264
        yield "
";
        // line 266
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 266)) {
            // line 267
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        }
        // line 280
        yield "</div>

";
        // line 283
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 283)) {
            // line 284
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 299
        yield "
";
        // line 300
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 300), "getString", [], "method", false, false, true, 300) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 300), "boxed_layout", [], "any", false, false, true, 300)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 301
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 301), "getString", [], "method", false, false, true, 301) == "boxed"))) {
            // line 302
            yield "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "theme", "page", "is_front", "title_bg_image_path", "page_title_attributes", "content_attributes", "action_links"]);        return; yield '';
    }

    // line 67
    public function block_secondary_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "full_width_containers", [], "any", false, false, true, 68), "cnt_secondary_header", [], "any", false, false, true, 68)) ? ("dxpr-theme-fluid") : ("container"));
        // line 69
        yield "    <header id=\"secondary-header\" class=\"dxpr-theme-secondary-header clearfix ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 69), "secondary_header_hide", [], "any", false, false, true, 69), 69, $this->source)), "html", null, true);
        yield "\" role=\"banner\">
      <div class=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 70, $this->source), "html", null, true);
        yield " secondary-header-container\">
        ";
        // line 71
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 71), "full_width_containers", [], "any", false, false, true, 71), "cnt_secondary_header", [], "any", false, false, true, 71)) {
            // line 72
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 74
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        yield "
        ";
        // line 75
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "full_width_containers", [], "any", false, false, true, 75), "cnt_secondary_header", [], "any", false, false, true, 75)) {
            // line 76
            yield "          </div></div>
        ";
        }
        // line 78
        yield "      </div>
    </header>
  ";
        return; yield '';
    }

    // line 85
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 86), "header_position", [], "any", false, false, true, 86)) {
            // line 87
            yield "      ";
            // line 88
            $context["navbar_classes"] = ["navbar dxpr-theme-header dxpr-theme-header--top", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 90
($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 90), "navbar_position", [], "any", false, false, true, 90), 90, $this->source))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["theme"] ?? null), "settings", [], "any", false, false, true, 91), "header_side_align", [], "any", false, false, true, 91)];
            // line 94
            yield "    ";
        } else {
            // line 95
            yield "      ";
            // line 96
            $context["navbar_classes"] = ["navbar dxpr-theme-header clearfix", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["theme"] ?? null), "settings", [], "any", false, false, true, 98), "header_position", [], "any", false, false, true, 98)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 99), "navbar_position", [], "any", false, false, true, 99), 99, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 100
($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 100), "header_top_layout", [], "any", false, false, true, 100), 100, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 101), "header_style", [], "any", false, false, true, 101), 101, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 102), "menu_hover", [], "any", false, false, true, 102), 102, $this->source)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_fixed", [], "any", false, false, true, 103) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 103), "header_top_sticky", [], "any", false, false, true, 103))) ? ("dxpr-theme-header--sticky") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_fixed", [], "any", false, false, true, 104) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_top_sticky", [], "any", false, false, true, 104))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 107
            yield "    ";
        }
        // line 108
        yield "    ";
        $context["mark_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 108), "mark_menu_with_children", [], "any", false, false, true, 108)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 109
        yield "    ";
        $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", ["container"], "method", false, false, true, 109), "addClass", [($context["navbar_classes"] ?? null)], "method", false, false, true, 109);
        // line 110
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_fixed", [], "any", false, false, true, 110) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_sticky", [], "any", false, false, true, 110))) {
            // line 111
            yield "      ";
            $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", ["data-spy", "affix"], "method", false, false, true, 111), "setAttribute", ["data-offset-top", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 111), "header_top_height_sticky_offset", [], "any", false, false, true, 111)], "method", false, false, true, 111);
            // line 112
            yield "    ";
        }
        // line 113
        yield "    ";
        $context["hamburger_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 113), "hamburger_menu", [], "any", false, false, true, 113)) : ("three-dash"));
        // line 114
        yield "
    <header";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 115, $this->source), "html", null, true);
        yield ">
      ";
        // line 116
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 116), "full_width_containers", [], "any", false, false, true, 116), "cnt_header_nav", [], "any", false, false, true, 116)) ? ("dxpr-theme-fluid") : ("container"));
        // line 117
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 117, $this->source), "html", null, true);
        yield " navbar-container\">
        ";
        // line 118
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 118), "full_width_containers", [], "any", false, false, true, 118), "cnt_header_nav", [], "any", false, false, true, 118)) {
            // line 119
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 121
        yield "        <div class=\"navbar-header\">
          ";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        yield "
          ";
        // line 124
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 124)) {
            // line 125
            yield "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 125, $this->source), "html", null, true);
            yield "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 127
        yield "        </div>

        ";
        // line 130
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 130)) {
            // line 131
            yield "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 131, $this->source), "html", null, true);
            yield "\">
            ";
            // line 132
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            yield "
            </nav>
        ";
        }
        // line 135
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 135), "full_width_containers", [], "any", false, false, true, 135), "cnt_header_nav", [], "any", false, false, true, 135)) {
            // line 136
            yield "          </div></div>
        ";
        }
        // line 138
        yield "      </div>
    </header>
  ";
        return; yield '';
    }

    // line 147
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 155
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        yield "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 157
            yield "    <style>
      #page-title-full-width-container::after{ background-image:url(";
            // line 158
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 158, $this->source)), "html", null, true);
            yield ");}
    </style>
  ";
        }
        // line 161
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 161, $this->source), "html", null, true);
        yield " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 162
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 162), "full_width_containers", [], "any", false, false, true, 162), "cnt_page_title", [], "any", false, false, true, 162)) ? ("dxpr-theme-fluid") : ("container"));
        // line 163
        yield "      <header role=\"banner\" id=\"page-title\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 163, $this->source), "html", null, true);
        yield " page-title-container\">
        ";
        // line 164
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        yield "
      </header>
    </div>
  ";
        return; yield '';
    }

    // line 172
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 173), "full_width_containers", [], "any", false, false, true, 173), "cnt_content_top", [], "any", false, false, true, 173)) ? ("dxpr-theme-fluid") : ("container"));
        // line 174
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 174, $this->source), "html", null, true);
        yield " content-top-container\">
      ";
        // line 175
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 175), "full_width_containers", [], "any", false, false, true, 175), "cnt_content_top", [], "any", false, false, true, 175)) {
            // line 176
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 178
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
        yield "
      ";
        // line 179
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 179), "full_width_containers", [], "any", false, false, true, 179), "cnt_content_top", [], "any", false, false, true, 179)) {
            // line 180
            yield "      </div></div>
      ";
        }
        // line 182
        yield "    </div>
  ";
        return; yield '';
    }

    // line 187
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        yield "  ";
        $context["container"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 188), "full_width_containers", [], "any", false, false, true, 188), "cnt_content", [], "any", false, false, true, 188) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 189
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 189), "getString", [], "method", false, false, true, 189) == "dxpr-theme-util-full-width-content")) || (((        // line 190
($context["node"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 190), "full_width_content_types", [], "any", false, false, true, 190), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 190), [], "any", false, false, true, 190)) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 191
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191), 191, $this->source))))) &&  !Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 192
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 192), 192, $this->source))))))) ? ("") : ("container"));
        // line 193
        yield "  <div role=\"main\" class=\"main-container ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 193, $this->source), "html", null, true);
        yield " js-quickedit-main-content clearfix\">
    ";
        // line 194
        if ((($context["container"] ?? null) != "")) {
            // line 195
            yield "    <div class=\"row\">
    ";
        }
        // line 197
        yield "      ";
        // line 198
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 198))))) {
            // line 199
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 204
            yield "      ";
        }
        // line 205
        yield "
      ";
        // line 207
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 207), "getString", [], "method", false, false, true, 207)) {
            // line 208
            yield "        ";
            // line 209
            $context["content_classes"] = [(((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 210
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 210), 210, $this->source)))) && Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 210), 210, $this->source)))))) ? ("col-sm-6") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 211
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 211), 211, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 211), 211, $this->source))))))) ? ("col-sm-9") : ("")), (((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 212
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 212), 212, $this->source)))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 212), 212, $this->source))))))) ? ("col-sm-9") : ("")), (((((            // line 213
($context["container"] ?? null) != "") && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 213), 213, $this->source)))))) && Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 213), 213, $this->source))))))) ? ("col-sm-12") : (""))];
            // line 216
            yield "      ";
        } else {
            // line 217
            yield "        ";
            $context["col"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 217), "getString", [], "method", false, false, true, 217);
            // line 218
            yield "        ";
            // line 219
            $context["content_classes"] = [(((            // line 220
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 col-md-offset-4") : ("")), (((            // line 221
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 col-md-offset-3") : ("")), (((            // line 222
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 col-md-offset-2") : ("")), (((            // line 223
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 col-md-offset-1") : (""))];
            // line 226
            yield "      ";
        }
        // line 227
        yield "
      <section";
        // line 228
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 228), 228, $this->source), "html", null, true);
        yield ">

        ";
        // line 231
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 232
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 235
            yield "        ";
        }
        // line 236
        yield "
        ";
        // line 238
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 238)) {
            // line 239
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 242
            yield "        ";
        }
        // line 243
        yield "
        ";
        // line 245
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 249
        yield "      </section>

      ";
        // line 252
        yield "      ";
        if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 252))))) {
            // line 253
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 258
            yield "      ";
        }
        // line 259
        yield "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 260
            yield "    </div><!-- end .ow -->
    ";
        }
        // line 262
        yield "  </div><!-- end main-container -->
";
        return; yield '';
    }

    // line 199
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 201
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 232
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        yield "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 233, $this->source), "html", null, true);
        yield "</ul>
          ";
        return; yield '';
    }

    // line 239
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 240
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
        yield "
          ";
        return; yield '';
    }

    // line 245
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        yield "          <a id=\"main-content\"></a>
          ";
        // line 247
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    // line 253
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 255
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        return; yield '';
    }

    // line 267
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 268), "full_width_containers", [], "any", false, false, true, 268), "cnt_content_bottom", [], "any", false, false, true, 268)) ? ("dxpr-theme-fluid") : ("container"));
        // line 269
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 269, $this->source), "html", null, true);
        yield " content-bottom-container\">
      ";
        // line 270
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 270), "full_width_containers", [], "any", false, false, true, 270), "cnt_content_bottom", [], "any", false, false, true, 270)) {
            // line 271
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 273
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
        yield "
      ";
        // line 274
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 274), "full_width_containers", [], "any", false, false, true, 274), "cnt_content_bottom", [], "any", false, false, true, 274)) {
            // line 275
            yield "      </div></div>
      ";
        }
        // line 277
        yield "    </div>
  ";
        return; yield '';
    }

    // line 284
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 285
        yield "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 286
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 286), "full_width_containers", [], "any", false, false, true, 286), "cnt_footer", [], "any", false, false, true, 286)) ? ("dxpr-theme-fluid") : ("container"));
        // line 287
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 287, $this->source), "html", null, true);
        yield " footer-container\">
        ";
        // line 288
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 288), "full_width_containers", [], "any", false, false, true, 288), "cnt_footer", [], "any", false, false, true, 288)) {
            // line 289
            yield "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 291
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        yield "
        ";
        // line 292
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 292), "full_width_containers", [], "any", false, false, true, 292), "cnt_footer", [], "any", false, false, true, 292)) {
            // line 293
            yield "        </div></div>
        ";
        }
        // line 295
        yield "      </div>
    </footer>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/dxpr_theme/templates/page.html.twig";
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
        return array (  646 => 295,  642 => 293,  640 => 292,  635 => 291,  631 => 289,  629 => 288,  624 => 287,  622 => 286,  619 => 285,  615 => 284,  609 => 277,  605 => 275,  603 => 274,  598 => 273,  594 => 271,  592 => 270,  587 => 269,  584 => 268,  580 => 267,  572 => 255,  569 => 254,  565 => 253,  558 => 247,  555 => 246,  551 => 245,  543 => 240,  539 => 239,  531 => 233,  527 => 232,  519 => 201,  516 => 200,  512 => 199,  506 => 262,  502 => 260,  499 => 259,  496 => 258,  493 => 253,  490 => 252,  486 => 249,  483 => 245,  480 => 243,  477 => 242,  474 => 239,  471 => 238,  468 => 236,  465 => 235,  462 => 232,  459 => 231,  454 => 228,  451 => 227,  448 => 226,  446 => 223,  445 => 222,  444 => 221,  443 => 220,  442 => 219,  440 => 218,  437 => 217,  434 => 216,  432 => 213,  431 => 212,  430 => 211,  429 => 210,  428 => 209,  426 => 208,  423 => 207,  420 => 205,  417 => 204,  414 => 199,  411 => 198,  409 => 197,  405 => 195,  403 => 194,  398 => 193,  396 => 192,  395 => 191,  394 => 190,  393 => 189,  391 => 188,  387 => 187,  381 => 182,  377 => 180,  375 => 179,  370 => 178,  366 => 176,  364 => 175,  359 => 174,  356 => 173,  352 => 172,  343 => 164,  338 => 163,  336 => 162,  331 => 161,  325 => 158,  322 => 157,  319 => 156,  315 => 155,  307 => 148,  303 => 147,  296 => 138,  292 => 136,  289 => 135,  283 => 132,  278 => 131,  275 => 130,  271 => 127,  265 => 125,  262 => 124,  258 => 122,  255 => 121,  251 => 119,  249 => 118,  244 => 117,  242 => 116,  238 => 115,  235 => 114,  232 => 113,  229 => 112,  226 => 111,  223 => 110,  220 => 109,  217 => 108,  214 => 107,  212 => 104,  211 => 103,  210 => 102,  209 => 101,  208 => 100,  207 => 99,  206 => 98,  205 => 96,  203 => 95,  200 => 94,  198 => 91,  197 => 90,  196 => 88,  194 => 87,  191 => 86,  187 => 85,  180 => 78,  176 => 76,  174 => 75,  169 => 74,  165 => 72,  163 => 71,  159 => 70,  154 => 69,  151 => 68,  147 => 67,  139 => 302,  137 => 301,  136 => 300,  133 => 299,  129 => 284,  127 => 283,  123 => 280,  119 => 267,  117 => 266,  114 => 264,  112 => 187,  109 => 185,  105 => 172,  103 => 171,  100 => 169,  97 => 155,  94 => 154,  92 => 153,  89 => 151,  85 => 147,  83 => 146,  78 => 142,  74 => 85,  72 => 84,  69 => 82,  65 => 67,  63 => 66,  60 => 64,  56 => 62,  54 => 61,  53 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/dxpr_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\dxpr_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60, "block" => 67, "set" => 68);
        static $filters = array("escape" => 69, "clean_class" => 69, "trim" => 191, "striptags" => 191, "render" => 191);
        static $functions = array("file_url" => 158);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'render'],
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
