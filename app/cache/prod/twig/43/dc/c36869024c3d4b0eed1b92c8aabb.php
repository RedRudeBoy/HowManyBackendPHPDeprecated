<?php

/* RedRudeBoyHowManyBundle::mobilePages.html.twig */
class __TwigTemplate_43dcc36869024c3d4b0eed1b92c8aabb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headconf' => array($this, 'block_headconf'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 6
        $this->displayBlock('headconf', $context, $blocks);
        // line 13
        echo "\t\t
\t\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3f6eb9a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6eb9a_0") : $this->env->getExtension('assets')->getAssetUrl("css_jquery.mobile-1.1.0_1.css");
            // line 20
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
\t\t";
            // asset "3f6eb9a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6eb9a_1") : $this->env->getExtension('assets')->getAssetUrl("css_jquery.mobile.theme-1.1.0.min_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
\t\t";
        } else {
            // asset "3f6eb9a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f6eb9a") : $this->env->getExtension('assets')->getAssetUrl("css.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 22
        echo "\t\t
\t\t";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9a0c6a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9a0c6a_0") : $this->env->getExtension('assets')->getAssetUrl("js_jquery-1.7.2.min_1.js");
            // line 29
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t";
            // asset "e9a0c6a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9a0c6a_1") : $this->env->getExtension('assets')->getAssetUrl("js_HowManyMobile_2.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t";
            // asset "e9a0c6a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9a0c6a_2") : $this->env->getExtension('assets')->getAssetUrl("js_jquery.mobile-1.1.0.min_3.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t";
        } else {
            // asset "e9a0c6a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9a0c6a") : $this->env->getExtension('assets')->getAssetUrl("js.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 31
        echo "\t</head>
\t
    <body>
";
        // line 35
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:HowManyLi.html.twig")->display($context);
        // line 36
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:HowManyView.html.twig")->display($context);
        // line 37
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:Congratulations.html.twig")->display($context);
        // line 38
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:HowManyCRUD.html.twig")->display($context);
        // line 39
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:HowManyConf.html.twig")->display($context);
        // line 40
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:ProfilesLi.html.twig")->display($context);
        // line 41
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:ProfilesConf.html.twig")->display($context);
        // line 42
        echo "\t\t";
        $this->env->loadTemplate("RedRudeBoyHowManyBundle:Pages:ProfilesCRUD.html.twig")->display($context);
        // line 82
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_headconf($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t<link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t\t<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "How Many Days";
    }

    public function getTemplateName()
    {
        return "RedRudeBoyHowManyBundle::mobilePages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 10,  125 => 7,  115 => 82,  112 => 42,  106 => 40,  100 => 38,  91 => 35,  85 => 36,  58 => 32,  56 => 23,  43 => 25,  65 => 37,  45 => 15,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 11,  132 => 49,  127 => 46,  123 => 44,  109 => 41,  93 => 33,  90 => 32,  54 => 20,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 39,  63 => 35,  60 => 29,  52 => 12,  97 => 37,  95 => 21,  88 => 29,  78 => 31,  75 => 30,  71 => 41,  25 => 18,  82 => 35,  72 => 16,  64 => 15,  53 => 22,  34 => 5,  92 => 40,  86 => 31,  79 => 40,  46 => 11,  37 => 23,  19 => 3,  44 => 11,  27 => 4,  49 => 27,  42 => 14,  40 => 13,  33 => 20,  29 => 14,  26 => 13,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 39,  99 => 34,  77 => 25,  74 => 21,  57 => 22,  47 => 19,  39 => 9,  32 => 6,  24 => 6,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 1,  135 => 50,  129 => 47,  122 => 6,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 36,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 18,  48 => 10,  41 => 24,  38 => 8,  35 => 7,  31 => 21,  28 => 20,);
    }
}
