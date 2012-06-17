<?php

/* ::base.html.twig */
class __TwigTemplate_8903a6b6f4cea627c35c0d40708eecfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  136 => 40,  36 => 15,  130 => 10,  125 => 7,  115 => 82,  112 => 42,  106 => 40,  100 => 38,  91 => 31,  85 => 36,  58 => 32,  56 => 26,  43 => 25,  65 => 37,  45 => 12,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 43,  148 => 57,  145 => 56,  141 => 55,  134 => 11,  132 => 49,  127 => 38,  123 => 37,  109 => 41,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 37,  63 => 18,  60 => 29,  52 => 12,  97 => 37,  95 => 21,  88 => 30,  78 => 25,  75 => 24,  71 => 41,  25 => 5,  82 => 27,  72 => 16,  64 => 15,  53 => 25,  34 => 5,  92 => 40,  86 => 31,  79 => 40,  46 => 10,  37 => 23,  19 => 3,  44 => 20,  27 => 5,  49 => 27,  42 => 11,  40 => 10,  33 => 7,  29 => 12,  26 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 39,  126 => 46,  120 => 39,  117 => 34,  103 => 39,  99 => 34,  77 => 25,  74 => 21,  57 => 6,  47 => 21,  39 => 9,  32 => 13,  24 => 5,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 2,  135 => 50,  129 => 47,  122 => 6,  116 => 42,  113 => 40,  108 => 32,  104 => 24,  102 => 37,  94 => 36,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 11,  62 => 10,  59 => 23,  55 => 20,  51 => 5,  48 => 25,  41 => 13,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
