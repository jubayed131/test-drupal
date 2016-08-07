<?php

/* themes/bootstrap_subtheme/templates/page--front.html.twig */
class __TwigTemplate_ff9ee1c57a46c8d4c5d89285bab47697016656bbd0db8a1eed1337fd7863cd81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'advertise' => array($this, 'block_advertise'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'newsrow_one_top_first' => array($this, 'block_newsrow_one_top_first'),
            'newsrow_one_top_second' => array($this, 'block_newsrow_one_top_second'),
            'newsrow_one_top_third' => array($this, 'block_newsrow_one_top_third'),
            'newsrow_one_fourth' => array($this, 'block_newsrow_one_fourth'),
            'advertise_second' => array($this, 'block_advertise_second'),
            'newsrow_two_first' => array($this, 'block_newsrow_two_first'),
            'newsrow_two_second_top' => array($this, 'block_newsrow_two_second_top'),
            'newsrow_two_third' => array($this, 'block_newsrow_two_third'),
            'newsrow_three_first' => array($this, 'block_newsrow_three_first'),
            'newsrow_three_second' => array($this, 'block_newsrow_three_second'),
            'newsrow_three_third' => array($this, 'block_newsrow_three_third'),
            'newsrow_four_first' => array($this, 'block_newsrow_four_first'),
            'newsrow_four_second' => array($this, 'block_newsrow_four_second'),
            'newsrow_five_first' => array($this, 'block_newsrow_five_first'),
            'newsrow_five_second' => array($this, 'block_newsrow_five_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_third' => array($this, 'block_footer_third'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 71, "if" => 73, "block" => 74);
        $filters = array("clean_class" => 79, "t" => 88);
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

        // line 1
        echo "

";
        // line 61
        echo "
<div class=\"main-container\">
    <div class=\"row\">
 
        <div class=\"col-sm-12 logo_custom\">
 
        </div> 
    </div>\t
</div>

";
        // line 71
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 73
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 74
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 348
        echo "

<div class=\"main-container bg\">
\t<div class=\"container\">
\t\t<div class=\"row footer-area\">
\t\t";
        // line 353
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 354
            echo "\t\t  ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 359
            echo "\t\t";
        }
        // line 360
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 361
            echo "\t\t  ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 366
            echo "\t\t";
        }
        // line 367
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 368
            echo "\t\t  ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 373
            echo "\t\t";
        }
        // line 374
        echo "\t\t</div>
\t</div>
</div>
<div class=\"main-container\" style=\"background-color:#0D0D0D;\">
\t<div class=\"container\">
\t\t<p style=\"color:#fefcef; padding-top:10px; padding-bottom:10px;\">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>
\t</div>
</div>

";
        // line 383
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 384
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 390
        echo "

";
    }

    // line 74
    public function block_navbar($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        // line 76
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 78
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 79
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 82
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 86
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 87
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 94
        echo "      </div>

      ";
        // line 97
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 98
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 102
        echo "    </header>
  ";
    }

    // line 107
    public function block_main($context, array $blocks = array())
    {
        // line 108
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
\t\t
      ";
        // line 112
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 113
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "\t  
\t   ";
        // line 121
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array())) {
            // line 122
            echo "        ";
            $this->displayBlock('advertise', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 131
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "
      ";
        // line 139
        echo "      ";
        // line 140
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 141
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 143
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 144
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 147
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 150
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 158
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 161
            echo "        ";
        }
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 165
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 168
            echo "        ";
        }
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 172
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 175
            echo "        ";
        }
        // line 176
        echo "
        ";
        // line 178
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 182
        echo "      </section>

      ";
        // line 185
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 186
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 191
            echo "      ";
        }
        // line 192
        echo "    </div>
\t
\t<div class=\"row\">
\t  ";
        // line 196
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array())) {
            // line 197
            echo "        ";
            $this->displayBlock('newsrow_one_top_first', $context, $blocks);
            // line 202
            echo "      ";
        }
        echo "\t

\t\t";
        // line 205
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array())) {
            // line 206
            echo "        ";
            $this->displayBlock('newsrow_one_top_second', $context, $blocks);
            // line 211
            echo "      ";
        }
        // line 212
        echo "\t  
