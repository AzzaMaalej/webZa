<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_025504a85264c627128dbcfdcba5aad9fd7c4f610f42d2718f3b7daaac37c6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad57af096ad7c613ae9bb3b4e8e6d5fb5c3b250225c6e9d31ac569be2befabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad57af096ad7c613ae9bb3b4e8e6d5fb5c3b250225c6e9d31ac569be2befabe->enter($__internal_2ad57af096ad7c613ae9bb3b4e8e6d5fb5c3b250225c6e9d31ac569be2befabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8b657cf77c8ef3eb3ec08a39443acdc13142b2b1494cb9a1172ff6892ada71a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b657cf77c8ef3eb3ec08a39443acdc13142b2b1494cb9a1172ff6892ada71a6->enter($__internal_8b657cf77c8ef3eb3ec08a39443acdc13142b2b1494cb9a1172ff6892ada71a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad57af096ad7c613ae9bb3b4e8e6d5fb5c3b250225c6e9d31ac569be2befabe->leave($__internal_2ad57af096ad7c613ae9bb3b4e8e6d5fb5c3b250225c6e9d31ac569be2befabe_prof);

        
        $__internal_8b657cf77c8ef3eb3ec08a39443acdc13142b2b1494cb9a1172ff6892ada71a6->leave($__internal_8b657cf77c8ef3eb3ec08a39443acdc13142b2b1494cb9a1172ff6892ada71a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1109d1caa19972bc687219fb36fd36d79cbe19833228246b2224642a742cea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1109d1caa19972bc687219fb36fd36d79cbe19833228246b2224642a742cea4->enter($__internal_d1109d1caa19972bc687219fb36fd36d79cbe19833228246b2224642a742cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_912c5acf2c12cb5caaadf94ed0b91a5267d305b36fc9558f6e70bc8c7f503a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912c5acf2c12cb5caaadf94ed0b91a5267d305b36fc9558f6e70bc8c7f503a67->enter($__internal_912c5acf2c12cb5caaadf94ed0b91a5267d305b36fc9558f6e70bc8c7f503a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_912c5acf2c12cb5caaadf94ed0b91a5267d305b36fc9558f6e70bc8c7f503a67->leave($__internal_912c5acf2c12cb5caaadf94ed0b91a5267d305b36fc9558f6e70bc8c7f503a67_prof);

        
        $__internal_d1109d1caa19972bc687219fb36fd36d79cbe19833228246b2224642a742cea4->leave($__internal_d1109d1caa19972bc687219fb36fd36d79cbe19833228246b2224642a742cea4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
