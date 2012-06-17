<?php

/* SncRedisBundle:Collector:redis.html.twig */
class __TwigTemplate_b043e6af7e6790b20b028412ce0b006c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"20\" height=\"28\" alt=\"Redis\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <span title=\"";
        echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($this->getContext($context, "collector"), "time")), "html", null, true);
        echo " ms\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "commandcount"), "html", null, true);
        echo "</span>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sncredis/images/redis.png"), "html", null, true);
        echo "\" alt=\"Redis\" /></span>
    <strong>Redis</strong>
    <span class=\"count\">
        <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "commandcount"), "html", null, true);
        echo "</span>
        <span>";
        // line 19
        echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute($this->getContext($context, "collector"), "time")), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Commands</h2>

    ";
        // line 27
        if ((!$this->getAttribute($this->getContext($context, "collector"), "commandcount"))) {
            // line 28
            echo "        <p><em>No commands.</em></p>
    ";
        } else {
            // line 30
            echo "        <ul class=\"alt\">
            ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "commands"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 32
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
                if ($this->getAttribute($this->getContext($context, "command"), "error")) {
                    echo " error";
                }
                echo "\">
                    <div>
                        <code>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "command"), "cmd"), "html", null, true);
                echo "</code>
                    </div>
                    <small>
                        <strong>Time</strong>: ";
                // line 37
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($this->getContext($context, "command"), "executionMS")), "html", null, true);
                echo " ms
                        <strong>Connection</strong>: ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "command"), "conn"), "html", null, true);
                echo "
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "command"), "error")) {
                    echo "<strong>Error</strong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "command"), "error"), "html", null, true);
                }
                // line 40
                echo "                    </small>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SncRedisBundle:Collector:redis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  36 => 15,  130 => 10,  125 => 7,  115 => 82,  112 => 42,  106 => 40,  100 => 38,  91 => 31,  85 => 36,  58 => 32,  56 => 26,  43 => 25,  65 => 37,  45 => 24,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 43,  148 => 57,  145 => 56,  141 => 55,  134 => 11,  132 => 49,  127 => 38,  123 => 37,  109 => 41,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 37,  63 => 18,  60 => 29,  52 => 12,  97 => 37,  95 => 21,  88 => 30,  78 => 25,  75 => 24,  71 => 41,  25 => 5,  82 => 27,  72 => 16,  64 => 15,  53 => 25,  34 => 5,  92 => 40,  86 => 31,  79 => 40,  46 => 10,  37 => 23,  19 => 3,  44 => 20,  27 => 4,  49 => 27,  42 => 14,  40 => 13,  33 => 12,  29 => 12,  26 => 7,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 39,  126 => 46,  120 => 39,  117 => 34,  103 => 39,  99 => 34,  77 => 25,  74 => 21,  57 => 15,  47 => 21,  39 => 9,  32 => 13,  24 => 5,  22 => 3,  30 => 4,  23 => 17,  20 => 16,  17 => 2,  135 => 50,  129 => 47,  122 => 6,  116 => 42,  113 => 40,  108 => 32,  104 => 24,  102 => 37,  94 => 36,  89 => 39,  87 => 28,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 20,  51 => 13,  48 => 25,  41 => 13,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
