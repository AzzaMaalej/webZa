<?php

/* ZanimauxBundle::Layout.html.twig */
class __TwigTemplate_f3d7565ad5ef432b0a5bed59431bf73f20fc762f6734daf52b0d3369b8f7b841 extends Twig_Template
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
        $__internal_dac36ce4684622035eb7f43a437d10844f5242691962e6146a12d50c73b31e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac36ce4684622035eb7f43a437d10844f5242691962e6146a12d50c73b31e5c->enter($__internal_dac36ce4684622035eb7f43a437d10844f5242691962e6146a12d50c73b31e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZanimauxBundle::Layout.html.twig"));

        $__internal_742c97da0b351bafd87f70ebdabfd94984b2194f5771fc23b1f514ce33a4d115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742c97da0b351bafd87f70ebdabfd94984b2194f5771fc23b1f514ce33a4d115->enter($__internal_742c97da0b351bafd87f70ebdabfd94984b2194f5771fc23b1f514ce33a4d115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZanimauxBundle::Layout.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "</head>
<body>
";
        // line 29
        $this->displayBlock('up', $context, $blocks);
        // line 80
        echo "    <!-- MENU SECTION END-->
    ";
        // line 81
        $this->displayBlock('contenu', $context, $blocks);
        // line 405
        echo "    <!--SET-DIV SECTION END-->
    ";
        // line 406
        $this->displayBlock('piedPage', $context, $blocks);
        // line 463
        echo "</body>
</html>";
        
        $__internal_dac36ce4684622035eb7f43a437d10844f5242691962e6146a12d50c73b31e5c->leave($__internal_dac36ce4684622035eb7f43a437d10844f5242691962e6146a12d50c73b31e5c_prof);

        
        $__internal_742c97da0b351bafd87f70ebdabfd94984b2194f5771fc23b1f514ce33a4d115->leave($__internal_742c97da0b351bafd87f70ebdabfd94984b2194f5771fc23b1f514ce33a4d115_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72fff1b97448372461af8ec25e1e3de1eb26995d30d4e0da5b504715062c951f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fff1b97448372461af8ec25e1e3de1eb26995d30d4e0da5b504715062c951f->enter($__internal_72fff1b97448372461af8ec25e1e3de1eb26995d30d4e0da5b504715062c951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_687024ac98fe91e5a4923836ccf13da1ee6ad8b763a0f333c01148f03ded76b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687024ac98fe91e5a4923836ccf13da1ee6ad8b763a0f333c01148f03ded76b1->enter($__internal_687024ac98fe91e5a4923836ccf13da1ee6ad8b763a0f333c01148f03ded76b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "    ";
        
        $__internal_687024ac98fe91e5a4923836ccf13da1ee6ad8b763a0f333c01148f03ded76b1->leave($__internal_687024ac98fe91e5a4923836ccf13da1ee6ad8b763a0f333c01148f03ded76b1_prof);

        
        $__internal_72fff1b97448372461af8ec25e1e3de1eb26995d30d4e0da5b504715062c951f->leave($__internal_72fff1b97448372461af8ec25e1e3de1eb26995d30d4e0da5b504715062c951f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0825d9ec0dfac262b2ff2cce540e41d3d4634860386872ef2b2ca9460532c2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0825d9ec0dfac262b2ff2cce540e41d3d4634860386872ef2b2ca9460532c2fd->enter($__internal_0825d9ec0dfac262b2ff2cce540e41d3d4634860386872ef2b2ca9460532c2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfc62fb10bea72aaba9a314ee6c03f78fff3b2be8c61572f04068156b4f5520b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc62fb10bea72aaba9a314ee6c03f78fff3b2be8c61572f04068156b4f5520b->enter($__internal_bfc62fb10bea72aaba9a314ee6c03f78fff3b2be8c61572f04068156b4f5520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Layout principal ";
        
        $__internal_bfc62fb10bea72aaba9a314ee6c03f78fff3b2be8c61572f04068156b4f5520b->leave($__internal_bfc62fb10bea72aaba9a314ee6c03f78fff3b2be8c61572f04068156b4f5520b_prof);

        
        $__internal_0825d9ec0dfac262b2ff2cce540e41d3d4634860386872ef2b2ca9460532c2fd->leave($__internal_0825d9ec0dfac262b2ff2cce540e41d3d4634860386872ef2b2ca9460532c2fd_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_65cacbc480a6f04ed93ae9017cf541d1cb0fbbbf262979888d2014a9888c7af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cacbc480a6f04ed93ae9017cf541d1cb0fbbbf262979888d2014a9888c7af0->enter($__internal_65cacbc480a6f04ed93ae9017cf541d1cb0fbbbf262979888d2014a9888c7af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_92b15505abad4248fd86985f223be13e5528f4dade0000f0b9bdbcb19cc7ff6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b15505abad4248fd86985f223be13e5528f4dade0000f0b9bdbcb19cc7ff6b->enter($__internal_92b15505abad4248fd86985f223be13e5528f4dade0000f0b9bdbcb19cc7ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
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
            <!-- ANIMATE STYLE  -->
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- FLEXSLIDER STYLE  -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CUSTOM STYLE  -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/boutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


        <!-- GOOGLE FONTS  -->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

        ";
        
        $__internal_92b15505abad4248fd86985f223be13e5528f4dade0000f0b9bdbcb19cc7ff6b->leave($__internal_92b15505abad4248fd86985f223be13e5528f4dade0000f0b9bdbcb19cc7ff6b_prof);

        
        $__internal_65cacbc480a6f04ed93ae9017cf541d1cb0fbbbf262979888d2014a9888c7af0->leave($__internal_65cacbc480a6f04ed93ae9017cf541d1cb0fbbbf262979888d2014a9888c7af0_prof);

    }

    // line 29
    public function block_up($context, array $blocks = array())
    {
        $__internal_7dc7331e4ee13d74aba0c808ee772db6de201a234a44d55242ea339d533c923c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc7331e4ee13d74aba0c808ee772db6de201a234a44d55242ea339d533c923c->enter($__internal_7dc7331e4ee13d74aba0c808ee772db6de201a234a44d55242ea339d533c923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        $__internal_8aa9326a65c1a61992737e78fb17c1102658d87edc03f85af71290e63d5a5f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa9326a65c1a61992737e78fb17c1102658d87edc03f85af71290e63d5a5f75->enter($__internal_8aa9326a65c1a61992737e78fb17c1102658d87edc03f85af71290e63d5a5f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "up"));

        // line 30
        echo "<div id=\"container\">
    <div class=\"navbar navbar-inverse set-radius-zero\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche");
        echo "\">

                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.png"), "html", null, true);
        echo "\" />
                </a>

            </div>
            <div class=\"right-div\">
                <nav>
                    <a style=\"color: #444444\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\"  class=\"button\"> S'inscrire </a>
                    <a style=\"color: #444444\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"button\">S'authentifier</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    ";
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 78
        echo "
    ";
        
        $__internal_8aa9326a65c1a61992737e78fb17c1102658d87edc03f85af71290e63d5a5f75->leave($__internal_8aa9326a65c1a61992737e78fb17c1102658d87edc03f85af71290e63d5a5f75_prof);

        
        $__internal_7dc7331e4ee13d74aba0c808ee772db6de201a234a44d55242ea339d533c923c->leave($__internal_7dc7331e4ee13d74aba0c808ee772db6de201a234a44d55242ea339d533c923c_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89e4dbe04df2e029280895719e8f63dbfeb81d7dd229fda7e6800a8344d8833a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e4dbe04df2e029280895719e8f63dbfeb81d7dd229fda7e6800a8344d8833a->enter($__internal_89e4dbe04df2e029280895719e8f63dbfeb81d7dd229fda7e6800a8344d8833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f88baa6ed3da822c7aa181d18e753960f0f06d476b360bb3206c23c9dddbda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f88baa6ed3da822c7aa181d18e753960f0f06d476b360bb3206c23c9dddbda0->enter($__internal_1f88baa6ed3da822c7aa181d18e753960f0f06d476b360bb3206c23c9dddbda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 55
        echo "        <section class=\"menu-section\" >
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">

                        <div class=\"navbar-collapse collapse \">
                            <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche");
        echo "\">Accueil </a></li>
                                <li><a href=\"index.html\"> Veterinaire </a></li>
                                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_refuge_internaute");
        echo "\"> Refuge </a></li>
                                <li ><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_m");
        echo "\">Magasin </a></li>
                                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\"> Dresseur & pet-sitter </a></li>
                                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\"> Annonce</a></li>
                                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listparc");
        echo "\">evenement</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    ";
        
        $__internal_1f88baa6ed3da822c7aa181d18e753960f0f06d476b360bb3206c23c9dddbda0->leave($__internal_1f88baa6ed3da822c7aa181d18e753960f0f06d476b360bb3206c23c9dddbda0_prof);

        
        $__internal_89e4dbe04df2e029280895719e8f63dbfeb81d7dd229fda7e6800a8344d8833a->leave($__internal_89e4dbe04df2e029280895719e8f63dbfeb81d7dd229fda7e6800a8344d8833a_prof);

    }

    // line 81
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4a2d95649f1384b26d9b31ba428e5cc0ccf8f3a07da10fb671ff2c6b5ab44f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2d95649f1384b26d9b31ba428e5cc0ccf8f3a07da10fb671ff2c6b5ab44f7f->enter($__internal_4a2d95649f1384b26d9b31ba428e5cc0ccf8f3a07da10fb671ff2c6b5ab44f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_16bb5c9bb86b600eef394c567ea0f4a15a0c6892418d6536467c64062fafbfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bb5c9bb86b600eef394c567ea0f4a15a0c6892418d6536467c64062fafbfb0->enter($__internal_16bb5c9bb86b600eef394c567ea0f4a15a0c6892418d6536467c64062fafbfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 82
        echo "        <div id=\"slideshow-sec\">
            <div id=\"carousel-div\" class=\"carousel slide\" data-ride=\"carousel\" >

                <div class=\"carousel-inner\">
                    <div class=\"item active\">

                        <img style=\"width: 1274px; height: 400px\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" > Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>

                    </div>
                    <div class=\"item\">
                        <img  src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Accessoires.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <div class=\"carousel-caption\">
                            <h1 class=\"wow slideInLeft\" data-wow-duration=\"2s\" >Pour le bonheur</h1>
                            <h2 class=\"wow slideInRight\" data-wow-duration=\"2s\" >des animaux</h2>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img style=\"width: 1274px; height: 400px\" src=\"";
        // line 103
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
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            <li>
                                <img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/client.jpg"), "html", null, true);
        echo "\" />
                            </li>
                            <li>
                                <img src=\"";
        // line 376
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
        // line 396
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_chat_internaute");
        echo "\">Chat</a>
                        &nbsp;&nbsp;
                        <a class=\"btn btn-success btn-lg\" href=\"";
        // line 398
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_chien_Internaute");
        echo "\">Chien </a>
                    </div>

                </div>
            </div>
        </div>
    ";
        
        $__internal_16bb5c9bb86b600eef394c567ea0f4a15a0c6892418d6536467c64062fafbfb0->leave($__internal_16bb5c9bb86b600eef394c567ea0f4a15a0c6892418d6536467c64062fafbfb0_prof);

        
        $__internal_4a2d95649f1384b26d9b31ba428e5cc0ccf8f3a07da10fb671ff2c6b5ab44f7f->leave($__internal_4a2d95649f1384b26d9b31ba428e5cc0ccf8f3a07da10fb671ff2c6b5ab44f7f_prof);

    }

    // line 406
    public function block_piedPage($context, array $blocks = array())
    {
        $__internal_4b98b742b3ab922716a9e8acd01a3e8ebd715d932c1f177f582a3e0fd882010e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b98b742b3ab922716a9e8acd01a3e8ebd715d932c1f177f582a3e0fd882010e->enter($__internal_4b98b742b3ab922716a9e8acd01a3e8ebd715d932c1f177f582a3e0fd882010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piedPage"));

        $__internal_662706aaee871b757b0fcd52e9f093cd7ed0fbf995e7d2e8801abad3c8cebb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662706aaee871b757b0fcd52e9f093cd7ed0fbf995e7d2e8801abad3c8cebb14->enter($__internal_662706aaee871b757b0fcd52e9f093cd7ed0fbf995e7d2e8801abad3c8cebb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piedPage"));

        // line 407
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
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche");
        echo "\" style=\"color:#fff;\" target=\"_blank\" >Réaliser par: Enigma</a>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--BOOTSTRAP SCRIPTS PLUGIN-->
        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <!--WOW SCRIPTS PLUGIN-->
        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/wow.js"), "html", null, true);
        echo "\"></script>
        <!--FLEXSLIDER SCRIPTS PLUGIN-->
        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
        <!--CUSTOM SCRIPTS -->
        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    </div>
</div>
";
        
        $__internal_662706aaee871b757b0fcd52e9f093cd7ed0fbf995e7d2e8801abad3c8cebb14->leave($__internal_662706aaee871b757b0fcd52e9f093cd7ed0fbf995e7d2e8801abad3c8cebb14_prof);

        
        $__internal_4b98b742b3ab922716a9e8acd01a3e8ebd715d932c1f177f582a3e0fd882010e->leave($__internal_4b98b742b3ab922716a9e8acd01a3e8ebd715d932c1f177f582a3e0fd882010e_prof);

    }

    public function getTemplateName()
    {
        return "ZanimauxBundle::Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  781 => 459,  776 => 457,  771 => 455,  766 => 453,  761 => 451,  753 => 446,  712 => 407,  703 => 406,  686 => 398,  681 => 396,  658 => 376,  652 => 373,  646 => 370,  640 => 367,  634 => 364,  629 => 362,  623 => 359,  617 => 356,  611 => 353,  605 => 350,  599 => 347,  593 => 344,  587 => 341,  581 => 338,  575 => 335,  569 => 332,  563 => 329,  557 => 326,  551 => 323,  545 => 320,  325 => 103,  315 => 96,  304 => 88,  296 => 82,  287 => 81,  267 => 68,  263 => 67,  259 => 66,  255 => 65,  251 => 64,  246 => 62,  237 => 55,  228 => 54,  217 => 78,  215 => 54,  206 => 48,  202 => 47,  193 => 41,  188 => 39,  177 => 30,  168 => 29,  149 => 17,  145 => 16,  140 => 14,  135 => 12,  130 => 10,  125 => 8,  120 => 7,  111 => 6,  93 => 5,  83 => 26,  81 => 6,  77 => 5,  74 => 4,  65 => 3,  54 => 463,  52 => 406,  49 => 405,  47 => 81,  44 => 80,  42 => 29,  38 => 27,  36 => 3,  32 => 1,);
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
        <title>{% block title %}Layout principal {% endblock %}</title>
        {% block stylesheet %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
            <link href=\"{{  asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
            <!-- FONT AWESOME STYLE  -->
            <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\" />
            <!-- ANIMATE STYLE  -->
            <link href=\"{{ asset('css/animate.css') }}\" rel=\"stylesheet\" />
            <!-- FLEXSLIDER STYLE  -->
            <link href=\"{{ asset('css/flexslider.css') }}\" rel=\"stylesheet\" />
            <!-- CUSTOM STYLE  -->
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/boutton.css') }}\" rel=\"stylesheet\" />


        <!-- GOOGLE FONTS  -->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

        {% endblock %}
    {% endblock %}
</head>
<body>
{% block up %}
<div id=\"container\">
    <div class=\"navbar navbar-inverse set-radius-zero\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('affiche') }}\">

                    <img src=\"{{ asset('img/logo2.png') }}\" />
                </a>

            </div>
            <div class=\"right-div\">
                <nav>
                    <a style=\"color: #444444\" href=\"{{ path('inscription') }}\"  class=\"button\"> S'inscrire </a>
                    <a style=\"color: #444444\" href=\"{{ path('login') }}\" class=\"button\">S'authentifier</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    {% block menu %}
        <section class=\"menu-section\" >
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col-md-12\">

                        <div class=\"navbar-collapse collapse \">
                            <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"{{ path('affiche') }}\">Accueil </a></li>
                                <li><a href=\"index.html\"> Veterinaire </a></li>
                                <li><a href=\"{{ path('afficher_refuge_internaute') }}\"> Refuge </a></li>
                                <li ><a href=\"{{ path('affiche_m') }}\">Magasin </a></li>
                                <li><a href=\"{{ path('listparc') }}\"> Dresseur & pet-sitter </a></li>
                                <li><a href=\"{{ path('listparc') }}\"> Annonce</a></li>
                                <li><a href=\"{{ path('listparc') }}\">evenement</a></li>
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
</html>", "ZanimauxBundle::Layout.html.twig", "/Applications/MAMP/htdocs/ZanimauxFinal 2/src/ZanimauxBundle/Resources/views/Layout.html.twig");
    }
}