\t  ";
        // line 214
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array())) {
            // line 215
            echo "        ";
            $this->displayBlock('newsrow_one_top_third', $context, $blocks);
            // line 220
            echo "      ";
        }
        // line 221
        echo "\t  
\t  ";
        // line 223
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array())) {
            // line 224
            echo "        ";
            $this->displayBlock('newsrow_one_fourth', $context, $blocks);
            // line 229
            echo "      ";
        }
        // line 230
        echo "\t</div>
\t
\t<div class=\"row\">
\t    ";
        // line 234
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array())) {
            // line 235
            echo "        ";
            $this->displayBlock('advertise_second', $context, $blocks);
            // line 240
            echo "      ";
        }
        // line 241
        echo "\t</div>
\t<div class=\"row\">
\t";
        // line 244
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array())) {
            // line 245
            echo "        ";
            $this->displayBlock('newsrow_two_first', $context, $blocks);
            // line 250
            echo "      ";
        }
        // line 251
        echo "\t  
\t  ";
        // line 253
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array())) {
            // line 254
            echo "        ";
            $this->displayBlock('newsrow_two_second_top', $context, $blocks);
            // line 260
            echo "      ";
        }
        // line 261
        echo "\t  
\t  
\t  ";
        // line 264
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array())) {
            // line 265
            echo "        ";
            $this->displayBlock('newsrow_two_third', $context, $blocks);
            // line 270
            echo "      ";
        }
        // line 271
        echo "\t</div>
\t
\t<div class=\"row\">
\t
\t";
        // line 276
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array())) {
            // line 277
            echo "        ";
            $this->displayBlock('newsrow_three_first', $context, $blocks);
            // line 282
            echo "      ";
        }
        // line 283
        echo "\t  
\t";
        // line 285
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array())) {
            // line 286
            echo "        ";
            $this->displayBlock('newsrow_three_second', $context, $blocks);
            // line 291
            echo "      ";
        }
        // line 292
        echo "\t    
\t";
        // line 294
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array())) {
            // line 295
            echo "        ";
            $this->displayBlock('newsrow_three_third', $context, $blocks);
            // line 300
            echo "      ";
        }
        // line 301
        echo "\t
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 306
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array())) {
            // line 307
            echo "        ";
            $this->displayBlock('newsrow_four_first', $context, $blocks);
            // line 312
            echo "      ";
        }
        // line 313
        echo "\t  
\t";
        // line 315
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array())) {
            // line 316
            echo "        ";
            $this->displayBlock('newsrow_four_second', $context, $blocks);
            // line 321
            echo "      ";
        }
        // line 322
        echo "\t  
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 327
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array())) {
            // line 328
            echo "        ";
            $this->displayBlock('newsrow_five_first', $context, $blocks);
            // line 333
            echo "      ";
        }
        // line 334
        echo "\t  
\t";
        // line 336
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array())) {
            // line 337
            echo "        ";
            $this->displayBlock('newsrow_five_second', $context, $blocks);
            // line 342
            echo "      ";
        }
        // line 343
        echo "\t  
\t</div>
\t
  </div>
