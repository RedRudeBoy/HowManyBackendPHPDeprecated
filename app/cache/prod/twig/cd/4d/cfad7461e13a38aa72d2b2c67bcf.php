<?php

/* RedRudeBoyHowManyBundle:Login:login.html.twig */
class __TwigTemplate_cd4dcfad7461e13a38aa72d2b2c67bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RedRudeBoyHowManyBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RedRudeBoyHowManyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        if ($this->getContext($context, "error")) {
            // line 6
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 8
        echo "\t
\t<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t<label for=\"username\">Username:</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

\t\t<label for=\"password\">Password:</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t\t";
        // line 20
        echo "
\t\t<button type=\"submit\">login</button>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "RedRudeBoyHowManyBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  45 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 20,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 20,  63 => 18,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  75 => 24,  71 => 20,  25 => 7,  82 => 27,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  46 => 11,  37 => 8,  19 => 3,  44 => 11,  27 => 4,  49 => 11,  42 => 14,  40 => 13,  33 => 9,  29 => 5,  26 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 34,  77 => 25,  74 => 21,  57 => 22,  47 => 19,  39 => 9,  32 => 6,  24 => 3,  22 => 3,  30 => 4,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
