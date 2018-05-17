<?php

/* themes/axelerant/templates/page--technologies.html.twig */
class __TwigTemplate_df199742d388c879877336fd8414ef45407682d4bc93bcc4ee1bda5205054c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'technologies' => array($this, 'block_technologies'),
            'footer_firstcolumn' => array($this, 'block_footer_firstcolumn'),
            'footer_secondcolumn' => array($this, 'block_footer_secondcolumn'),
            'footer_thirdcolumn' => array($this, 'block_footer_thirdcolumn'),
            'footer_fourthcolumn' => array($this, 'block_footer_fourthcolumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67, "t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 100
        echo "
";
        // line 102
        $this->displayBlock('technologies', $context, $blocks);
        // line 107
        echo "
<div class=\"footer-wrapper\">
  <div class=\"container\">
   <div class=\"col-md-8\">
     <h2>We've helped agencies keep their promises since 2005.</h2>
   </div>
  </div>
</div>
<div class=\"footer-container\">
 <div class=\"container\">
  <div class=\"row\">
  <div class=\"col-md-8\">
   ";
        // line 120
        echo "     ";
        $this->displayBlock('footer_firstcolumn', $context, $blocks);
        // line 125
        echo "\t ";
        // line 126
        echo "     ";
        $this->displayBlock('footer_secondcolumn', $context, $blocks);
        // line 131
        echo "\t ";
        // line 132
        echo "     ";
        $this->displayBlock('footer_thirdcolumn', $context, $blocks);
        // line 137
        echo "  </div>
  
\t ";
        // line 140
        echo "     ";
        $this->displayBlock('footer_fourthcolumn', $context, $blocks);
        // line 145
        echo "  </div>
 </div>
</div>

<footer class=\"footer\" role=\"contentinfo\">
<div class=\"container\">
<span  class=\"hs_cos_wrapper float-left\">© 2018 Axelerant. All Rights Reserved.</span>
      <div class=\"social-sharing float-right\">
Are we connected?
<a href=\"https://www.facebook.com/axelerant\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
<a href=\"https://twitter.com/axelerant/\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
<a href=\"https://www.linkedin.com/company/axelerant/\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
<a href=\"mailto:hello+www@axelerant.com?subject=Check%20this%20out%20-%20Axelerant&amp;body=I%20think%20you'll%20get%20something%20out%20of%20https://www.axelerant.com.\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
</div>
</div>
</footer>";
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 70
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 72
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 74
        echo "      <div class=\"navbar-header\">
        ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 78
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "      </div>

      ";
        // line 88
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 89
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 93
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 94
            echo "        </div>
      ";
        }
        // line 96
        echo "    </header>
  ";
    }

    // line 102
    public function block_technologies($context, array $blocks = array())
    {
        // line 103
        echo "   <div class=\"technologies\">
      ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "technologies", array()), "html", null, true));
        echo "
\t </div>
";
    }

    // line 120
    public function block_footer_firstcolumn($context, array $blocks = array())
    {
        // line 121
        echo "       <div class=\"firstcolumn col-md-4 columns\">
        ";
        // line 122
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", array()), "html", null, true));
        echo "
\t   </div>
     ";
    }

    // line 126
    public function block_footer_secondcolumn($context, array $blocks = array())
    {
        // line 127
        echo "       <div class=\"secondcolumn col-md-4 columns\">
        ";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", array()), "html", null, true));
        echo "
\t   </div>
     ";
    }

    // line 132
    public function block_footer_thirdcolumn($context, array $blocks = array())
    {
        // line 133
        echo "       <div class=\"thirdcolumn col-md-4 columns\">
        ";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", array()), "html", null, true));
        echo "
\t   </div>
     ";
    }

    // line 140
    public function block_footer_fourthcolumn($context, array $blocks = array())
    {
        // line 141
        echo "       <div class=\"fourthcolumn col-md-4 columns\">
        ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", array()), "html", null, true));
        echo "
\t   </div>
     ";
    }

    public function getTemplateName()
    {
        return "themes/axelerant/templates/page--technologies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 142,  242 => 141,  239 => 140,  232 => 134,  229 => 133,  226 => 132,  219 => 128,  216 => 127,  213 => 126,  206 => 122,  203 => 121,  200 => 120,  193 => 104,  190 => 103,  187 => 102,  182 => 96,  178 => 94,  175 => 93,  169 => 90,  166 => 89,  163 => 88,  159 => 85,  150 => 79,  147 => 78,  144 => 77,  140 => 75,  137 => 74,  131 => 72,  129 => 71,  124 => 70,  122 => 67,  121 => 66,  120 => 64,  118 => 63,  115 => 62,  96 => 145,  93 => 140,  89 => 137,  86 => 132,  84 => 131,  81 => 126,  79 => 125,  76 => 120,  62 => 107,  60 => 102,  57 => 100,  53 => 62,  51 => 61,  49 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}
{# slider #}

{#  success-stories #}
{% block  technologies %}
   <div class=\"technologies\">
      {{ page. technologies}}
\t </div>
{% endblock %}

<div class=\"footer-wrapper\">
  <div class=\"container\">
   <div class=\"col-md-8\">
     <h2>We've helped agencies keep their promises since 2005.</h2>
   </div>
  </div>
</div>
<div class=\"footer-container\">
 <div class=\"container\">
  <div class=\"row\">
  <div class=\"col-md-8\">
   {# footer_firstcolumn #}
     {% block footer_firstcolumn %}
       <div class=\"firstcolumn col-md-4 columns\">
        {{ page.footer_firstcolumn }}
\t   </div>
     {% endblock %}
\t {# footer_secondcolumn #}
     {% block footer_secondcolumn %}
       <div class=\"secondcolumn col-md-4 columns\">
        {{ page.footer_secondcolumn }}
\t   </div>
     {% endblock %}
\t {# footer_thirdcolumn #}
     {% block footer_thirdcolumn %}
       <div class=\"thirdcolumn col-md-4 columns\">
        {{ page.footer_thirdcolumn }}
\t   </div>
     {% endblock %}
  </div>
  
\t {# footer_fourthcolumn #}
     {% block footer_fourthcolumn %}
       <div class=\"fourthcolumn col-md-4 columns\">
        {{ page.footer_fourthcolumn }}
\t   </div>
     {% endblock %}
  </div>
 </div>
</div>

<footer class=\"footer\" role=\"contentinfo\">
<div class=\"container\">
<span  class=\"hs_cos_wrapper float-left\">© 2018 Axelerant. All Rights Reserved.</span>
      <div class=\"social-sharing float-right\">
Are we connected?
<a href=\"https://www.facebook.com/axelerant\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
<a href=\"https://twitter.com/axelerant/\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
<a href=\"https://www.linkedin.com/company/axelerant/\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
<a href=\"mailto:hello+www@axelerant.com?subject=Check%20this%20out%20-%20Axelerant&amp;body=I%20think%20you'll%20get%20something%20out%20of%20https://www.axelerant.com.\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
</div>
</div>
</footer>", "themes/axelerant/templates/page--technologies.html.twig", "/Applications/MAMP/htdocs/themes/axelerant/templates/page--technologies.html.twig");
    }
}