";
    }

    // line 113
    public function block_header($context, array $blocks = array())
    {
        // line 114
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 115
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 122
    public function block_advertise($context, array $blocks = array())
    {
        // line 123
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 131
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 132
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 133
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 151
    public function block_highlighted($context, array $blocks = array())
    {
        // line 152
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 158
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 159
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 165
    public function block_action_links($context, array $blocks = array())
    {
        // line 166
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 172
    public function block_help($context, array $blocks = array())
    {
        // line 173
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo "          <a id=\"main-content\"></a>
          ";
        // line 180
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 186
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 187
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 188
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 197
    public function block_newsrow_one_top_first($context, array $blocks = array())
    {
        // line 198
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 199
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 206
    public function block_newsrow_one_top_second($context, array $blocks = array())
    {
        // line 207
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 208
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 215
    public function block_newsrow_one_top_third($context, array $blocks = array())
    {
        // line 216
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 217
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 224
    public function block_newsrow_one_fourth($context, array $blocks = array())
    {
        // line 225
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 226
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 235
    public function block_advertise_second($context, array $blocks = array())
    {
        // line 236
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 237
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 245
    public function block_newsrow_two_first($context, array $blocks = array())
    {
        // line 246
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 247
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 254
    public function block_newsrow_two_second_top($context, array $blocks = array())
    {
        // line 255
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 256
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array()), "html", null, true));
        echo "
\t\t\t";
        // line 257
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_bottom", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 265
    public function block_newsrow_two_third($context, array $blocks = array())
    {
        // line 266
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 267
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 277
    public function block_newsrow_three_first($context, array $blocks = array())
    {
        // line 278
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 279
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 286
    public function block_newsrow_three_second($context, array $blocks = array())
    {
        // line 287
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 288
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 295
    public function block_newsrow_three_third($context, array $blocks = array())
    {
        // line 296
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 297
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 307
    public function block_newsrow_four_first($context, array $blocks = array())
    {
        // line 308
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 309
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 316
    public function block_newsrow_four_second($context, array $blocks = array())
    {
        // line 317
        echo "          <aside class=\"col-sm-8\" >
            ";
        // line 318
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 328
    public function block_newsrow_five_first($context, array $blocks = array())
    {
        // line 329
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 330
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 337
    public function block_newsrow_five_second($context, array $blocks = array())
    {
        // line 338
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 339
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 354
    public function block_footer_first($context, array $blocks = array())
    {
        // line 355
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 356
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 361
    public function block_footer_second($context, array $blocks = array())
    {
        // line 362
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 363
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 368
    public function block_footer_third($context, array $blocks = array())
    {
        // line 369
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 370
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 384
    public function block_footer($context, array $blocks = array())
    {
        // line 385
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 386
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  890 => 386,  885 => 385,  882 => 384,  875 => 370,  872 => 369,  869 => 368,  862 => 363,  859 => 362,  856 => 361,  849 => 356,  846 => 355,  843 => 354,  836 => 339,  833 => 338,  830 => 337,  823 => 330,  820 => 329,  817 => 328,  810 => 318,  807 => 317,  804 => 316,  797 => 309,  794 => 308,  791 => 307,  784 => 297,  781 => 296,  778 => 295,  771 => 288,  768 => 287,  765 => 286,  758 => 279,  755 => 278,  752 => 277,  745 => 267,  742 => 266,  739 => 265,  732 => 257,  728 => 256,  725 => 255,  722 => 254,  715 => 247,  712 => 246,  709 => 245,  702 => 237,  699 => 236,  696 => 235,  689 => 226,  686 => 225,  683 => 224,  676 => 217,  673 => 216,  670 => 215,  663 => 208,  660 => 207,  657 => 206,  650 => 199,  647 => 198,  644 => 197,  637 => 188,  634 => 187,  631 => 186,  625 => 180,  622 => 179,  619 => 178,  612 => 173,  609 => 172,  602 => 166,  599 => 165,  592 => 159,  589 => 158,  582 => 152,  579 => 151,  572 => 133,  569 => 132,  566 => 131,  559 => 124,  556 => 123,  553 => 122,  546 => 115,  543 => 114,  540 => 113,  532 => 343,  529 => 342,  526 => 337,  523 => 336,  520 => 334,  517 => 333,  514 => 328,  511 => 327,  505 => 322,  502 => 321,  499 => 316,  496 => 315,  493 => 313,  490 => 312,  487 => 307,  484 => 306,  478 => 301,  475 => 300,  472 => 295,  469 => 294,  466 => 292,  463 => 291,  460 => 286,  457 => 285,  454 => 283,  451 => 282,  448 => 277,  445 => 276,  439 => 271,  436 => 270,  433 => 265,  430 => 264,  426 => 261,  423 => 260,  420 => 254,  417 => 253,  414 => 251,  411 => 250,  408 => 245,  405 => 244,  401 => 241,  398 => 240,  395 => 235,  392 => 234,  387 => 230,  384 => 229,  381 => 224,  378 => 223,  375 => 221,  372 => 220,  369 => 215,  366 => 214,  363 => 212,  360 => 211,  357 => 206,  354 => 205,  348 => 202,  345 => 197,  342 => 196,  337 => 192,  334 => 191,  331 => 186,  328 => 185,  324 => 182,  321 => 178,  318 => 176,  315 => 175,  312 => 172,  309 => 171,  306 => 169,  303 => 168,  300 => 165,  297 => 164,  294 => 162,  291 => 161,  288 => 158,  285 => 157,  282 => 155,  279 => 154,  276 => 151,  273 => 150,  267 => 147,  265 => 144,  264 => 143,  263 => 142,  262 => 141,  261 => 140,  259 => 139,  256 => 137,  253 => 136,  250 => 131,  247 => 130,  244 => 128,  241 => 127,  238 => 122,  235 => 121,  232 => 119,  229 => 118,  226 => 113,  223 => 112,  216 => 108,  213 => 107,  208 => 102,  202 => 99,  199 => 98,  196 => 97,  192 => 94,  183 => 88,  180 => 87,  177 => 86,  173 => 84,  167 => 82,  165 => 79,  164 => 78,  163 => 76,  161 => 75,  158 => 74,  152 => 390,  148 => 384,  146 => 383,  135 => 374,  132 => 373,  129 => 368,  126 => 367,  123 => 366,  120 => 361,  117 => 360,  114 => 359,  111 => 354,  109 => 353,  102 => 348,  100 => 107,  97 => 105,  93 => 74,  91 => 73,  89 => 71,  77 => 61,  73 => 1,);
    }
}
/* */
/* */
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
/* <div class="main-container">*/
/*     <div class="row">*/
/*  */
/*         <div class="col-sm-12 logo_custom">*/
/*  */
/*         </div> */
/*     </div>	*/
/* </div>*/
/* */
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
/* 		*/
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	   {# Advertise #}*/
/*       {% if page.advertise %}*/
/*         {% block advertise %}*/
/*           <div class="col-sm-12 advertise-style">*/
/*             {{ page.advertise }}*/
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
/* 	*/
/* 	<div class="row">*/
/* 	  {# newsrow_one_top_first #}*/
/*       {% if page.newsrow_one_top_first %}*/
/*         {% block newsrow_one_top_first %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}	*/
/* */
/* 		{# newsrow_one_top_second #}*/
/*       {% if page.newsrow_one_top_second %}*/
/*         {% block newsrow_one_top_second %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_top_third #}*/
/*       {% if page.newsrow_one_top_third %}*/
/*         {% block newsrow_one_top_third %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_fourth #}*/
/*       {% if page.newsrow_one_fourth %}*/
/*         {% block newsrow_one_fourth %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_fourth }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 	    {# Advertise second #}*/
/*       {% if page.advertise_second %}*/
/*         {% block advertise_second %}*/
/*           <div class="col-sm-12 advertise-style">*/
/*             {{ page.advertise_second }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	<div class="row">*/
/* 	{# newsrow_two_first #}*/
/*       {% if page.newsrow_two_first %}*/
/*         {% block newsrow_two_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_two_second #}*/
/*       {% if page.newsrow_two_second_top %}*/
/*         {% block newsrow_two_second_top %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_second_top }}*/
/* 			{{ page.newsrow_two_second_bottom }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  */
/* 	  {# newsrow_two_third #}*/
/*       {% if page.newsrow_two_third %}*/
/*         {% block newsrow_two_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 	*/
/* 	{# newsrow_three_first #}*/
/*       {% if page.newsrow_three_first %}*/
/*         {% block newsrow_three_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_three_second #}*/
/*       {% if page.newsrow_three_second %}*/
/*         {% block newsrow_three_second %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	    */
/* 	{# newsrow_three_third #}*/
/*       {% if page.newsrow_three_third %}*/
/*         {% block newsrow_three_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_four_first #}*/
/*       {% if page.newsrow_four_first %}*/
/*         {% block newsrow_four_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_four_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_four_second #}*/
/*       {% if page.newsrow_four_second %}*/
/*         {% block newsrow_four_second %}*/
/*           <aside class="col-sm-8" >*/
/*             {{ page.newsrow_four_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_five_first #}*/
/*       {% if page.newsrow_five_first %}*/
/*         {% block newsrow_five_first %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_five_second #}*/
/*       {% if page.newsrow_five_second %}*/
/*         {% block newsrow_five_second %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/*   </div>*/
/* {% endblock %}*/
/* */
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
/* */
