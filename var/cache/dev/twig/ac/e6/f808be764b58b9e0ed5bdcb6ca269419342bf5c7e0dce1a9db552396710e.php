<?php

/* AgronautesPlateformeBundle:Plateforme:modifierArticle.html.twig */
class __TwigTemplate_ace6f808be764b58b9e0ed5bdcb6ca269419342bf5c7e0dce1a9db552396710e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
\t<h1>Agronautes</h1>
\t<h2> Modifer un article</h2>
</div>

";
    }

    public function getTemplateName()
    {
        return "AgronautesPlateformeBundle:Plateforme:modifierArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
