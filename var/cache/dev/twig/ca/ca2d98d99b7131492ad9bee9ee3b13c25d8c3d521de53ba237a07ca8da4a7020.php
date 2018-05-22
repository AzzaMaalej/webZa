<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_82cac6b603fbd3d29e6f5af138e43811e91ce39ca0d31a1a85eb3470ce19f6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37c2b4be6be958c0fb5acd17d2711c34395ea28cf1825025d5a5764eeb262425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c2b4be6be958c0fb5acd17d2711c34395ea28cf1825025d5a5764eeb262425->enter($__internal_37c2b4be6be958c0fb5acd17d2711c34395ea28cf1825025d5a5764eeb262425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5c63f859c498055b3029250a437bde5a9c29af961a4b4b0de24f870edc4122cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c63f859c498055b3029250a437bde5a9c29af961a4b4b0de24f870edc4122cc->enter($__internal_5c63f859c498055b3029250a437bde5a9c29af961a4b4b0de24f870edc4122cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c2b4be6be958c0fb5acd17d2711c34395ea28cf1825025d5a5764eeb262425->leave($__internal_37c2b4be6be958c0fb5acd17d2711c34395ea28cf1825025d5a5764eeb262425_prof);

        
        $__internal_5c63f859c498055b3029250a437bde5a9c29af961a4b4b0de24f870edc4122cc->leave($__internal_5c63f859c498055b3029250a437bde5a9c29af961a4b4b0de24f870edc4122cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a468b8e0e2f2177e01fde77f5617227dc7313470e5e6707940bbe8e121fc92b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a468b8e0e2f2177e01fde77f5617227dc7313470e5e6707940bbe8e121fc92b8->enter($__internal_a468b8e0e2f2177e01fde77f5617227dc7313470e5e6707940bbe8e121fc92b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab9725269c588ed0a8c2336c24c0ef154fb571b885b2f4aba8b43e4286077de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9725269c588ed0a8c2336c24c0ef154fb571b885b2f4aba8b43e4286077de9->enter($__internal_ab9725269c588ed0a8c2336c24c0ef154fb571b885b2f4aba8b43e4286077de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ab9725269c588ed0a8c2336c24c0ef154fb571b885b2f4aba8b43e4286077de9->leave($__internal_ab9725269c588ed0a8c2336c24c0ef154fb571b885b2f4aba8b43e4286077de9_prof);

        
        $__internal_a468b8e0e2f2177e01fde77f5617227dc7313470e5e6707940bbe8e121fc92b8->leave($__internal_a468b8e0e2f2177e01fde77f5617227dc7313470e5e6707940bbe8e121fc92b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99abad4d21c0f185fa0c87f3a27645929b5ccbc298be84d0f0a5ea536219a509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99abad4d21c0f185fa0c87f3a27645929b5ccbc298be84d0f0a5ea536219a509->enter($__internal_99abad4d21c0f185fa0c87f3a27645929b5ccbc298be84d0f0a5ea536219a509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b4f27e9fc75a68868ba28ef9f9ee25b7d6f77d7f341a4450dc3b730d1c81440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4f27e9fc75a68868ba28ef9f9ee25b7d6f77d7f341a4450dc3b730d1c81440->enter($__internal_5b4f27e9fc75a68868ba28ef9f9ee25b7d6f77d7f341a4450dc3b730d1c81440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b4f27e9fc75a68868ba28ef9f9ee25b7d6f77d7f341a4450dc3b730d1c81440->leave($__internal_5b4f27e9fc75a68868ba28ef9f9ee25b7d6f77d7f341a4450dc3b730d1c81440_prof);

        
        $__internal_99abad4d21c0f185fa0c87f3a27645929b5ccbc298be84d0f0a5ea536219a509->leave($__internal_99abad4d21c0f185fa0c87f3a27645929b5ccbc298be84d0f0a5ea536219a509_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5a7d10eff910834287ce5250c66e0c246a2eb68e99aa3ee989085da1aea81ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a7d10eff910834287ce5250c66e0c246a2eb68e99aa3ee989085da1aea81ea->enter($__internal_a5a7d10eff910834287ce5250c66e0c246a2eb68e99aa3ee989085da1aea81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4175b2895c9f9f11bfda71e94b0eecba050da30357820ab7cbbadef4b5713dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4175b2895c9f9f11bfda71e94b0eecba050da30357820ab7cbbadef4b5713dc->enter($__internal_b4175b2895c9f9f11bfda71e94b0eecba050da30357820ab7cbbadef4b5713dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4175b2895c9f9f11bfda71e94b0eecba050da30357820ab7cbbadef4b5713dc->leave($__internal_b4175b2895c9f9f11bfda71e94b0eecba050da30357820ab7cbbadef4b5713dc_prof);

        
        $__internal_a5a7d10eff910834287ce5250c66e0c246a2eb68e99aa3ee989085da1aea81ea->leave($__internal_a5a7d10eff910834287ce5250c66e0c246a2eb68e99aa3ee989085da1aea81ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
