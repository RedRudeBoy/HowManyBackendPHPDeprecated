<?php

/* RedRudeBoyHowManyBundle:MobileBase:MobileBasePage.html.twig */
class __TwigTemplate_ecb6fea7ee2dec84e9cab88f40a0d25b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        if ((!array_key_exists("theme", $context))) {
            // line 18
            $context["theme"] = "a";
        }
        // line 20
        echo "
<div data-role=\"page\" id=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" ";
        echo " >
\t
\t<div data-role=\"header\" data-theme=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "theme"), "html", null, true);
        echo "\" data-position=\"inline\" data-position=\"fixed\">\t\t
\t";
        // line 24
        if (array_key_exists("title", $context)) {
            // line 25
            echo "\t\t<h1>";
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "</h1>
\t";
        } else {
            // line 27
            echo "\t\t<span class=\"ui-title\" />
\t";
        }
        // line 29
        echo "\t\t
\t";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "\t</div>
\t\t
\t<div data-role=\"content\">
\t";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "\t</div>
\t
\t";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "</div>";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "\t";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "\t";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "\t";
    }

    public function getTemplateName()
    {
        return "RedRudeBoyHowManyBundle:MobileBase:MobileBasePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  58 => 32,  56 => 30,  43 => 25,  65 => 37,  45 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 20,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 39,  63 => 35,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 31,  75 => 30,  71 => 41,  25 => 18,  82 => 35,  72 => 16,  64 => 15,  53 => 29,  34 => 5,  92 => 40,  86 => 28,  79 => 40,  46 => 11,  37 => 23,  19 => 3,  44 => 11,  27 => 4,  49 => 27,  42 => 14,  40 => 13,  33 => 9,  29 => 5,  26 => 4,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 34,  77 => 25,  74 => 21,  57 => 22,  47 => 19,  39 => 9,  32 => 6,  24 => 3,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 18,  48 => 10,  41 => 24,  38 => 8,  35 => 7,  31 => 21,  28 => 20,);
    }
}
