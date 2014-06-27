<?php

/* AgronautesPlateformeBundle:Plateforme:formulaire.html.twig */
class __TwigTemplate_b1e3407421d26873d985bac8a9bcff8e4c20997198ef58a3f781dbdda79a5a33 extends Twig_Template
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
        // line 2
        echo "
<h3>Formulaire d'article</h3>
<div class=\"well\">
\t<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" class=\"btn btn-primary\" />
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "AgronautesPlateformeBundle:Plateforme:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 2,  40 => 10,  38 => 9,  31 => 4,  28 => 6,);
    }
}
