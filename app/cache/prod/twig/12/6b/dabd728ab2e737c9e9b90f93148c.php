<?php

/* RedRudeBoyHowManyBundle:Pages:HowManyView.html.twig */
class __TwigTemplate_126bdabd728ab2e737c9e9b90f93148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("RedRudeBoyHowManyBundle:MobileBase:MobileBasePage.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RedRudeBoyHowManyBundle:MobileBase:MobileBasePage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        list($context["id"], $context["theme"]) =         array("HowManyView", "a");
        // line 7
        if ((!array_key_exists("title", $context))) {
            // line 8
            $context["title"] = "HowManyName";
        }
        // line 11
        if ((!array_key_exists("user", $context))) {
            // line 12
            $context["user"] = "me";
        }
        // line 15
        if ((!array_key_exists("defaultDuration", $context))) {
            // line 16
            $context["defaultDuration"] = 0;
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "\t<a href=\"#HowManyLi\" data-icon=\"back\" data-iconpos=\"notext\" data-direction=\"reverse\"></a>
\t<a href=\"#HowManyConf\" data-icon=\"gear\" data-iconpos=\"notext\" class=\"ui-btn-right\"></a>
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "\t<div class=\"content-primary\">
\t\t<label><input type=\"checkbox\" /><a href=\"#Congratulations\" data-transition=\"slideup\">I've done it!!</a></label>
\t\t\t
\t\t<label for=\"note\">Note:</label>
\t\t<textarea name=\"note\" id=\"note\">
\t\t</textarea>
\t\t
\t\t<fieldset class=\"ui-grid-a\">
\t\t\t<div class=\"ui-block-a\">
\t\t\t\t<div data-role=\"fieldcontain\">
\t\t\t\t\t<label for=\"duration\">Duration</label>
\t\t\t\t\t<input type=\"range\" name=\"duration\" id=\"duration\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultDuration"), "html", null, true);
        echo "\" min=\"0\" max=\"90\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ui-block-b\">
\t\t\t\t<div data-role=\"fieldcontain\">
\t\t\t\t\t<label for=\"user\">User: </label>
\t\t\t\t\t<input type=\"text\" name=\"user\" id=\"user\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
        echo "\"  />
\t\t\t\t</div>
\t\t\t</div>\t   
\t\t</fieldset>
\t\t
\t\t<div data-role=\"collapsible\">
\t\t\t<h3>History</h3>
\t\t\t<p>Blablabla....</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "RedRudeBoyHowManyBundle:Pages:HowManyView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  130 => 10,  125 => 7,  115 => 82,  112 => 42,  106 => 40,  100 => 38,  91 => 35,  85 => 36,  58 => 32,  56 => 26,  43 => 25,  65 => 37,  45 => 24,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 11,  132 => 49,  127 => 46,  123 => 44,  109 => 41,  93 => 33,  90 => 32,  54 => 20,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 37,  63 => 35,  60 => 29,  52 => 12,  97 => 37,  95 => 21,  88 => 29,  78 => 43,  75 => 30,  71 => 41,  25 => 5,  82 => 35,  72 => 16,  64 => 15,  53 => 25,  34 => 5,  92 => 40,  86 => 31,  79 => 40,  46 => 11,  37 => 23,  19 => 3,  44 => 20,  27 => 4,  49 => 27,  42 => 14,  40 => 13,  33 => 12,  29 => 12,  26 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 39,  99 => 34,  77 => 25,  74 => 21,  57 => 22,  47 => 21,  39 => 9,  32 => 13,  24 => 5,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 2,  135 => 50,  129 => 47,  122 => 6,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 36,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 18,  48 => 25,  41 => 13,  38 => 16,  35 => 7,  31 => 11,  28 => 8,);
    }
}
