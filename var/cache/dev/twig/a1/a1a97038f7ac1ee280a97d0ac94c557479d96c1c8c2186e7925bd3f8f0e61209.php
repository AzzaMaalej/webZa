<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70e87a83d6e7d05dc3c4ddef105490bf555f043d63efee777fa5f43792d0a114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7101d4069f6eb8f69f75a0c9fe091b1217b65a4a4f1eb5789496b701ce6ab728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7101d4069f6eb8f69f75a0c9fe091b1217b65a4a4f1eb5789496b701ce6ab728->enter($__internal_7101d4069f6eb8f69f75a0c9fe091b1217b65a4a4f1eb5789496b701ce6ab728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e6ec13d2cca82a24f2e5090ceb4db598697a8c2f9b8fb84dfade843bb6e2d935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ec13d2cca82a24f2e5090ceb4db598697a8c2f9b8fb84dfade843bb6e2d935->enter($__internal_e6ec13d2cca82a24f2e5090ceb4db598697a8c2f9b8fb84dfade843bb6e2d935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7101d4069f6eb8f69f75a0c9fe091b1217b65a4a4f1eb5789496b701ce6ab728->leave($__internal_7101d4069f6eb8f69f75a0c9fe091b1217b65a4a4f1eb5789496b701ce6ab728_prof);

        
        $__internal_e6ec13d2cca82a24f2e5090ceb4db598697a8c2f9b8fb84dfade843bb6e2d935->leave($__internal_e6ec13d2cca82a24f2e5090ceb4db598697a8c2f9b8fb84dfade843bb6e2d935_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20d3b6d2edf4e158d8316e9a9a77fa20945d48f6e6847dd31b959002df41f19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d3b6d2edf4e158d8316e9a9a77fa20945d48f6e6847dd31b959002df41f19a->enter($__internal_20d3b6d2edf4e158d8316e9a9a77fa20945d48f6e6847dd31b959002df41f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17d733e6752a46b022f82866c8507ac1dcd70f816907f28ae20010116ab1cc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d733e6752a46b022f82866c8507ac1dcd70f816907f28ae20010116ab1cc8d->enter($__internal_17d733e6752a46b022f82866c8507ac1dcd70f816907f28ae20010116ab1cc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17d733e6752a46b022f82866c8507ac1dcd70f816907f28ae20010116ab1cc8d->leave($__internal_17d733e6752a46b022f82866c8507ac1dcd70f816907f28ae20010116ab1cc8d_prof);

        
        $__internal_20d3b6d2edf4e158d8316e9a9a77fa20945d48f6e6847dd31b959002df41f19a->leave($__internal_20d3b6d2edf4e158d8316e9a9a77fa20945d48f6e6847dd31b959002df41f19a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68c5d7042dd39e3bce1bc8ef92fe25ca85cf40cd552e6673994c8b590b1ccdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c5d7042dd39e3bce1bc8ef92fe25ca85cf40cd552e6673994c8b590b1ccdfb->enter($__internal_68c5d7042dd39e3bce1bc8ef92fe25ca85cf40cd552e6673994c8b590b1ccdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f171ecd93b65704fede4ae2630ef994381136b29fa6ed8059393a3ddc9d5804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f171ecd93b65704fede4ae2630ef994381136b29fa6ed8059393a3ddc9d5804->enter($__internal_5f171ecd93b65704fede4ae2630ef994381136b29fa6ed8059393a3ddc9d5804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f171ecd93b65704fede4ae2630ef994381136b29fa6ed8059393a3ddc9d5804->leave($__internal_5f171ecd93b65704fede4ae2630ef994381136b29fa6ed8059393a3ddc9d5804_prof);

        
        $__internal_68c5d7042dd39e3bce1bc8ef92fe25ca85cf40cd552e6673994c8b590b1ccdfb->leave($__internal_68c5d7042dd39e3bce1bc8ef92fe25ca85cf40cd552e6673994c8b590b1ccdfb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14658ab8e384710ac659c6c36a6578ac98047dce34ec84812f013684f2dc28ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14658ab8e384710ac659c6c36a6578ac98047dce34ec84812f013684f2dc28ae->enter($__internal_14658ab8e384710ac659c6c36a6578ac98047dce34ec84812f013684f2dc28ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9136da55ea218f88eca346a0e04e75843df6f9571788274f2c4f89a8dc9e66b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9136da55ea218f88eca346a0e04e75843df6f9571788274f2c4f89a8dc9e66b1->enter($__internal_9136da55ea218f88eca346a0e04e75843df6f9571788274f2c4f89a8dc9e66b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9136da55ea218f88eca346a0e04e75843df6f9571788274f2c4f89a8dc9e66b1->leave($__internal_9136da55ea218f88eca346a0e04e75843df6f9571788274f2c4f89a8dc9e66b1_prof);

        
        $__internal_14658ab8e384710ac659c6c36a6578ac98047dce34ec84812f013684f2dc28ae->leave($__internal_14658ab8e384710ac659c6c36a6578ac98047dce34ec84812f013684f2dc28ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
