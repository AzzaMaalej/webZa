<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_201d573d750c336f6307bc797780507716deb26abf4b60311afe13f810b6282a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5eb7879fd32bc9f0eea2e1f335ea5239670413c0dd52113a77227abd8847347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5eb7879fd32bc9f0eea2e1f335ea5239670413c0dd52113a77227abd8847347->enter($__internal_f5eb7879fd32bc9f0eea2e1f335ea5239670413c0dd52113a77227abd8847347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_34730b00031cf896f0bff9b6972b7f0c7120458fba1974b3702eec2de20341ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34730b00031cf896f0bff9b6972b7f0c7120458fba1974b3702eec2de20341ff->enter($__internal_34730b00031cf896f0bff9b6972b7f0c7120458fba1974b3702eec2de20341ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f5eb7879fd32bc9f0eea2e1f335ea5239670413c0dd52113a77227abd8847347->leave($__internal_f5eb7879fd32bc9f0eea2e1f335ea5239670413c0dd52113a77227abd8847347_prof);

        
        $__internal_34730b00031cf896f0bff9b6972b7f0c7120458fba1974b3702eec2de20341ff->leave($__internal_34730b00031cf896f0bff9b6972b7f0c7120458fba1974b3702eec2de20341ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1630cbb99ddae50a255ab3c22e301a3785d14046030894728629e81e29a751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1630cbb99ddae50a255ab3c22e301a3785d14046030894728629e81e29a751->enter($__internal_8d1630cbb99ddae50a255ab3c22e301a3785d14046030894728629e81e29a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7da52796692a85cbea36044cd3bbebe4eea805a9aae3c28943d6bc2a206fe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7da52796692a85cbea36044cd3bbebe4eea805a9aae3c28943d6bc2a206fe8c->enter($__internal_c7da52796692a85cbea36044cd3bbebe4eea805a9aae3c28943d6bc2a206fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c7da52796692a85cbea36044cd3bbebe4eea805a9aae3c28943d6bc2a206fe8c->leave($__internal_c7da52796692a85cbea36044cd3bbebe4eea805a9aae3c28943d6bc2a206fe8c_prof);

        
        $__internal_8d1630cbb99ddae50a255ab3c22e301a3785d14046030894728629e81e29a751->leave($__internal_8d1630cbb99ddae50a255ab3c22e301a3785d14046030894728629e81e29a751_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_17d7801f7486890fc78e9bcda57e8d7bc9958561b9a974936a4ae83a917f7a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d7801f7486890fc78e9bcda57e8d7bc9958561b9a974936a4ae83a917f7a6e->enter($__internal_17d7801f7486890fc78e9bcda57e8d7bc9958561b9a974936a4ae83a917f7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fdd708af286fbebd57541d165d21a75f23645b29884a21c431d9615f14b510e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdd708af286fbebd57541d165d21a75f23645b29884a21c431d9615f14b510e->enter($__internal_2fdd708af286fbebd57541d165d21a75f23645b29884a21c431d9615f14b510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2fdd708af286fbebd57541d165d21a75f23645b29884a21c431d9615f14b510e->leave($__internal_2fdd708af286fbebd57541d165d21a75f23645b29884a21c431d9615f14b510e_prof);

        
        $__internal_17d7801f7486890fc78e9bcda57e8d7bc9958561b9a974936a4ae83a917f7a6e->leave($__internal_17d7801f7486890fc78e9bcda57e8d7bc9958561b9a974936a4ae83a917f7a6e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_851b698943e03c67a8ecfcdf0e84098352a3c5a79ca03489f6e1a3dc81b94c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851b698943e03c67a8ecfcdf0e84098352a3c5a79ca03489f6e1a3dc81b94c13->enter($__internal_851b698943e03c67a8ecfcdf0e84098352a3c5a79ca03489f6e1a3dc81b94c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f6d369b69ed0068500c7cfc242a12a4ec049b73d3288a60bcd7e504aa7462f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6d369b69ed0068500c7cfc242a12a4ec049b73d3288a60bcd7e504aa7462f5->enter($__internal_9f6d369b69ed0068500c7cfc242a12a4ec049b73d3288a60bcd7e504aa7462f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f6d369b69ed0068500c7cfc242a12a4ec049b73d3288a60bcd7e504aa7462f5->leave($__internal_9f6d369b69ed0068500c7cfc242a12a4ec049b73d3288a60bcd7e504aa7462f5_prof);

        
        $__internal_851b698943e03c67a8ecfcdf0e84098352a3c5a79ca03489f6e1a3dc81b94c13->leave($__internal_851b698943e03c67a8ecfcdf0e84098352a3c5a79ca03489f6e1a3dc81b94c13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
