<?php

/* themes/bootstrap_subtheme/templates/page.html.twig */
class __TwigTemplate_98aee97404373acd07289cbb51d31f6d582ae05b6d8054514abdc007f26c5551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_third' => array($this, 'block_footer_third'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 69, "if" => 71, "block" => 72);
        $filters = array("clean_class" => 77, "t" => 86);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        echo "

<div class=\"main-container\">
    <div class=\"row\">
 
        <div class=\"col-sm-12 logo_custom\">
 
        </div> 
    </div>\t
</div>
";
        // line 69
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 71
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 72
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 103
        echo "
";
        // line 105
        $this->displayBlock('main', $context, $blocks);
        // line 184
        echo "
<div class=\"main-container bg\">
\t<div class=\"container\">
\t\t<div class=\"row footer-area\">
\t\t";
        // line 188
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 189
            echo "\t\t  ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 194
            echo "\t\t";
        }
        // line 195
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 196
            echo "\t\t  ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 201
            echo "\t\t";
        }
        // line 202
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 203
            echo "\t\t  ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 208
            echo "\t\t";
        }
        // line 209
        echo "\t\t</div>
\t</div>
</div>
<div class=\"main-container\" style=\"background-color:#0D0D0D;\">
\t<div class=\"container\">
\t\t<p style=\"color:#fefcef; padding-top:10px; padding-bottom:10px;\">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>
\t</div>
</div>

";
        // line 218
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 219
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 225
        echo "
";
    }

    // line 72
    public function block_navbar($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 77
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 80
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 84
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 85
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 92
        echo "      </div>

      ";
        // line 95
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 96
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 100
        echo "    </header>
  ";
    }

    // line 105
    public function block_main($context, array $blocks = array())
    {
        // line 106
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 110
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 111
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 116
            echo "      ";
        }
        // line 117
        echo "
      ";
        // line 119
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 120
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 125
            echo "      ";
        }
        // line 126
        echo "
      ";
        // line 128
        echo "      ";
        // line 129
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 130
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 131
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 132
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 133
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 136
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 139
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 140
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 146
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 147
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 150
            echo "        ";
        }
        // line 151
        echo "
        ";
        // line 153
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 154
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 160
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 161
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 164
            echo "        ";
        }
        // line 165
        echo "
        ";
        // line 167
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 171
        echo "      </section>

      ";
        // line 174
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 175
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 180
            echo "      ";
        }
        // line 181
        echo "    </div>
  </div>
";
    }

    // line 111
    public function block_header($context, array $blocks = array())
    {
        // line 112
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 120
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 121
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 140
    public function block_highlighted($context, array $blocks = array())
    {
        // line 141
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 147
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 148
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 154
    public function block_action_links($context, array $blocks = array())
    {
        // line 155
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 161
    public function block_help($context, array $blocks = array())
    {
        // line 162
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 167
    public function block_content($context, array $blocks = array())
    {
        // line 168
        echo "          <a id=\"main-content\"></a>
          ";
        // line 169
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 175
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 176
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 177
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 189
    public function block_footer_first($context, array $blocks = array())
    {
        // line 190
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 191
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 196
    public function block_footer_second($context, array $blocks = array())
    {
        // line 197
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 198
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 203
    public function block_footer_third($context, array $blocks = array())
    {
        // line 204
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 205
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 219
    public function block_footer($context, array $blocks = array())
    {
        // line 220
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 221
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 221,  442 => 220,  439 => 219,  432 => 205,  429 => 204,  426 => 203,  419 => 198,  416 => 197,  413 => 196,  406 => 191,  403 => 190,  400 => 189,  393 => 177,  390 => 176,  387 => 175,  381 => 169,  378 => 168,  375 => 167,  368 => 162,  365 => 161,  358 => 155,  355 => 154,  348 => 148,  345 => 147,  338 => 141,  335 => 140,  328 => 122,  325 => 121,  322 => 120,  315 => 113,  312 => 112,  309 => 111,  303 => 181,  300 => 180,  297 => 175,  294 => 174,  290 => 171,  287 => 167,  284 => 165,  281 => 164,  278 => 161,  275 => 160,  272 => 158,  269 => 157,  266 => 154,  263 => 153,  260 => 151,  257 => 150,  254 => 147,  251 => 146,  248 => 144,  245 => 143,  242 => 140,  239 => 139,  233 => 136,  231 => 133,  230 => 132,  229 => 131,  228 => 130,  227 => 129,  225 => 128,  222 => 126,  219 => 125,  216 => 120,  213 => 119,  210 => 117,  207 => 116,  204 => 111,  201 => 110,  194 => 106,  191 => 105,  186 => 100,  180 => 97,  177 => 96,  174 => 95,  170 => 92,  161 => 86,  158 => 85,  155 => 84,  151 => 82,  145 => 80,  143 => 77,  142 => 76,  141 => 74,  139 => 73,  136 => 72,  131 => 225,  127 => 219,  125 => 218,  114 => 209,  111 => 208,  108 => 203,  105 => 202,  102 => 201,  99 => 196,  96 => 195,  93 => 194,  90 => 189,  88 => 188,  82 => 184,  80 => 105,  77 => 103,  73 => 72,  71 => 71,  69 => 69,  57 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* */
/* <div class="main-container">*/
/*     <div class="row">*/
/*  */
/*         <div class="col-sm-12 logo_custom">*/
/*  */
/*         </div> */
/*     </div>	*/
/* </div>*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* <div class="main-container bg">*/
/* 	<div class="container">*/
/* 		<div class="row footer-area">*/
/* 		{% if page.footer_first %}*/
/* 		  {% block footer_first %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_first }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_second %}*/
/* 		  {% block footer_second %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_second }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_third %}*/
/* 		  {% block footer_third %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_third }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="main-container" style="background-color:#0D0D0D;">*/
/* 	<div class="container">*/
/* 		<p style="color:#fefcef; padding-top:10px; padding-bottom:10px;">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* */
