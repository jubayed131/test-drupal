<?php

/* {# inline_template_start #}<div class="thumb_top">
<div>
{{ field_image }}
</div>
<h3 >{{ title }}</h3>
<p class="thumb_top_created">{{ created }}</p>
<p class="thumb_body">{{ body }}</p>
</div> */
class __TwigTemplate_0f9fe334e1bcafd9b00cd9ffc60c4605f5a580c6790a10d964a15ce03c471262 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"thumb_top\">
<div>
";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
</div>
<h3 >";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3>
<p class=\"thumb_top_created\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</p>
<p class=\"thumb_body\">";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"thumb_top\">
<div>
{{ field_image }}
</div>
<h3 >{{ title }}</h3>
<p class=\"thumb_top_created\">{{ created }}</p>
<p class=\"thumb_body\">{{ body }}</p>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  63 => 6,  59 => 5,  54 => 3,  50 => 1,);
    }
}
/* {# inline_template_start #}<div class="thumb_top">*/
/* <div>*/
/* {{ field_image }}*/
/* </div>*/
/* <h3 >{{ title }}</h3>*/
/* <p class="thumb_top_created">{{ created }}</p>*/
/* <p class="thumb_body">{{ body }}</p>*/
/* </div>*/
