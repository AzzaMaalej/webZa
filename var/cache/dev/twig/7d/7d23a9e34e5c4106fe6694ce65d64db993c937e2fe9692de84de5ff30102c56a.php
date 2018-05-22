<?php

/* EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig */
class __TwigTemplate_c1bd362160215a59f77008e0782fe2f5e1a237e8e155a0fbce7acab48c1cd5af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZanimauxBundle:User:Layout2.html.twig", "EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZanimauxBundle:User:Layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae4ffa22c0f6e74c975a86b9633f8f5898ec81205459863876e40675c0e8d2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4ffa22c0f6e74c975a86b9633f8f5898ec81205459863876e40675c0e8d2e2->enter($__internal_ae4ffa22c0f6e74c975a86b9633f8f5898ec81205459863876e40675c0e8d2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig"));

        $__internal_9618d1617152e41930af085197d5dcceec997c48a4a5330aebc7fdd9735523da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9618d1617152e41930af085197d5dcceec997c48a4a5330aebc7fdd9735523da->enter($__internal_9618d1617152e41930af085197d5dcceec997c48a4a5330aebc7fdd9735523da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae4ffa22c0f6e74c975a86b9633f8f5898ec81205459863876e40675c0e8d2e2->leave($__internal_ae4ffa22c0f6e74c975a86b9633f8f5898ec81205459863876e40675c0e8d2e2_prof);

        
        $__internal_9618d1617152e41930af085197d5dcceec997c48a4a5330aebc7fdd9735523da->leave($__internal_9618d1617152e41930af085197d5dcceec997c48a4a5330aebc7fdd9735523da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cf057a3df5d3bab5a82a6ad6417f516555bf559117620c493be1f6df9c0c162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf057a3df5d3bab5a82a6ad6417f516555bf559117620c493be1f6df9c0c162->enter($__internal_6cf057a3df5d3bab5a82a6ad6417f516555bf559117620c493be1f6df9c0c162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23b44937a7771c6927880e7d729897e35de107da5fc7f2dc4e1f0e6783ed9653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b44937a7771c6927880e7d729897e35de107da5fc7f2dc4e1f0e6783ed9653->enter($__internal_23b44937a7771c6927880e7d729897e35de107da5fc7f2dc4e1f0e6783ed9653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_23b44937a7771c6927880e7d729897e35de107da5fc7f2dc4e1f0e6783ed9653->leave($__internal_23b44937a7771c6927880e7d729897e35de107da5fc7f2dc4e1f0e6783ed9653_prof);

        
        $__internal_6cf057a3df5d3bab5a82a6ad6417f516555bf559117620c493be1f6df9c0c162->leave($__internal_6cf057a3df5d3bab5a82a6ad6417f516555bf559117620c493be1f6df9c0c162_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_18100da154d5983f26115328882723ba3f1f3963dd354622c45759bf8df4ad3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18100da154d5983f26115328882723ba3f1f3963dd354622c45759bf8df4ad3a->enter($__internal_18100da154d5983f26115328882723ba3f1f3963dd354622c45759bf8df4ad3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0934c011b6f478fa9ebd3d9c5641ce1d936aa9d90e694dd97eee9699c7627a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0934c011b6f478fa9ebd3d9c5641ce1d936aa9d90e694dd97eee9699c7627a32->enter($__internal_0934c011b6f478fa9ebd3d9c5641ce1d936aa9d90e694dd97eee9699c7627a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " -profile";
        
        $__internal_0934c011b6f478fa9ebd3d9c5641ce1d936aa9d90e694dd97eee9699c7627a32->leave($__internal_0934c011b6f478fa9ebd3d9c5641ce1d936aa9d90e694dd97eee9699c7627a32_prof);

        
        $__internal_18100da154d5983f26115328882723ba3f1f3963dd354622c45759bf8df4ad3a->leave($__internal_18100da154d5983f26115328882723ba3f1f3963dd354622c45759bf8df4ad3a_prof);

    }

    // line 14
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c127ad1139235e0175b00c7e94d5ff316701f746479be36e5fe56c1eda109bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c127ad1139235e0175b00c7e94d5ff316701f746479be36e5fe56c1eda109bb7->enter($__internal_c127ad1139235e0175b00c7e94d5ff316701f746479be36e5fe56c1eda109bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc7de2e2a75270ec6789028c2576691efb25e315ba28849b3112b16ded597737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7de2e2a75270ec6789028c2576691efb25e315ba28849b3112b16ded597737->enter($__internal_dc7de2e2a75270ec6789028c2576691efb25e315ba28849b3112b16ded597737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 15
        echo "    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-12\">

                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redirectDresseur");
        echo "\">Accueil</a></li>
                            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherCabinetsFront");
        echo "\">Veterinaire</a></li>
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_a");
        echo "\">Annonce</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readFavoris");
        echo "\" class=\"menu-top-active\">Mes Annonces Favoris</a></li>
                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_e");
        echo "\" >Evenement</a></li>
                            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\">Parc</a></li>
                            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileDresseur");
        echo "\">Profil</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_dc7de2e2a75270ec6789028c2576691efb25e315ba28849b3112b16ded597737->leave($__internal_dc7de2e2a75270ec6789028c2576691efb25e315ba28849b3112b16ded597737_prof);

        
        $__internal_c127ad1139235e0175b00c7e94d5ff316701f746479be36e5fe56c1eda109bb7->leave($__internal_c127ad1139235e0175b00c7e94d5ff316701f746479be36e5fe56c1eda109bb7_prof);

    }

    // line 38
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_bb3d9755e1ff47515702cce71b4e1f27831300a3e4436bcac368416257da7681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3d9755e1ff47515702cce71b4e1f27831300a3e4436bcac368416257da7681->enter($__internal_bb3d9755e1ff47515702cce71b4e1f27831300a3e4436bcac368416257da7681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_34db6ec3e4af49c63ce87a3c75f6633c922f45197e06888c8db1098bccf30ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34db6ec3e4af49c63ce87a3c75f6633c922f45197e06888c8db1098bccf30ee1->enter($__internal_34db6ec3e4af49c63ce87a3c75f6633c922f45197e06888c8db1098bccf30ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 39
        echo "    <div class=\"just-sec\" id=\"port-folio\">


    <div class=\"container\">

        <div class=\"row \" >
            <ul id=\"filters\" >

                <table border=\"0\"align=\"center\">
                    <tr>

                        <td style=\"padding-right:50px;\">Titre</td>
                        <td style=\"padding-right:50px;\">Type </td>
                        <td style=\"padding-right:50px;\">Description</td>
                        <td style=\"padding-right:50px;\">Piece jointe</td>




                    </tr>

                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["annoncesFavoris"] ?? $this->getContext($context, "annoncesFavoris")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 61
            echo "                        <tr>
                            <td style=\"padding-right:50px;\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>
                            <td style=\"padding-right:50px;\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "type", array()), "html", null, true);
            echo "</td>
                            <td style=\"padding-right:50px;\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</td>
                            <td style=\"padding-right:50px;\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "piecejointe", array()), "html", null, true);
            echo "

                            <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annulerFavoris", array("idA" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-heart-o\"></span></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </table>
                </br>

            </ul>

        </div>
    </div>
";
        
        $__internal_34db6ec3e4af49c63ce87a3c75f6633c922f45197e06888c8db1098bccf30ee1->leave($__internal_34db6ec3e4af49c63ce87a3c75f6633c922f45197e06888c8db1098bccf30ee1_prof);

        
        $__internal_bb3d9755e1ff47515702cce71b4e1f27831300a3e4436bcac368416257da7681->leave($__internal_bb3d9755e1ff47515702cce71b4e1f27831300a3e4436bcac368416257da7681_prof);

    }

    public function getTemplateName()
    {
        return "EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 70,  215 => 67,  210 => 65,  206 => 64,  202 => 63,  198 => 62,  195 => 61,  191 => 60,  168 => 39,  159 => 38,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  106 => 15,  97 => 14,  78 => 10,  66 => 11,  62 => 10,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ZanimauxBundle:User:Layout2.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}
{% block head %}
    {{ parent() }}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <title>{% block title %}{{ parent() }} -profile{% endblock %}</title>
    <script src=\"{{ asset('js/jquery-1.11.1.min.js') }}\"></script>
{% endblock %}

{% block menu %}
    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-12\">

                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"{{ path('redirectDresseur') }}\">Accueil</a></li>
                            <li><a href=\"{{ path('afficherCabinetsFront') }}\">Veterinaire</a></li>
                            <li><a href=\"{{ path('consulter_a') }}\">Annonce</a></li>
                            <li><a href=\"{{ path('readFavoris') }}\" class=\"menu-top-active\">Mes Annonces Favoris</a></li>
                            <li><a href=\"{{ path('read_e') }}\" >Evenement</a></li>
                            <li><a href=\"{{ path('listparc') }}\">Parc</a></li>
                            <li><a href=\"{{ path('profileDresseur') }}\">Profil</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block contenu %}
    <div class=\"just-sec\" id=\"port-folio\">


    <div class=\"container\">

        <div class=\"row \" >
            <ul id=\"filters\" >

                <table border=\"0\"align=\"center\">
                    <tr>

                        <td style=\"padding-right:50px;\">Titre</td>
                        <td style=\"padding-right:50px;\">Type </td>
                        <td style=\"padding-right:50px;\">Description</td>
                        <td style=\"padding-right:50px;\">Piece jointe</td>




                    </tr>

                    {% for annonce in annoncesFavoris %}
                        <tr>
                            <td style=\"padding-right:50px;\">{{ annonce.titre}}</td>
                            <td style=\"padding-right:50px;\">{{ annonce.type}}</td>
                            <td style=\"padding-right:50px;\">{{ annonce.description }}</td>
                            <td style=\"padding-right:50px;\">{{ annonce.piecejointe }}

                            <td><a href=\"{{ path(\"annulerFavoris\",{ \"idA\": annonce.idAnnonce })}}\"><span class=\"fa fa-heart-o\"></span></a></td>
                        </tr>
                    {% endfor %}
                </table>
                </br>

            </ul>

        </div>
    </div>
{%endblock %}", "EventAndAnnonceBundle:Annonce:consulterFavoris.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/src/EventAndAnnonceBundle/Resources/views/Annonce/consulterFavoris.html.twig");
    }
}
