<?php

/* AgronautesPlateformeBundle:Plateforme:ajouterArticle.html.twig */
class __TwigTemplate_2c436c2a096867c5796f5691a34ad152d83a941479bc1df83e742356163ff461 extends Twig_Template
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
\t<h2> Ajouter un article</h2>
</div>

  ";
        // line 9
        $this->env->loadTemplate("AgronautesPlateformeBundle:Plateforme:formulaire.html.twig")->display($context);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "AgronautesPlateformeBundle:Plateforme:ajouterArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
