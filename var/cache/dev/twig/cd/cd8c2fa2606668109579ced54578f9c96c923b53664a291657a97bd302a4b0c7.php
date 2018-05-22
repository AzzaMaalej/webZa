<?php

/* ZanimauxBundle:User:Layout2.html.twig */
class __TwigTemplate_661272dfb54c8824eab5c0767717acb9f547e6934579ba0c53084d7c03450293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'up' => array($this, 'block_up'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'piedPage' => array($this, 'block_piedPage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a16bd677d143d9198484485186a09b82233644779bb7db0cdee889b8214203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a16bd677d143d9198484485186a09b82233644779bb7db0cdee889b8214203->enter($__internal_52a16bd677d143d9198484485186a09b82233644779bb7db0cdee889b8214203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZanimauxBundle:User:Layout2.html.twig"));

        $__internal_7bf0be5e86c3cffb4166c1bfb1ac01e3945aaa9745465984ce63cb98430d2ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf0be5e86c3cffb4166c1bfb1ac01e3945aaa9745465984ce63cb98430d2ff8->enter($__internal_7bf0be5e86c3cffb4166c1bfb1ac01e3945aaa9745465984ce63cb98430d2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZanimauxBundle:User:Layout2.html.twig"));

        // line 1
        echo "<html>
<head>
     ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "</head>
<body style=overflow-y:auto;>
";
        // line 27
        $this->displayBlock('up', $context, $blocks);
        // line 151
        echo "    <!-- MENU SECTION END-->
    ";
        // line 152
        $this->displayBlock('contenu', $context, $blocks);
        // line 476
        echo "    <!--SET-DIV SECTION END-->
    ";
        // line 477
        $this->displayBlock('piedPage', $context, $blocks);
        // line 534
        echo "</body>
</html>";
        
        $__internal_52a16bd677d143d9198484485186a09b82233644779bb7db0cdee889b8214203->leave($__internal_52a16bd677d143d9198484485186a09b82233644779bb7db0cdee889b8214203_prof);

        
        $__internal_7bf0be5e86c3cffb4166c1bfb1ac01e3945aaa9745465984ce63cb98430d2ff8->leave($__internal_7bf0be5e86c3cffb4166c1bfb1ac01e3945aaa9745465984ce63cb98430d2ff8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5a48258207b5b69c86caa54280694c350222e8f9849706fcea480061380592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a48258207b5b69c86caa54280694c350222e8f9849706fcea480061380592c->enter($__internal_d5a48258207b5b69c86caa54280694c350222e8f9849706fcea480061380592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65c310727e9efdab3dc7f32a0d4b277eb798803b2a07172d5419654a0b6682af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c310727e9efdab3dc7f32a0d4b277eb798803b2a07172d5419654a0b6682af->enter($__internal_65c310727e9efdab3dc7f32a0d4b277eb798803b2a07172d5419654a0b6682af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta charset=\"utf-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "    ";
        
        $__internal_65c310727e9efdab3dc7f32a0d4b277eb798803b2a07172d5419654a0b6682af->leave($__internal_65c310727e9efdab3dc7f32a0d4b277eb798803b2a07172d5419654a0b6682af_prof);

        
        $__internal_d5a48258207b5b69c86caa54280694c350222e8f9849706fcea480061380592c->leave($__internal_d5a48258207b5b69c86caa54280694c350222e8f9849706fcea480061380592c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_074df69329978e7bb5990d97fd417ab924ec18459df521a23ec6080684339008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074df69329978e7bb5990d97fd417ab924ec18459df521a23ec6080684339008->enter($__internal_074df69329978e7bb5990d97fd417ab924ec18459df521a23ec6080684339008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c1edce6623f47c424668feea50cb901348d11df78c9a50d6875d24d3e9544f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1edce6623f47c424668feea50cb901348d11df78c9a50d6875d24d3e9544f1->enter($__internal_9c1edce6623f47c424668feea50cb901348d11df78c9a50d6875d24d3e9544f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil ";
        
        $__internal_9c1edce6623f47c424668feea50cb901348d11df78c9a50d6875d24d3e9544f1->leave($__internal_9c1edce6623f47c424668feea50cb901348d11df78c9a50d6875d24d3e9544f1_prof);

        
        $__internal_074df69329978e7bb5990d97fd417ab924ec18459df521a23ec6080684339008->leave($__internal_074df69329978e7bb5990d97fd417ab924ec18459df521a23ec6080684339008_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a7c64cefed865f8915c9f0699c4d8273ed53a36bd3d2998e46e91acf75f589c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c64cefed865f8915c9f0699c4d8273ed53a36bd3d2998e46e91acf75f589c2->enter($__internal_a7c64cefed865f8915c9f0699c4d8273ed53a36bd3d2998e46e91acf75f589c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_afaf4bcf32b006c7a0872b176df7e42ae9661a1cbc051200e2cf3ddc0d755a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaf4bcf32b006c7a0872b176df7e42ae9661a1cbc051200e2cf3ddc0d755a4b->enter($__internal_afaf4bcf32b006c7a0872b176df7e42ae9661a1cbc051200e2cf3ddc0d755a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- FONT AWESOME STYLE  -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/boutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- ANIMATE STYLE  -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/BarElFou9aniya.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- FLEXSLIDER STYLE  -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("adminpage/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"bootstrap-css\">
         <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_afaf4bcf32b006c7a0872b176df7e42ae9661a1cbc051200e2cf3ddc0d755a4b->leave($__internal_afaf4bcf32b006c7a0872b176df7e42ae9661a1cbc051200e2cf3ddc0d755a4b_prof);

        
        $__internal_a7c64cefed865f8915c9f0699c4d8273ed53a36bd3d2998e46e91acf75f589c2->leave($__internal_a7c64cefed865f8915c9f0699c4d8273ed53a36bd3d2998e46e91acf75f589c2_prof);

    }

    // line 27
    public function block_up($context, array $blocks = array())
    {
        $__internal_ff01f56e41922401cdf7d9ef9d311f459c391a39a8c9e9095cb6ca7f4adfcbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01f56e41922401cdf7d9ef9d311f459c391a39a8c9e9095cb6ca7f4adfcbf3->enter($__internal_ff01f56e41922401cdf7d9ef9d311f459c391a39a8c9e9095cb6ca7f4adfcbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        $__internal_3b9e83bca3ec60c8814011dcc23ecee589f4b6a8cb97afd94bab17fd33446e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9e83bca3ec60c8814011dcc23ecee589f4b6a8cb97afd94bab17fd33446e7d->enter($__internal_3b9e83bca3ec60c8814011dcc23ecee589f4b6a8cb97afd94bab17fd33446e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        // line 28
        echo "
<div id=\"container\">

    <!------ Include the above in your HEAD tag ---------->

    <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"height: 1px\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">

                <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redirect");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" style=\"position: absolute;\ttop: 0;left: O;bottom: 0; \"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\" style=\"position: absolute;\ttop: 0;right: 10px;bottom: 0; \">
                        <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> 
                                <strong>";
        // line 49
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
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</strong></p>
                                                <p class=\"text-left small\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                                                <p class=\"text-left\">
                                                    <a href=\"";
        // line 65
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
        // line 77
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



                <ul class=\"nav navbar-nav navbar-right\" style=\"position: absolute;\ttop: 0;right: 220px;bottom: 0; \">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> <span class=\"glyphicon glyphicon-shopping-cart\"></span>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["panier"] ?? $this->getContext($context, "panier")), "Somme", array()), "html", null, true);
        echo "DT<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu dropdown-cart\" role=\"menu\">
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cPanier"] ?? $this->getContext($context, "cPanier")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 95
            echo "                            <li>
                  <span class=\"item\">
                    <span class=\"item-left\">
                        <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/produit/" . $this->getAttribute($this->getAttribute($context["p"], "IdProduit", array()), "photoProduit", array()))), "html", null, true);
            echo "\" style=\"height:100px; width:100px\"/></br>
                        <span class=\"item-info\">
                            <span>Libelle: ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "IdProduit", array()), "libelle", array()), "html", null, true);
            echo "</span></br>
                            <span>Quantité:";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantite", array()), "html", null, true);
            echo "</span></br>
                            <span>Prix:";
            // line 102
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["p"], "idProduit", array()), "prix", array()) * $this->getAttribute($context["p"], "quantite", array())), "html", null, true);
            echo " dt</span></br>
                        </span>
                    </span>
                    <span class=\"item-right\">
                        <button class=\"btn btn-xs btn-danger pull-right\"><a href=\"";
            // line 106
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
        // line 111
        echo "
                        <li class=\"divider\"></li>
                        <li><a class=\"text-center\" href=\"";
        // line 113
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
<!-- LOGO HEADER END-->
    ";
        // line 125
        $this->displayBlock('menu', $context, $blocks);
        // line 149
        echo "
    ";
        
        $__internal_3b9e83bca3ec60c8814011dcc23ecee589f4b6a8cb97afd94bab17fd33446e7d->leave($__internal_3b9e83bca3ec60c8814011dcc23ecee589f4b6a8cb97afd94bab17fd33446e7d_prof);

        
        $__internal_ff01f56e41922401cdf7d9ef9d311f459c391a39a8c9e9095cb6ca7f4adfcbf3->leave($__internal_ff01f56e41922401cdf7d9ef9d311f459c391a39a8c9e9095cb6ca7f4adfcbf3_prof);

    }

    // line 125
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7edaf815961bfb21f93f1bf7607c90701cf2f9a8806111a581f3edec8127fe45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edaf815961bfb21f93f1bf7607c90701cf2f9a8806111a581f3edec8127fe45->enter($__internal_7edaf815961bfb21f93f1bf7607c90701cf2f9a8806111a581f3edec8127fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c65a1e0b66892aea17e02282d1f27cd949a1bc4723dd3a06083861a7f275bd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65a1e0b66892aea17e02282d1f27cd949a1bc4723dd3a06083861a7f275bd6a->enter($__internal_c65a1e0b66892aea17e02282d1f27cd949a1bc4723dd3a06083861a7f275bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 126
        echo "        <section class=\"menu-section\" style=\"margin-top: 50px\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">

                        <div class=\"navbar-collapse collapse \">
                            <ul>
                            <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("redirect");
        echo "\"class=\"menu-top-active\" >Accueil </a></li>
                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherCabinetsFront");
        echo "\"> Veterinaire </a></li>
                            <li><a  href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_refuge");
        echo "\"> Refuge </a></li>
                            <li ><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_m");
        echo "\">Magasin </a></li>
                            <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\"> Dresseur & pet-sitter </a></li>
                            <li><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_a");
        echo "\"> Annonce</a></li>
                            <li><a href=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_e");
        echo "\">evenement</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    ";
        
        $__internal_c65a1e0b66892aea17e02282d1f27cd949a1bc4723dd3a06083861a7f275bd6a->leave($__internal_c65a1e0b66892aea17e02282d1f27cd949a1bc4723dd3a06083861a7f275bd6a_prof);

        
        $__internal_7edaf815961bfb21f93f1bf7607c90701cf2f9a8806111a581f3edec8127fe45->leave($__internal_7edaf815961bfb21f93f1bf7607c90701cf2f9a8806111a581f3edec8127fe45_prof);

    }

    // line 152
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_db3150547f8636d49d0c18f8b178f2ebf4f354fc184294a5169987513ce5bde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3150547f8636d49d0c18f8b178f2ebf4f354fc184294a5169987513ce5bde7->enter($__internal_db3150547f8636d49d0c18f8b178f2ebf4f354fc184294a5169987513ce5bde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_468d628b47e18399343601252a83edab555b393cabc4b60aca08bde54342bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468d628b47e18399343601252a83edab555b393cabc4b60aca08bde54342bae0->enter($__internal_468d628b47e18399343601252a83edab555b393cabc4b60aca08bde54342bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 153
        echo "        <div id=\"slideshow-sec\">
            <div id=\"carousel-div\" class=\"carousel slide\" data-ride=\"carousel\" >

                <div class=\"carousel-inner\">
                    <div class=\"item active\">

                        <img style=\"width: 1274px; height: 400px\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" > Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>

                    </div>
                    <div class=\"item\">
                        <img  src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Accessoires.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" >Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img style=\"width: 1274px; height: 400px\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/vet.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" >Pour le bonheur </h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>

                    </div>
                </div>
                <!--INDICATORS-->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-div\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-div\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-div\" data-slide-to=\"2\"></li>
                </ol>
                <!--PREVIUS-NEXT BUTTONS-->
                <a class=\"left carousel-control\" href=\"#carousel-div\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-div\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
        <!-- SLIDESHOW SECTION END-->
        <div class=\"below-slideshow\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-lastfm fa-4x\"></i>
                            <h4>Magasins</h4>
                            <p >
                                Ensemble d'animalerie en ligne spécialisée dans la vente d'aliments et accessoires pour animaux de compagnie : chien, chat, rongeur, etc. Nous avons regroupé pour vous les plus grandes marques pour votre animal de compagnie :
                                Hill's, Proplan, Virbac, et bien d'autres …
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-yelp fa-4x\"></i>
                            <h4>Veterinaire</h4>
                            <p >
                                Les propriétaires se préoccupent de plus en plus de la santé et le bien être de leurs animaux.
                                Pour cela, Zanimaux a mis en place un service qui permet à chacun de bénéficier gratuitement de conseils personnalisés de vétérinaires.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-ioxhost fa-4x\"></i>
                            <h4>Dresseur et refuge</h4>
                            <p >
                                Nous offrons également de nombreux conseils sur l'éducation grâce à nos dresseurs.
                                Si vous souhaitez adopter un animal, nous vous invitons à vous rendre sur le portail d'adoption Refuge qui centralise les annonces de plusieurs refuges. De nombreux animaux vous attendent...
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- BELOW SLIDESHOW SECTION END-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h1 class=\"tag-home\">

                        On s'amuse, on partage, on sort, on bricole et on s'engage sur Zanimaux.com !</h1>
                    <hr />
                </div>
            </div>
        </div>
        <!-- TAG HOME SECTION END-->

        <div class=\"container\">

            <div class=\"row pad-set\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"just-txt-div\">
                        <h2>Les 7 ordres de base de l'éducation canine :</h2>
                        <br />
                        <p>
                            Un chien qui n’est pas dressé et votre vie peut vite se transformer en cauchemar.
                            Je vous assure qu’un chien non<strong> dressé</strong> aux ordres de base est un chien qui n’est pas<strong> heureux</strong>.

                        </p>
                        <p>
                            Lui apprendre à rester couché, assis, à ne pas bouger ou à revenir quand on l’appelle est essentiel pour lui comme pour vous.
                            Chaque ordre doit s’apprendre selon une méthode bien précise.
                        </p>
                    </div>

                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"just-txt-div\">
                        <br />
                        <iframe class=\"vedio-style\" src=\"https://www.youtube.com/embed/NT0GFsHCIxM\"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!--VEDIO SECTION END-->
        <div class=\"parallax-like\">
            <div class=\"overlay\">


                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 300+</strong>
                                <p>
                                    Produits
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 100+</strong>
                                <p>
                                    Refuges <br>
                                    et Parcs
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 200+</strong>
                                <p>
                                    Veterinaires
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 50+</strong>
                                <p>
                                    Evenements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PARALLAX LIKE SECTION END-->
        <div class=\"just-sec\">


            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h1 class=\"head-line\">Liste d'evenements</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-exchange fa-3x\"></i>
                            <h4>Hand Crafted </h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-key fa-3x\"></i>
                            <h4>Easy To Customize</h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-legal fa-3x\"></i>
                            <h4>Light Weight</h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--JUST SECTION END-->
        <div class=\"container \" >
            <div class=\"row \">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h1 class=\"head-line\">Les meilleurs ventes </h1>
                    <br />
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr />
                    <div class=\"flexslider carousel\">
                        <ul class=\"slides\">
                            <li>
                                <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            <li>
                                <img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <br />
                </div>
            </div>
        </div>
        <!--CLIENT SECTION END-->
        <div class=\"container \" >
            <div class=\"row\">
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div\">
                    <div class=\"just-txt-div text-center\">
                        <h3><strong>-- Quel animal vous ressemble le plus? --</strong> </h3>
                        <p>
                            A treavers notre quiz, vous pouvez savoir quelle  <strong> race </strong> vous convient le plus.
                            D'habord, vous préférez:
                            <br><br>
                        </p>
                        <a class=\"btn btn-info btn-lg\" href=\"";
        // line 467
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_chat_internaute");
        echo "\">Chat</a>
                        &nbsp;&nbsp;
                        <a class=\"btn btn-success btn-lg\" href=\"";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_chien_Internaute");
        echo "\">Chien </a>
                    </div>

                </div>
            </div>
        </div>
    ";
        
        $__internal_468d628b47e18399343601252a83edab555b393cabc4b60aca08bde54342bae0->leave($__internal_468d628b47e18399343601252a83edab555b393cabc4b60aca08bde54342bae0_prof);

        
        $__internal_db3150547f8636d49d0c18f8b178f2ebf4f354fc184294a5169987513ce5bde7->leave($__internal_db3150547f8636d49d0c18f8b178f2ebf4f354fc184294a5169987513ce5bde7_prof);

    }

    // line 477
    public function block_piedPage($context, array $blocks = array())
    {
        $__internal_199c91b24a0d1dd4770aceac87cc907a0060b4e89219013839390bef2ce987c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199c91b24a0d1dd4770aceac87cc907a0060b4e89219013839390bef2ce987c3->enter($__internal_199c91b24a0d1dd4770aceac87cc907a0060b4e89219013839390bef2ce987c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piedPage"));

        $__internal_173abe88a4871df731f6881f671fe8590f2760458675bbdddd98e41a94821991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173abe88a4871df731f6881f671fe8590f2760458675bbdddd98e41a94821991->enter($__internal_173abe88a4871df731f6881f671fe8590f2760458675bbdddd98e41a94821991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piedPage"));

        // line 478
        echo "    <div class=\"footer-sec\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">


                    <h3> <strong>Site</strong> </h3>
                    <p style=\"padding-right:50px;\" >
                        Zanimaux est site permettant la communication avec plusieurs vétérinaires, dresseurs ainsi que la possibilités
                        de commander différents produits en ligne (Accessoires, aliments, ...)
                        Et enfin de déposer des annonces en plus de faire des demandes d'adoptions.
                    </p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div\">



                    <h3> <strong>Reseaux sociaux</strong> </h3>
                    <br>

                    <a href=\"#\" ><h4>FACEBOOK </h4></a>
                    <a href=\"#\" ><h4>TWITTER </h4></a>
                    <a href=\"#\" ><h4>LINKEDIN </h4></a>


                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <h3> <strong>Emplacement</strong> </h3>
                    Vous nous trouvez à:
                    <br />
                    <h4>Z.I. Chotrana II B.P. 160، Pôle Technologique El Ghazela، ,</h4>
                    <h4>Esprit Ghazela,</h4>
                    <h4>Code postale: 2088</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr />
                    <div style=\"text-align:right;padding:5px;\">
                        &copy;2018 Zanimaux.com | <a href=\"";
        // line 517
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche");
        echo "\" style=\"color:#fff;\" target=\"_blank\" >Réaliser par: Enigma</a>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--BOOTSTRAP SCRIPTS PLUGIN-->
        <script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <!--WOW SCRIPTS PLUGIN-->
        <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.js"), "html", null, true);
        echo "\"></script>
        <!--FLEXSLIDER SCRIPTS PLUGIN-->
        <script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <!--CUSTOM SCRIPTS -->
        <script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</div>
";
        
        $__internal_173abe88a4871df731f6881f671fe8590f2760458675bbdddd98e41a94821991->leave($__internal_173abe88a4871df731f6881f671fe8590f2760458675bbdddd98e41a94821991_prof);

        
        $__internal_199c91b24a0d1dd4770aceac87cc907a0060b4e89219013839390bef2ce987c3->leave($__internal_199c91b24a0d1dd4770aceac87cc907a0060b4e89219013839390bef2ce987c3_prof);

    }

    public function getTemplateName()
    {
        return "ZanimauxBundle:User:Layout2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  908 => 530,  903 => 528,  898 => 526,  893 => 524,  888 => 522,  880 => 517,  839 => 478,  830 => 477,  813 => 469,  808 => 467,  785 => 447,  779 => 444,  773 => 441,  767 => 438,  761 => 435,  756 => 433,  750 => 430,  744 => 427,  738 => 424,  732 => 421,  726 => 418,  720 => 415,  714 => 412,  708 => 409,  702 => 406,  696 => 403,  690 => 400,  684 => 397,  678 => 394,  672 => 391,  452 => 174,  442 => 167,  431 => 159,  423 => 153,  414 => 152,  394 => 139,  390 => 138,  386 => 137,  382 => 136,  378 => 135,  374 => 134,  370 => 133,  361 => 126,  352 => 125,  341 => 149,  339 => 125,  324 => 113,  320 => 111,  309 => 106,  302 => 102,  298 => 101,  294 => 100,  289 => 98,  284 => 95,  280 => 94,  275 => 92,  257 => 77,  242 => 65,  237 => 63,  231 => 62,  215 => 49,  199 => 38,  187 => 28,  178 => 27,  166 => 22,  162 => 21,  158 => 20,  153 => 18,  149 => 17,  144 => 15,  139 => 13,  134 => 11,  130 => 10,  125 => 8,  120 => 7,  111 => 6,  93 => 5,  83 => 24,  81 => 6,  77 => 5,  74 => 4,  65 => 3,  54 => 534,  52 => 477,  49 => 476,  47 => 152,  44 => 151,  42 => 27,  38 => 25,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
     {% block head %}
    <meta charset=\"utf-8\"/>
    <title>{% block title %}Acceuil {% endblock %}</title>
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        <link href=\"{{  asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
        <!-- FONT AWESOME STYLE  -->
        <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/boutton.css') }}\" rel=\"stylesheet\" />
        <!-- ANIMATE STYLE  -->
        <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\" />

        <link href=\"{{ asset('css/BarElFou9aniya.css') }}\" rel=\"stylesheet\" />
        <!-- FLEXSLIDER STYLE  -->
        <link href=\"{{ asset('css/flexslider.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('adminpage/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" />
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel=\"stylesheet\">
        <link href=\"{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')}}\" rel=\"stylesheet\" id=\"bootstrap-css\">
         <script src=\"{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}\"></script>
         <script src=\"{{ asset('//code.jquery.com/jquery-1.11.1.min.js') }}\"></script>
    {% endblock %}
    {% endblock %}
</head>
<body style=overflow-y:auto;>
{% block up %}

<div id=\"container\">

    <!------ Include the above in your HEAD tag ---------->

    <nav class=\"navbar navbar-default navbar-fixed-top\" style=\"height: 1px\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">

                <a class=\"navbar-brand\" href=\"{{ path('redirect') }}\"><img src=\"{{ asset('img/logo2.png') }}\" style=\"position: absolute;\ttop: 0;left: O;bottom: 0; \"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\" style=\"position: absolute;\ttop: 0;right: 10px;bottom: 0; \">
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



                <ul class=\"nav navbar-nav navbar-right\" style=\"position: absolute;\ttop: 0;right: 220px;bottom: 0; \">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"> <span class=\"glyphicon glyphicon-shopping-cart\"></span>{{ panier.Somme }}DT<span class=\"caret\"></span></a>
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
<!-- LOGO HEADER END-->
    {% block menu %}
        <section class=\"menu-section\" style=\"margin-top: 50px\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">

                        <div class=\"navbar-collapse collapse \">
                            <ul>
                            <li><a href=\"{{ path('redirect') }}\"class=\"menu-top-active\" >Accueil </a></li>
                            <li><a href=\"{{ path('afficherCabinetsFront') }}\"> Veterinaire </a></li>
                            <li><a  href=\"{{ path('afficher_refuge') }}\"> Refuge </a></li>
                            <li ><a href=\"{{ path('affiche_m') }}\">Magasin </a></li>
                            <li><a href=\"{{ path('listparc') }}\"> Dresseur & pet-sitter </a></li>
                            <li><a href=\"{{ path('consulter_a') }}\"> Annonce</a></li>
                            <li><a href=\"{{ path('read_e') }}\">evenement</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    {% endblock %}

    {% endblock %}
    <!-- MENU SECTION END-->
    {% block  contenu%}
        <div id=\"slideshow-sec\">
            <div id=\"carousel-div\" class=\"carousel slide\" data-ride=\"carousel\" >

                <div class=\"carousel-inner\">
                    <div class=\"item active\">

                        <img style=\"width: 1274px; height: 400px\" src=\"{{ asset('img/1.jpg') }}\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" > Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>

                    </div>
                    <div class=\"item\">
                        <img  src=\"{{ asset('img/Accessoires.jpg') }}\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" >Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img style=\"width: 1274px; height: 400px\" src=\"{{ asset('img/vet.jpg') }}\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" >Pour le bonheur </h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>

                    </div>
                </div>
                <!--INDICATORS-->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-div\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-div\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-div\" data-slide-to=\"2\"></li>
                </ol>
                <!--PREVIUS-NEXT BUTTONS-->
                <a class=\"left carousel-control\" href=\"#carousel-div\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-div\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
        <!-- SLIDESHOW SECTION END-->
        <div class=\"below-slideshow\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-lastfm fa-4x\"></i>
                            <h4>Magasins</h4>
                            <p >
                                Ensemble d'animalerie en ligne spécialisée dans la vente d'aliments et accessoires pour animaux de compagnie : chien, chat, rongeur, etc. Nous avons regroupé pour vous les plus grandes marques pour votre animal de compagnie :
                                Hill's, Proplan, Virbac, et bien d'autres …
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-yelp fa-4x\"></i>
                            <h4>Veterinaire</h4>
                            <p >
                                Les propriétaires se préoccupent de plus en plus de la santé et le bien être de leurs animaux.
                                Pour cela, Zanimaux a mis en place un service qui permet à chacun de bénéficier gratuitement de conseils personnalisés de vétérinaires.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"txt-block\">


                            <i class=\"fa fa-ioxhost fa-4x\"></i>
                            <h4>Dresseur et refuge</h4>
                            <p >
                                Nous offrons également de nombreux conseils sur l'éducation grâce à nos dresseurs.
                                Si vous souhaitez adopter un animal, nous vous invitons à vous rendre sur le portail d'adoption Refuge qui centralise les annonces de plusieurs refuges. De nombreux animaux vous attendent...
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- BELOW SLIDESHOW SECTION END-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h1 class=\"tag-home\">

                        On s'amuse, on partage, on sort, on bricole et on s'engage sur Zanimaux.com !</h1>
                    <hr />
                </div>
            </div>
        </div>
        <!-- TAG HOME SECTION END-->

        <div class=\"container\">

            <div class=\"row pad-set\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"just-txt-div\">
                        <h2>Les 7 ordres de base de l'éducation canine :</h2>
                        <br />
                        <p>
                            Un chien qui n’est pas dressé et votre vie peut vite se transformer en cauchemar.
                            Je vous assure qu’un chien non<strong> dressé</strong> aux ordres de base est un chien qui n’est pas<strong> heureux</strong>.

                        </p>
                        <p>
                            Lui apprendre à rester couché, assis, à ne pas bouger ou à revenir quand on l’appelle est essentiel pour lui comme pour vous.
                            Chaque ordre doit s’apprendre selon une méthode bien précise.
                        </p>
                    </div>

                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"just-txt-div\">
                        <br />
                        <iframe class=\"vedio-style\" src=\"https://www.youtube.com/embed/NT0GFsHCIxM\"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!--VEDIO SECTION END-->
        <div class=\"parallax-like\">
            <div class=\"overlay\">


                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 300+</strong>
                                <p>
                                    Produits
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 100+</strong>
                                <p>
                                    Refuges <br>
                                    et Parcs
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 200+</strong>
                                <p>
                                    Veterinaires
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                            <div class=\"just-txt-div\">
                                <strong> 50+</strong>
                                <p>
                                    Evenements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PARALLAX LIKE SECTION END-->
        <div class=\"just-sec\">


            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h1 class=\"head-line\">Liste d'evenements</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-exchange fa-3x\"></i>
                            <h4>Hand Crafted </h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-key fa-3x\"></i>
                            <h4>Easy To Customize</h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"just-txt-div\">


                            <i class=\"fa fa-legal fa-3x\"></i>
                            <h4>Light Weight</h4>
                            <p >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--JUST SECTION END-->
        <div class=\"container \" >
            <div class=\"row \">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h1 class=\"head-line\">Les meilleurs ventes </h1>
                    <br />
                </div>
            </div>
            <div class=\"row \">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr />
                    <div class=\"flexslider carousel\">
                        <ul class=\"slides\">
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                            <li>
                                <img src=\"{{ asset('img/client.jpg') }}\" />
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <br />
                </div>
            </div>
        </div>
        <!--CLIENT SECTION END-->
        <div class=\"container \" >
            <div class=\"row\">
                <div class=\"col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div\">
                    <div class=\"just-txt-div text-center\">
                        <h3><strong>-- Quel animal vous ressemble le plus? --</strong> </h3>
                        <p>
                            A treavers notre quiz, vous pouvez savoir quelle  <strong> race </strong> vous convient le plus.
                            D'habord, vous préférez:
                            <br><br>
                        </p>
                        <a class=\"btn btn-info btn-lg\" href=\"{{ path('questionnaire_chat_internaute') }}\">Chat</a>
                        &nbsp;&nbsp;
                        <a class=\"btn btn-success btn-lg\" href=\"{{ path('questionnaire_chien_Internaute') }}\">Chien </a>
                    </div>

                </div>
            </div>
        </div>
    {% endblock %}
    <!--SET-DIV SECTION END-->
    {% block piedPage %}
    <div class=\"footer-sec\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">


                    <h3> <strong>Site</strong> </h3>
                    <p style=\"padding-right:50px;\" >
                        Zanimaux est site permettant la communication avec plusieurs vétérinaires, dresseurs ainsi que la possibilités
                        de commander différents produits en ligne (Accessoires, aliments, ...)
                        Et enfin de déposer des annonces en plus de faire des demandes d'adoptions.
                    </p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div\">



                    <h3> <strong>Reseaux sociaux</strong> </h3>
                    <br>

                    <a href=\"#\" ><h4>FACEBOOK </h4></a>
                    <a href=\"#\" ><h4>TWITTER </h4></a>
                    <a href=\"#\" ><h4>LINKEDIN </h4></a>


                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <h3> <strong>Emplacement</strong> </h3>
                    Vous nous trouvez à:
                    <br />
                    <h4>Z.I. Chotrana II B.P. 160، Pôle Technologique El Ghazela، ,</h4>
                    <h4>Esprit Ghazela,</h4>
                    <h4>Code postale: 2088</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr />
                    <div style=\"text-align:right;padding:5px;\">
                        &copy;2018 Zanimaux.com | <a href=\"{{ path('affiche') }}\" style=\"color:#fff;\" target=\"_blank\" >Réaliser par: Enigma</a>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"{{ asset('js/jquery-1.11.1.min.js') }}\"></script>
        <!--BOOTSTRAP SCRIPTS PLUGIN-->
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
        <!--WOW SCRIPTS PLUGIN-->
        <script src=\"{{ asset('js/wow.js') }}\"></script>
        <!--FLEXSLIDER SCRIPTS PLUGIN-->
        <script src=\"{{ asset('js/jquery.flexslider.js') }}\"></script>
        <!--CUSTOM SCRIPTS -->
        <script src=\"{{ asset('js/custom.js') }}\"></script>
    </div>
</div>
{% endblock %}
</body>
</html>", "ZanimauxBundle:User:Layout2.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/src/ZanimauxBundle/Resources/views/User/Layout2.html.twig");
    }
}
