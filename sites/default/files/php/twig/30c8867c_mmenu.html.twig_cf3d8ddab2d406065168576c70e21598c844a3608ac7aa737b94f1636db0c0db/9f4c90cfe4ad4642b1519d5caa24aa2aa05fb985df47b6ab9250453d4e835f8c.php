<?php

/* modules/mmenu/tpl/mmenu.html.twig */
class __TwigTemplate_8e9e3ece6f1e335a2e4bf27bc0da49ed272e96fcc3ad5deba7f153de5f514342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 21, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array(),
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

        // line 19
        echo "<nav id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\" class=\"mmenu-nav clearfix\">
    <ul>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 22
            echo "            ";
            if ($this->getAttribute($context["block"], "collapsed", array())) {
                // line 23
                echo "                <li class=\"mmenu-collapsed\">
                ";
                // line 24
                if ( !twig_test_empty($this->getAttribute($context["block"], "subject", array()))) {
                    // line 25
                    echo "                    <span class=\"mmenu-block-collapsed mmenu-block\"><i class=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "icon_class", array()), "html", null, true));
                    echo "\"></i><span class=\"mmenu-block-title\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "subject", array()), "html", null, true));
                    echo "</span></span>
                ";
                }
                // line 27
                echo "                ";
                if ($this->getAttribute($context["block"], "wrap", array())) {
                    // line 28
                    echo "                    <ul><li class=\"mmenu-block-wrap\"><span>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "content", array()), "html", null, true));
                    echo "</span></li></ul>
                ";
                } else {
                    // line 30
                    echo "                    ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "content", array()), "html", null, true));
                    echo "
                ";
                }
                // line 32
                echo "                </li>
            ";
            } else {
                // line 34
                echo "                ";
                if ( !twig_test_empty($this->getAttribute($context["block"], "subject", array()))) {
                    // line 35
                    echo "                    <li class=\"mmenu-expanded\">
                    <span class=\"mmenu-block-expanded mmenu-block\"><i class=\"mmenu-block-icon mmenu-block-icon-";
                    // line 36
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "module", array()), "html", null, true));
                    echo "-";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "delta", array()), "html", null, true));
                    echo "\"></i><span class=\"mmenu-block-title\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "subject", array()), "html", null, true));
                    echo "</span></span>
                    </li>
                ";
                }
                // line 39
                echo "                ";
                if ($this->getAttribute($context["block"], "wrap", array())) {
                    // line 40
                    echo "                    <ul><li class=\"mmenu-block-wrap\"><span>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "content", array()), "html", null, true));
                    echo "</span></li></ul>
                ";
                } else {
                    // line 42
                    echo "                    ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["block"], "content", array()), "html", null, true));
                    echo "
                ";
                }
                // line 44
                echo "            ";
            }
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "modules/mmenu/tpl/mmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  122 => 45,  119 => 44,  113 => 42,  107 => 40,  104 => 39,  94 => 36,  91 => 35,  88 => 34,  84 => 32,  78 => 30,  72 => 28,  69 => 27,  61 => 25,  59 => 24,  56 => 23,  53 => 22,  49 => 21,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a mmenu.*/
/*  **/
/*  * Available variables:*/
/*  * - $mmenu: the original mmenu definitions.*/
/*  * - $id: the id of the mmenu.*/
/*  * - $name: the machine name of the mmenu.*/
/*  * - $blocks: an array that contains all rendered blocks and its configurations.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_mmenu()*/
/*  * @see template_process()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <nav id="{{ id }}" class="mmenu-nav clearfix">*/
/*     <ul>*/
/*         {% for block in blocks %}*/
/*             {% if block.collapsed %}*/
/*                 <li class="mmenu-collapsed">*/
/*                 {% if block.subject is not empty %}*/
/*                     <span class="mmenu-block-collapsed mmenu-block"><i class="{{ block.icon_class }}"></i><span class="mmenu-block-title">{{ block.subject }}</span></span>*/
/*                 {% endif %}*/
/*                 {% if block.wrap %}*/
/*                     <ul><li class="mmenu-block-wrap"><span>{{ block.content }}</span></li></ul>*/
/*                 {% else %}*/
/*                     {{ block.content }}*/
/*                 {% endif %}*/
/*                 </li>*/
/*             {% else %}*/
/*                 {% if block.subject is not empty %}*/
/*                     <li class="mmenu-expanded">*/
/*                     <span class="mmenu-block-expanded mmenu-block"><i class="mmenu-block-icon mmenu-block-icon-{{ block.module }}-{{ block.delta }}"></i><span class="mmenu-block-title">{{ block.subject }}</span></span>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 {% if block.wrap %}*/
/*                     <ul><li class="mmenu-block-wrap"><span>{{ block.content }}</span></li></ul>*/
/*                 {% else %}*/
/*                     {{ block.content }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/* </nav>*/
/* */
