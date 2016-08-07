<?php

/* {# inline_template_start #}<div class="news-ticker">
  <span class=" news-headline-title">সর্বশেষ</span>
  <span class="news-headline">{{ title }}</span>
</div> */
class __TwigTemplate_72171f399f9789912d0bf178401d76e30e5fb9be0a6c4742fc436fa7be1ea65a extends Twig_Template
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
        echo "<div class=\"news-ticker\">
  <span class=\" news-headline-title\">সর্বশেষ</span>
  <span class=\"news-headline\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"news-ticker\">
  <span class=\" news-headline-title\">সর্বশেষ</span>
  <span class=\"news-headline\">{{ title }}</span>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="news-ticker">*/
/*   <span class=" news-headline-title">সর্বশেষ</span>*/
/*   <span class="news-headline">{{ title }}</span>*/
/* </div>*/
