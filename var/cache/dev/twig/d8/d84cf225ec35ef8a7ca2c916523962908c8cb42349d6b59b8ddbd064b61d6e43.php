<?php

/* EventAndAnnonceBundle:Evenement:read.html.twig */
class __TwigTemplate_19fdd175e6392c381595e120acaa0b6b03a0d2ac9789723021b504399cf41107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'up' => array($this, 'block_up'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04b6a513c273ac483287409da2f9a6e1ff8453125a958b533de2c4c3db414c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b6a513c273ac483287409da2f9a6e1ff8453125a958b533de2c4c3db414c3d->enter($__internal_04b6a513c273ac483287409da2f9a6e1ff8453125a958b533de2c4c3db414c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Evenement:read.html.twig"));

        $__internal_f73e2e0109cf13ba28f49a4ba5a558e5f092e245de457619d23e9e1deaacac30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73e2e0109cf13ba28f49a4ba5a558e5f092e245de457619d23e9e1deaacac30->enter($__internal_f73e2e0109cf13ba28f49a4ba5a558e5f092e245de457619d23e9e1deaacac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Evenement:read.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/BarElFou9aniya.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 3
        $this->displayBlock('up', $context, $blocks);
        
        $__internal_04b6a513c273ac483287409da2f9a6e1ff8453125a958b533de2c4c3db414c3d->leave($__internal_04b6a513c273ac483287409da2f9a6e1ff8453125a958b533de2c4c3db414c3d_prof);

        
        $__internal_f73e2e0109cf13ba28f49a4ba5a558e5f092e245de457619d23e9e1deaacac30->leave($__internal_f73e2e0109cf13ba28f49a4ba5a558e5f092e245de457619d23e9e1deaacac30_prof);

    }

    public function block_up($context, array $blocks = array())
    {
        $__internal_e7a8f90cd454c21abd76b4fae12dab8de079d3f11ceb126ae6bfc18e4174596c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a8f90cd454c21abd76b4fae12dab8de079d3f11ceb126ae6bfc18e4174596c->enter($__internal_e7a8f90cd454c21abd76b4fae12dab8de079d3f11ceb126ae6bfc18e4174596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        $__internal_e594c6c50b3e4ed72b1e275cb7ac91c1fdecc9cc1adf5cf05c9be3002bfbf4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e594c6c50b3e4ed72b1e275cb7ac91c1fdecc9cc1adf5cf05c9be3002bfbf4c3->enter($__internal_e594c6c50b3e4ed72b1e275cb7ac91c1fdecc9cc1adf5cf05c9be3002bfbf4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        // line 4
        echo "<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">

    <div id=\"container\">

        <!------ Include the above in your HEAD tag ---------->

        <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"height: 1px\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">

                    <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redirect");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" style=\"position: absolute;   top: 0;left: O;bottom: 0; \"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\" style=\"position: absolute;  top: 0;right: 10px;bottom: 0; \">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span>
                                    <strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</strong>
                                    <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-4\">
                                                    <p class=\"text-center\">
                                                        <span class=\"glyphicon glyphicon-user icon-size\"></span>
                                                    </p>
                                                </div>
                                                <div class=\"col-lg-8\">
                                                    <p class=\"text-left\"><strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</strong></p>
                                                    <p class=\"text-left small\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                                                    <p class=\"text-left\">
                                                        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" class=\"btn btn-primary btn-block btn-sm\">Voir profil</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deconnexion");
        echo "\" class=\"btn btn-danger btn-block\">se déconnecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </ul>



                    <ul class=\"nav navbar-nav navbar-right\" style=\"position: absolute; top: 0;right: 220px;bottom: 0; \">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> <span class=\"glyphicon glyphicon-shopping-cart\"></span>DT<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu dropdown-cart\" role=\"menu\">
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cPanier"] ?? $this->getContext($context, "cPanier")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 72
            echo "                                    <li>
                  <span class=\"item\">
                    <span class=\"item-left\">
                        <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/produit/" . $this->getAttribute($this->getAttribute($context["p"], "IdProduit", array()), "photoProduit", array()))), "html", null, true);
            echo "\" style=\"height:100px; width:100px\"/></br>
                        <span class=\"item-info\">
                            <span>Libelle: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "IdProduit", array()), "libelle", array()), "html", null, true);
            echo "</span></br>
                            <span>Quantité:";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</span></br>
                            <span>Prix:";
            // line 79
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "prix", array()) * $this->getAttribute($context["p"], "quantite", array())), "html", null, true);
            echo " dt</span></br>
                        </span>
                    </span>
                    <span class=\"item-right\">
                        <button class=\"btn btn-xs btn-danger pull-right\"><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppProduit_p", array("idContenuPanier" => $this->getAttribute($context["p"], "IdContenuPanier", array()), "prix" => $this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "prix", array()), "quantite" => $this->getAttribute($context["p"], "quantite", array()))), "html", null, true);
            echo "\">x</a></button>
                    </span>
                </span>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
                                <li class=\"divider\"></li>
                                <li><a class=\"text-center\" href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichePanier");
        echo "\">Voir Panier</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div>

        </div>
    </div>

    ";
        // line 102
        $this->displayBlock('menu', $context, $blocks);
        // line 134
        echo "
    ";
        // line 135
        $this->displayBlock('contenu', $context, $blocks);
        
        $__internal_e594c6c50b3e4ed72b1e275cb7ac91c1fdecc9cc1adf5cf05c9be3002bfbf4c3->leave($__internal_e594c6c50b3e4ed72b1e275cb7ac91c1fdecc9cc1adf5cf05c9be3002bfbf4c3_prof);

        
        $__internal_e7a8f90cd454c21abd76b4fae12dab8de079d3f11ceb126ae6bfc18e4174596c->leave($__internal_e7a8f90cd454c21abd76b4fae12dab8de079d3f11ceb126ae6bfc18e4174596c_prof);

    }

    // line 102
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6e067402c0a0dcbe4196f62b0cb3742c974dc51e898d6059bb0a8c72ba4509f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e067402c0a0dcbe4196f62b0cb3742c974dc51e898d6059bb0a8c72ba4509f->enter($__internal_c6e067402c0a0dcbe4196f62b0cb3742c974dc51e898d6059bb0a8c72ba4509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88dc47b3afcae89d0fa6629221eef69bb091eef362236f283a87de24585f53ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dc47b3afcae89d0fa6629221eef69bb091eef362236f283a87de24585f53ea->enter($__internal_88dc47b3afcae89d0fa6629221eef69bb091eef362236f283a87de24585f53ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 103
        echo "        <section class=\"menu-section\" style=\"margin-top: 50px\">
            <form class=\"navbar-form navbar-right\" method=\"post\" action=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercher_e");
        echo "\">
                <nav>
                    <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\" name=\"motcle\">
                </nav>
            </form>
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">


                        <div class=\"navbar-collapse collapse \">

                            <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche");
        echo "\" >Accueil </a></li>
                                <li><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherCabinetsFront");
        echo "\"> Veterinaire </a></li>
                                <li><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_refuge_internaute");
        echo "\"> Refuge </a></li>
                                <li ><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_m");
        echo "\">Magasin </a></li>
                                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\"> Dresseur & pet-sitter </a></li>
                                <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_a");
        echo "\"> Annonce</a></li>
                                <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readFavoris");
        echo "\">Mes Annonces Favoris</a></li>
                                <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_e");
        echo "\"class=\"menu-top-active\">evenement</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    ";
        
        $__internal_88dc47b3afcae89d0fa6629221eef69bb091eef362236f283a87de24585f53ea->leave($__internal_88dc47b3afcae89d0fa6629221eef69bb091eef362236f283a87de24585f53ea_prof);

        
        $__internal_c6e067402c0a0dcbe4196f62b0cb3742c974dc51e898d6059bb0a8c72ba4509f->leave($__internal_c6e067402c0a0dcbe4196f62b0cb3742c974dc51e898d6059bb0a8c72ba4509f_prof);

    }

    // line 135
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6e07436455defe424cf01caf452a192c50fcd7b687ec026d0e5ca442e58b276f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e07436455defe424cf01caf452a192c50fcd7b687ec026d0e5ca442e58b276f->enter($__internal_6e07436455defe424cf01caf452a192c50fcd7b687ec026d0e5ca442e58b276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_1efa0ea448379ce39346f39b3d2cbd806fdd267ff11a1cc12635468163a73804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efa0ea448379ce39346f39b3d2cbd806fdd267ff11a1cc12635468163a73804->enter($__internal_1efa0ea448379ce39346f39b3d2cbd806fdd267ff11a1cc12635468163a73804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 136
        echo "        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/essaye.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!------ Include the above in your HEAD tag ---------->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"[ col-xs-12 col-sm-offset-2 col-sm-8 ]\">
                    <ul class=\"event-list\">
                        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 145
            echo "                            <li>

                                <!--l'annonce en cours est elle dans la table favoris ou nn!-->



                                <img alt=\"My 24th Birthday!\" src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["evenement"], "imageEvt", array())), "html", null, true);
            echo "\" />
                                <div class=\"info\">
                                    <h2 class=\"title\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "titre", array()), "html", null, true);
            echo "</h2>
                                    <h3>Ceci aura lieu le  : </h3>
                                    <p class=\"desc\">";
            // line 155
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datedebut", array()), "d-m-y"), "html", null, true);
            echo "</p>
                                    <ul>
                                        ";
            // line 157
            if (($this->getAttribute($context["evenement"], "cin", array()) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))) {
                // line 158
                echo "

                                            <li style=\"width:33%;\"><a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_e", array("idEvt" => $this->getAttribute($context["evenement"], "idEvt", array()))), "html", null, true);
                echo "\" class=\"fa fa-eraser\"></a></li>
                                            <li style=\"width:34%;\"><a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_e", array("idEvt" => $this->getAttribute($context["evenement"], "idEvt", array()))), "html", null, true);
                echo "\" class=\"fa fa-edit\"></a></li>
                                        ";
            }
            // line 163
            echo "                                        <li style=\"width:34%;\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailEvent", array("idEvt" => $this->getAttribute($context["evenement"], "idEvt", array()))), "html", null, true);
            echo "\"><span class=\"fa fa-info\"></span></a></li>

                                    </ul>
                                </div>
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\" style=\"width:33%;\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&display=popup&ref=plugin&src=like&kid_directed_site=0\"><span class=\"fa fa-facebook\"></span></a></li>
                                        <li class=\"twitter\" style=\"width:34%;\"><a href=\"https://twitter.com/intent/tweet?hashtags=Esprit&original_referer=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&ref_src=twsrc%5Etfw&text=Je%20veux%20partager%20%C3%A7a%20avec%20vous&tw_p=tweetbutton&url=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&via=Esprit%20Test\"><span class=\"fa fa-twitter\"></span></a></li>
                                        <li class=\"google-plus\" style=\"width:33%;\"><a href=\"https://plus.google.com/share?app=110&url=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1\"><span class=\"fa fa-google-plus\"></span></a></li>
                                    </ul>

                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
                    </ul>
                </div>
            </div>
        </div>



  </div>
    ";
        
        $__internal_1efa0ea448379ce39346f39b3d2cbd806fdd267ff11a1cc12635468163a73804->leave($__internal_1efa0ea448379ce39346f39b3d2cbd806fdd267ff11a1cc12635468163a73804_prof);

        
        $__internal_6e07436455defe424cf01caf452a192c50fcd7b687ec026d0e5ca442e58b276f->leave($__internal_6e07436455defe424cf01caf452a192c50fcd7b687ec026d0e5ca442e58b276f_prof);

    }

    public function getTemplateName()
    {
        return "EventAndAnnonceBundle:Evenement:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 177,  357 => 163,  352 => 161,  348 => 160,  344 => 158,  342 => 157,  337 => 155,  332 => 153,  327 => 151,  319 => 145,  315 => 144,  305 => 137,  302 => 136,  293 => 135,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  253 => 119,  249 => 118,  245 => 117,  229 => 104,  226 => 103,  217 => 102,  207 => 135,  204 => 134,  202 => 102,  187 => 90,  183 => 88,  172 => 83,  165 => 79,  161 => 78,  157 => 77,  152 => 75,  147 => 72,  143 => 71,  123 => 54,  108 => 42,  103 => 40,  97 => 39,  81 => 26,  65 => 15,  52 => 4,  34 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset('css/BarElFou9aniya.css') }}\" rel=\"stylesheet\" />

{% block up %}
<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">

    <div id=\"container\">

        <!------ Include the above in your HEAD tag ---------->

        <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"height: 1px\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">

                    <a class=\"navbar-brand\" href=\"{{ path('redirect') }}\"><img src=\"{{ asset('img/logo2.png') }}\" style=\"position: absolute;   top: 0;left: O;bottom: 0; \"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\" style=\"position: absolute;  top: 0;right: 10px;bottom: 0; \">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span>
                                    <strong>{{ user.username }}</strong>
                                    <span class=\"glyphicon glyphicon-chevron-down\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-4\">
                                                    <p class=\"text-center\">
                                                        <span class=\"glyphicon glyphicon-user icon-size\"></span>
                                                    </p>
                                                </div>
                                                <div class=\"col-lg-8\">
                                                    <p class=\"text-left\"><strong>{{ user.nom }} {{ user.prenom }}</strong></p>
                                                    <p class=\"text-left small\">{{ user.email }}</p>
                                                    <p class=\"text-left\">
                                                        <a href=\"{{ path('profile') }}\" class=\"btn btn-primary btn-block btn-sm\">Voir profil</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"{{ path('deconnexion') }}\" class=\"btn btn-danger btn-block\">se déconnecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </ul>



                    <ul class=\"nav navbar-nav navbar-right\" style=\"position: absolute; top: 0;right: 220px;bottom: 0; \">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> <span class=\"glyphicon glyphicon-shopping-cart\"></span>DT<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu dropdown-cart\" role=\"menu\">
                                {% for p in cPanier%}
                                    <li>
                  <span class=\"item\">
                    <span class=\"item-left\">
                        <img src=\"{{asset('img/produit/'~p.IdProduit.photoProduit )}}\" style=\"height:100px; width:100px\"/></br>
                        <span class=\"item-info\">
                            <span>Libelle: {{ p.IdProduit.libelle }}</span></br>
                            <span>Quantité:{{ p.quantite }}</span></br>
                            <span>Prix:{{ p.idProduit.prix *p.quantite }} dt</span></br>
                        </span>
                    </span>
                    <span class=\"item-right\">
                        <button class=\"btn btn-xs btn-danger pull-right\"><a href=\"{{ path('suppProduit_p',{'idContenuPanier':p.IdContenuPanier,'prix':p.idProduit.prix,'quantite':p.quantite }) }}\">x</a></button>
                    </span>
                </span>
                                    </li>
                                {% endfor %}

                                <li class=\"divider\"></li>
                                <li><a class=\"text-center\" href=\"{{ path('affichePanier') }}\">Voir Panier</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div>

        </div>
    </div>

    {% block menu %}
        <section class=\"menu-section\" style=\"margin-top: 50px\">
            <form class=\"navbar-form navbar-right\" method=\"post\" action=\"{{ path('rechercher_e') }}\">
                <nav>
                    <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\" name=\"motcle\">
                </nav>
            </form>
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">


                        <div class=\"navbar-collapse collapse \">

                            <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"{{ path('affiche') }}\" >Accueil </a></li>
                                <li><a href=\"{{ path('afficherCabinetsFront') }}\"> Veterinaire </a></li>
                                <li><a href=\"{{ path('afficher_refuge_internaute') }}\"> Refuge </a></li>
                                <li ><a href=\"{{ path('affiche_m') }}\">Magasin </a></li>
                                <li><a href=\"{{ path('listparc') }}\"> Dresseur & pet-sitter </a></li>
                                <li><a href=\"{{ path('consulter_a') }}\"> Annonce</a></li>
                                <li><a href=\"{{ path('readFavoris') }}\">Mes Annonces Favoris</a></li>
                                <li><a href=\"{{ path('read_e') }}\"class=\"menu-top-active\">evenement</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    {% endblock %}

    {% block contenu %}
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <link href=\"{{ asset('css/essaye.css') }}\" rel=\"stylesheet\">
        <!------ Include the above in your HEAD tag ---------->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"[ col-xs-12 col-sm-offset-2 col-sm-8 ]\">
                    <ul class=\"event-list\">
                        {% for evenement in evenements %}
                            <li>

                                <!--l'annonce en cours est elle dans la table favoris ou nn!-->



                                <img alt=\"My 24th Birthday!\" src=\"{{ asset(evenement.imageEvt) }}\" />
                                <div class=\"info\">
                                    <h2 class=\"title\">{{ evenement.titre }}</h2>
                                    <h3>Ceci aura lieu le  : </h3>
                                    <p class=\"desc\">{{ evenement.datedebut|date('d-m-y') }}</p>
                                    <ul>
                                        {% if  evenement.cin == user.id  %}


                                            <li style=\"width:33%;\"><a href=\"{{ path(\"delete_e\",{ \"idEvt\": evenement.idEvt })}}\" class=\"fa fa-eraser\"></a></li>
                                            <li style=\"width:34%;\"><a href=\"{{ path(\"update_e\",{ \"idEvt\":evenement.idEvt})}}\" class=\"fa fa-edit\"></a></li>
                                        {% endif %}
                                        <li style=\"width:34%;\"><a href=\"{{ path('detailEvent',{ \"idEvt\": evenement.idEvt })}}\"><span class=\"fa fa-info\"></span></a></li>

                                    </ul>
                                </div>
                                <div class=\"social\">
                                    <ul>
                                        <li class=\"facebook\" style=\"width:33%;\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&display=popup&ref=plugin&src=like&kid_directed_site=0\"><span class=\"fa fa-facebook\"></span></a></li>
                                        <li class=\"twitter\" style=\"width:34%;\"><a href=\"https://twitter.com/intent/tweet?hashtags=Esprit&original_referer=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&ref_src=twsrc%5Etfw&text=Je%20veux%20partager%20%C3%A7a%20avec%20vous&tw_p=tweetbutton&url=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1&via=Esprit%20Test\"><span class=\"fa fa-twitter\"></span></a></li>
                                        <li class=\"google-plus\" style=\"width:33%;\"><a href=\"https://plus.google.com/share?app=110&url=http%3A%2F%2Flocalhost%2FzanimauxFinal%2Fweb%2Fapp_dev.php%2Fevent%2Fconsulter%3Fpage%3D1\"><span class=\"fa fa-google-plus\"></span></a></li>
                                    </ul>

                                </div>
                            </li>
                        {% endfor %}

                    </ul>
                </div>
            </div>
        </div>



  </div>
    {% endblock %}
{% endblock %}", "EventAndAnnonceBundle:Evenement:read.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/src/EventAndAnnonceBundle/Resources/views/Evenement/read.html.twig");
    }
}
