<?php

/* {# inline_template_start #}<div class="row">
   <div class="thumb-view">
		<div class="col-sm-4">
			{{ field_image }}
		</div>
		<div class="col-sm-8 thumb-view-content">
			<h5>
				{{ title }}
			</h5>
			<time>
				{{ created }}
			</time>
		</div>
   </div>
</div> */
class __TwigTemplate_abfd080766d2bdf3cfcf659026af8193e90605cb873890818809123b6336eb09 extends Twig_Template
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
        echo "<div class=\"row\">
   <div class=\"thumb-view\">
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
\t\t</div>
\t\t<div class=\"col-sm-8 thumb-view-content\">
\t\t\t<h5>
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
\t\t\t</h5>
\t\t\t<time>
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "
\t\t\t</time>
\t\t</div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row\">
   <div class=\"thumb-view\">
\t\t<div class=\"col-sm-4\">
\t\t\t{{ field_image }}
\t\t</div>
\t\t<div class=\"col-sm-8 thumb-view-content\">
\t\t\t<h5>
\t\t\t\t{{ title }}
\t\t\t</h5>
\t\t\t<time>
\t\t\t\t{{ created }}
\t\t\t</time>
\t\t</div>
   </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  69 => 8,  62 => 4,  57 => 1,);
    }
}
/* {# inline_template_start #}<div class="row">*/
/*    <div class="thumb-view">*/
/* 		<div class="col-sm-4">*/
/* 			{{ field_image }}*/
/* 		</div>*/
/* 		<div class="col-sm-8 thumb-view-content">*/
/* 			<h5>*/
/* 				{{ title }}*/
/* 			</h5>*/
/* 			<time>*/
/* 				{{ created }}*/
/* 			</time>*/
/* 		</div>*/
/*    </div>*/
/* </div>*/
