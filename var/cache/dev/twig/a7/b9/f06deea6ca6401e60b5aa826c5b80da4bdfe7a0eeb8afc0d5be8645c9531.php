<?php

/* ::base.html.twig */
class __TwigTemplate_a7b9f06deea6ca6401e60b5aa826c5b80da4bdfe7a0eeb8afc0d5be8645c9531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fonts' => array($this, 'block_fonts'),
            'favicon' => array($this, 'block_favicon'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t\t
\t\t";
        // line 11
        $this->displayBlock('fonts', $context, $blocks);
        // line 14
        echo "
\t\t
\t\t";
        // line 16
        $this->displayBlock('favicon', $context, $blocks);
        // line 19
        echo "    </head>
\t
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Agronautes | ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 11
    public function block_fonts($context, array $blocks = array())
    {
        // line 12
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 16
    public function block_favicon($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t\t";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" />
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" />
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  113 => 26,  110 => 25,  106 => 23,  103 => 22,  96 => 17,  93 => 16,  86 => 12,  83 => 11,  76 => 8,  73 => 7,  67 => 5,  61 => 29,  59 => 25,  56 => 24,  54 => 22,  49 => 19,  47 => 16,  43 => 14,  41 => 11,  38 => 10,  36 => 7,  25 => 1,  31 => 5,  28 => 3,);
    }
}
