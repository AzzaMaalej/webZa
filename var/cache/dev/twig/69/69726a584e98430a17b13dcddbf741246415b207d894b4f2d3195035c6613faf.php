<?php

/* EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig */
class __TwigTemplate_a995802757c706b54074c244d6bfd7e02f62fbbee4c9bd03e6a77fe506c72f4f extends Twig_Template
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
        $__internal_59cd3333e256c7d67663bc188276abf50c830ae8418231914c94d2cb0eb96e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cd3333e256c7d67663bc188276abf50c830ae8418231914c94d2cb0eb96e95->enter($__internal_59cd3333e256c7d67663bc188276abf50c830ae8418231914c94d2cb0eb96e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig"));

        $__internal_44c0b478a23c3cd6d7044d98819a8696f271619a76c60314f52845512cf23a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c0b478a23c3cd6d7044d98819a8696f271619a76c60314f52845512cf23a59->enter($__internal_44c0b478a23c3cd6d7044d98819a8696f271619a76c60314f52845512cf23a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/BarElFou9aniya.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 3
        $this->displayBlock('up', $context, $blocks);
        
        $__internal_59cd3333e256c7d67663bc188276abf50c830ae8418231914c94d2cb0eb96e95->leave($__internal_59cd3333e256c7d67663bc188276abf50c830ae8418231914c94d2cb0eb96e95_prof);

        
        $__internal_44c0b478a23c3cd6d7044d98819a8696f271619a76c60314f52845512cf23a59->leave($__internal_44c0b478a23c3cd6d7044d98819a8696f271619a76c60314f52845512cf23a59_prof);

    }

    public function block_up($context, array $blocks = array())
    {
        $__internal_6478ffaf3f7488606315e65fd96b6c0e6d1618099549be2bb2dcb7b6ab7034cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6478ffaf3f7488606315e65fd96b6c0e6d1618099549be2bb2dcb7b6ab7034cf->enter($__internal_6478ffaf3f7488606315e65fd96b6c0e6d1618099549be2bb2dcb7b6ab7034cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        $__internal_3fb30795eaff60456083a308a33b0ba1bbe945b19dfe39f086641afc0425ab0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb30795eaff60456083a308a33b0ba1bbe945b19dfe39f086641afc0425ab0a->enter($__internal_3fb30795eaff60456083a308a33b0ba1bbe945b19dfe39f086641afc0425ab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

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
            echo "                            <li>
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
        
        $__internal_3fb30795eaff60456083a308a33b0ba1bbe945b19dfe39f086641afc0425ab0a->leave($__internal_3fb30795eaff60456083a308a33b0ba1bbe945b19dfe39f086641afc0425ab0a_prof);

        
        $__internal_6478ffaf3f7488606315e65fd96b6c0e6d1618099549be2bb2dcb7b6ab7034cf->leave($__internal_6478ffaf3f7488606315e65fd96b6c0e6d1618099549be2bb2dcb7b6ab7034cf_prof);

    }

    // line 102
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26436ed8c7059ab6fdd21daa1ac1540532f89288aab1d98539cdd23382899a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26436ed8c7059ab6fdd21daa1ac1540532f89288aab1d98539cdd23382899a9c->enter($__internal_26436ed8c7059ab6fdd21daa1ac1540532f89288aab1d98539cdd23382899a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85cc05dbef8b0390f2b215f652bb02900d49d209ef2eaa9b0971700b15f25f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cc05dbef8b0390f2b215f652bb02900d49d209ef2eaa9b0971700b15f25f20->enter($__internal_85cc05dbef8b0390f2b215f652bb02900d49d209ef2eaa9b0971700b15f25f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 103
        echo "    <section class=\"menu-section\" style=\"margin-top: 50px\">
        <form class=\"navbar-form navbar-right\" method=\"post\" action=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rechercher_a");
        echo "\">
            <nav>
                <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\" name=\"ann\">
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
        echo "\"class=\"menu-top-active\"> Annonce</a></li>
                            <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readFavoris");
        echo "\">Mes Annonces Favoris</a></li>
                            <li><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_e");
        echo "\">evenement</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_85cc05dbef8b0390f2b215f652bb02900d49d209ef2eaa9b0971700b15f25f20->leave($__internal_85cc05dbef8b0390f2b215f652bb02900d49d209ef2eaa9b0971700b15f25f20_prof);

        
        $__internal_26436ed8c7059ab6fdd21daa1ac1540532f89288aab1d98539cdd23382899a9c->leave($__internal_26436ed8c7059ab6fdd21daa1ac1540532f89288aab1d98539cdd23382899a9c_prof);

    }

    // line 135
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_313011e9f2448b68d2d439ffd919e652e5b295971e9bacb5c0015e869c1b85e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313011e9f2448b68d2d439ffd919e652e5b295971e9bacb5c0015e869c1b85e9->enter($__internal_313011e9f2448b68d2d439ffd919e652e5b295971e9bacb5c0015e869c1b85e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_a8a8e40f11dc69c5f993a91f566e736f2ea533f9f36932eaed999b5dec9291d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a8e40f11dc69c5f993a91f566e736f2ea533f9f36932eaed999b5dec9291d9->enter($__internal_a8a8e40f11dc69c5f993a91f566e736f2ea533f9f36932eaed999b5dec9291d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 136
        echo "    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
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
        $context['_seq'] = twig_ensure_traversable(($context["annonces"] ?? $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 145
            echo "                    <li>

                        <!--l'annonce en cours est elle dans la table favoris ou nn!-->



                        <img alt=\"My 24th Birthday!\" src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["annonce"], "pieceJointe", array())), "html", null, true);
            echo "\" />
                        <div class=\"info\">
                            <h2 class=\"title\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h2>
                            <p class=\"desc\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</p>
                            <ul>
                                ";
            // line 156
            if (($this->getAttribute($context["annonce"], "cin", array()) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))) {
                // line 157
                echo "

                                <li style=\"width:33%;\"><a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_a", array("idAnnonce" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
                echo "\" class=\"fa fa-eraser\"></a></li>
                                <li style=\"width:34%;\"><a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_a", array("idAnnonce" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
                echo "\" class=\"fa fa-edit\"></a></li>
                                ";
            }
            // line 162
            echo "                                ";
            $context["v"] = 0;
            // line 163
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["favoris"] ?? $this->getContext($context, "favoris")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 164
                echo "                                    ";
                if (($this->getAttribute($context["f"], "getIdA", array(), "method") == $this->getAttribute($context["annonce"], "getIdAnnonce", array()))) {
                    // line 165
                    echo "                                        ";
                    $context["v"] = 1;
                    // line 166
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                ";
            if ((($context["v"] ?? $this->getContext($context, "v")) == 1)) {
                // line 168
                echo "                                    <li  style=\"width:34%;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annulerFavoris", array("idA" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
                echo "\"><span class=\"fa fa-heart-o\"></span></a></li>
                                ";
            } else {
                // line 170
                echo "                                <li style=\"width:34%;\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addFavoris", array("idA" => $this->getAttribute($context["annonce"], "idAnnonce", array()))), "html", null, true);
                echo "\"><span class=\"fa fa-heart\"></span></a></li>
                                ";
            }
            // line 172
            echo "                            </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "
                </ul>
            </div>
        </div>
    </div>

    <div class=\"navigation\">
        ";
        // line 191
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["annonces"] ?? $this->getContext($context, "annonces")));
        echo "
    </div>

";
        
        $__internal_a8a8e40f11dc69c5f993a91f566e736f2ea533f9f36932eaed999b5dec9291d9->leave($__internal_a8a8e40f11dc69c5f993a91f566e736f2ea533f9f36932eaed999b5dec9291d9_prof);

        
        $__internal_313011e9f2448b68d2d439ffd919e652e5b295971e9bacb5c0015e869c1b85e9->leave($__internal_313011e9f2448b68d2d439ffd919e652e5b295971e9bacb5c0015e869c1b85e9_prof);

    }

    public function getTemplateName()
    {
        return "EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 191,  409 => 184,  392 => 172,  386 => 170,  380 => 168,  377 => 167,  370 => 166,  367 => 165,  364 => 164,  359 => 163,  356 => 162,  351 => 160,  347 => 159,  343 => 157,  341 => 156,  336 => 154,  332 => 153,  327 => 151,  319 => 145,  315 => 144,  305 => 137,  302 => 136,  293 => 135,  273 => 124,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  253 => 119,  249 => 118,  245 => 117,  229 => 104,  226 => 103,  217 => 102,  207 => 135,  204 => 134,  202 => 102,  187 => 90,  183 => 88,  172 => 83,  165 => 79,  161 => 78,  157 => 77,  152 => 75,  147 => 72,  143 => 71,  123 => 54,  108 => 42,  103 => 40,  97 => 39,  81 => 26,  65 => 15,  52 => 4,  34 => 3,  28 => 1,);
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
        <form class=\"navbar-form navbar-right\" method=\"post\" action=\"{{ path('rechercher_a') }}\">
            <nav>
                <input class=\"form-control form-control-dark w-100\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\" name=\"ann\">
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
                            <li><a href=\"{{ path('consulter_a') }}\"class=\"menu-top-active\"> Annonce</a></li>
                            <li><a href=\"{{ path('readFavoris') }}\">Mes Annonces Favoris</a></li>
                            <li><a href=\"{{ path('read_e') }}\">evenement</a></li>
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
                    {% for annonce in annonces %}
                    <li>

                        <!--l'annonce en cours est elle dans la table favoris ou nn!-->



                        <img alt=\"My 24th Birthday!\" src=\"{{ asset(annonce.pieceJointe) }}\" />
                        <div class=\"info\">
                            <h2 class=\"title\">{{ annonce.titre }}</h2>
                            <p class=\"desc\">{{ annonce.description }}</p>
                            <ul>
                                {% if  annonce.cin == user.id  %}


                                <li style=\"width:33%;\"><a href=\"{{ path(\"supprimer_a\",{ \"idAnnonce\": annonce.idAnnonce })}}\" class=\"fa fa-eraser\"></a></li>
                                <li style=\"width:34%;\"><a href=\"{{ path(\"modifier_a\",{ \"idAnnonce\":annonce.idAnnonce})}}\" class=\"fa fa-edit\"></a></li>
                                {% endif %}
                                {% set v=0 %}
                                {% for f in favoris  %}
                                    {% if f.getIdA()==annonce.getIdAnnonce %}
                                        {% set v=1 %}
                                    {% endif %}{% endfor %}
                                {% if v==1 %}
                                    <li  style=\"width:34%;\"><a href=\"{{ path(\"annulerFavoris\",{ \"idA\": annonce.idAnnonce })}}\"><span class=\"fa fa-heart-o\"></span></a></li>
                                {% else %}
                                <li style=\"width:34%;\"><a href=\"{{ path(\"addFavoris\",{ \"idA\": annonce.idAnnonce })}}\"><span class=\"fa fa-heart\"></span></a></li>
                                {% endif %}
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

    <div class=\"navigation\">
        {{ knp_pagination_render(annonces) }}
    </div>

{% endblock %}
{% endblock %}", "EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/src/EventAndAnnonceBundle/Resources/views/Annonce/consulterAnnonce.html.twig");
    }
}
