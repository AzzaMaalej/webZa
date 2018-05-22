<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/event')) {
            if (0 === strpos($pathinfo, '/event/a')) {
                if (0 === strpos($pathinfo, '/event/add')) {
                    // add_e
                    if ('/event/add' === $pathinfo) {
                        return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::addAction',  '_route' => 'add_e',);
                    }

                    // addAdmin
                    if ('/event/addAdmin' === $pathinfo) {
                        return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::addAdminAction',  '_route' => 'addAdmin',);
                    }

                    // add_participation
                    if (0 === strpos($pathinfo, '/event/addParticipation') && preg_match('#^/event/addParticipation/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_participation')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\ParticipationController::addParticipationAction',));
                    }

                    // addFavoris
                    if (0 === strpos($pathinfo, '/event/addFavoris') && preg_match('#^/event/addFavoris/(?P<idA>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'addFavoris')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\FavorisController::addFavorisAction',));
                    }

                }

                // ajouter_a
                if ('/event/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::ajouterAction',  '_route' => 'ajouter_a',);
                }

                // ajouterAnnonceAdmin
                if ('/event/ajouAnn' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::addAnnonceAdminAction',  '_route' => 'ajouterAnnonceAdmin',);
                }

                // afficheAdmin
                if ('/event/afficheAdmin' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::afficherEventAdminAction',  '_route' => 'afficheAdmin',);
                }

                // afficherAnnonceAdmin
                if ('/event/affAnn' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::afficherAnnoncetAdminAction',  '_route' => 'afficherAnnonceAdmin',);
                }

                // annuler_participation
                if (0 === strpos($pathinfo, '/event/annulerParticipation') && preg_match('#^/event/annulerParticipation/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuler_participation')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\ParticipationController::annulerParticipationAction',));
                }

                // annulerFavoris
                if (0 === strpos($pathinfo, '/event/annulerFavoris') && preg_match('#^/event/annulerFavoris/(?P<idA>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annulerFavoris')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\FavorisController::annulerFavorisAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/event/read')) {
                // read_e
                if ('/event/read' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::readAction',  '_route' => 'read_e',);
                }

                // readFavoris
                if ('/event/readFav' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\FavorisController::readFavAction',  '_route' => 'readFavoris',);
                }

            }

            elseif (0 === strpos($pathinfo, '/event/rechercher')) {
                // rechercher_e
                if ('/event/rechercher' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::rechercherAction',  '_route' => 'rechercher_e',);
                }

                // rechercher_a
                if ('/event/rechercherAnn' === $pathinfo) {
                    return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::rechercherAnnAction',  '_route' => 'rechercher_a',);
                }

            }

            // update_e
            if (0 === strpos($pathinfo, '/event/update') && preg_match('#^/event/update/(?P<idEvt>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_e')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::updateAction',));
            }

            // delete_e
            if (0 === strpos($pathinfo, '/event/delete_e') && preg_match('#^/event/delete_e/(?P<idEvt>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_e')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::deleteAction',));
            }

            // detailEvent
            if (0 === strpos($pathinfo, '/event/detail') && preg_match('#^/event/detail/(?P<idEvt>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailEvent')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::detailsAction',));
            }

            if (0 === strpos($pathinfo, '/event/modif')) {
                // modifier_a
                if (0 === strpos($pathinfo, '/event/modifier') && preg_match('#^/event/modifier/(?P<idAnnonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_a')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::ModifierAction',));
                }

                // modifierAdmin
                if (0 === strpos($pathinfo, '/event/modifAdmin') && preg_match('#^/event/modifAdmin/(?P<idEvt>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierAdmin')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::modifierAdminAction',));
                }

                // modifierAnnonceAdmin
                if (0 === strpos($pathinfo, '/event/modifAnn') && preg_match('#^/event/modifAnn/(?P<idAnnonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierAnnonceAdmin')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::modifierAnnonceAdminAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/event/suppr')) {
                // supprimer_a
                if (0 === strpos($pathinfo, '/event/supprimer') && preg_match('#^/event/supprimer/(?P<idAnnonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_a')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::SupprimerAction',));
                }

                // supprimerAdmin
                if (0 === strpos($pathinfo, '/event/supprAdmin') && preg_match('#^/event/supprAdmin/(?P<idEvt>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerAdmin')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\EvenementController::supprimerEventAdminAction',));
                }

                // supprimerAnnonceAdmin
                if (0 === strpos($pathinfo, '/event/supprAnn') && preg_match('#^/event/supprAnn/(?P<idAnnonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerAnnonceAdmin')), array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::supprimerAnnonceAdminAction',));
                }

            }

            // consulter_a
            if ('/event/consulter' === $pathinfo) {
                return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\AnnonceController::ConsulterAction',  '_route' => 'consulter_a',);
            }

        }

        elseif (0 === strpos($pathinfo, '/veterinaire')) {
            // veterinaire_homepage
            if ('/veterinaire' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'veterinaire_homepage');
                }

                return array (  '_controller' => 'VeterinaireBundle\\Controller\\DefaultController::indexAction',  '_route' => 'veterinaire_homepage',);
            }

            if (0 === strpos($pathinfo, '/veterinaire/update')) {
                // updateVet
                if ('/veterinaire/updateVet' === $pathinfo) {
                    return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::updateVetAction',  '_route' => 'updateVet',);
                }

                // updateCabinet
                if (0 === strpos($pathinfo, '/veterinaire/updateCabinet') && preg_match('#^/veterinaire/updateCabinet/(?P<immatriculecabinet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateCabinet')), array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::updateCabinetAction',));
                }

                // updateArticle
                if (0 === strpos($pathinfo, '/veterinaire/updateArticle') && preg_match('#^/veterinaire/updateArticle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateArticle')), array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::updateArticleAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/veterinaire/delete')) {
                // deleteCabinet
                if (0 === strpos($pathinfo, '/veterinaire/deleteCabinet') && preg_match('#^/veterinaire/deleteCabinet/(?P<immatriculecabinet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteCabinet')), array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::deleteCabinetAction',));
                }

                // deleteArticle
                if (0 === strpos($pathinfo, '/veterinaire/deleteArticle') && preg_match('#^/veterinaire/deleteArticle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteArticle')), array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::deleteArticleAction',));
                }

                // deleteDispo
                if (0 === strpos($pathinfo, '/veterinaire/deleteDispo') && preg_match('#^/veterinaire/deleteDispo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteDispo')), array (  '_controller' => 'VeterinaireBundle\\Controller\\CalendrierController::deleteDispoAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/veterinaire/a')) {
                // addCabinet
                if ('/veterinaire/addCabinet' === $pathinfo) {
                    return array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::addCabinetAction',  '_route' => 'addCabinet',);
                }

                // addArticle
                if ('/veterinaire/addArticle' === $pathinfo) {
                    return array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::addArticleAction',  '_route' => 'addArticle',);
                }

                if (0 === strpos($pathinfo, '/veterinaire/affiche')) {
                    if (0 === strpos($pathinfo, '/veterinaire/afficher')) {
                        // afficherCabinetsFront
                        if ('/veterinaire/afficherCabinetsFront' === $pathinfo) {
                            return array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::afficherCabinetsFrontAction',  '_route' => 'afficherCabinetsFront',);
                        }

                        // afficherArticlesFront
                        if ('/veterinaire/afficherArticlesFront' === $pathinfo) {
                            return array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::afficherArticlesFrontAction',  '_route' => 'afficherArticlesFront',);
                        }

                        // afficherArticlesBack
                        if ('/veterinaire/afficherArticlesBack' === $pathinfo) {
                            return array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::afficherArticlesBackAction',  '_route' => 'afficherArticlesBack',);
                        }

                    }

                    // afficheCabinetBack
                    if ('/veterinaire/afficheCabinetBack' === $pathinfo) {
                        return array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::afficheCabinetBackAction',  '_route' => 'afficheCabinetBack',);
                    }

                    // afficheDispoDash
                    if ('/veterinaire/afficheDispoDash' === $pathinfo) {
                        return array (  '_controller' => 'VeterinaireBundle\\Controller\\CalendrierController::afficheDispoDashAction',  '_route' => 'afficheDispoDash',);
                    }

                }

                // ajouterDispo
                if ('/veterinaire/ajouterDispo' === $pathinfo) {
                    return array (  '_controller' => 'VeterinaireBundle\\Controller\\CalendrierController::ajouterDispoAction',  '_route' => 'ajouterDispo',);
                }

            }

            // InformationsCabinet
            if (0 === strpos($pathinfo, '/veterinaire/InformationsCabinet') && preg_match('#^/veterinaire/InformationsCabinet/(?P<immatriculecabinet>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'InformationsCabinet')), array (  '_controller' => 'VeterinaireBundle\\Controller\\CabinetController::InformationsCabinetAction',));
            }

            // InformationsArticle
            if (0 === strpos($pathinfo, '/veterinaire/InformationsArticle') && preg_match('#^/veterinaire/InformationsArticle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'InformationsArticle')), array (  '_controller' => 'VeterinaireBundle\\Controller\\ArticleController::InformationsArticleAction',));
            }

            // notification
            if (0 === strpos($pathinfo, '/veterinaire/notif') && preg_match('#^/veterinaire/notif/(?P<notifiable>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification')), array (  '_controller' => 'VeterinaireBundle\\Controller\\DefaultController::ListAction',));
            }

            // indexHWCalculator
            if ('/veterinaire/index' === $pathinfo) {
                return array (  '_controller' => 'VeterinaireBundle\\Controller\\HWCalculatorController::indexAction',  '_route' => 'indexHWCalculator',);
            }

            // HWResult
            if ('/veterinaire/HWResult' === $pathinfo) {
                return array (  '_controller' => 'VeterinaireBundle\\Controller\\HWCalculatorController::HWResultAction',  '_route' => 'HWResult',);
            }

        }

        elseif (0 === strpos($pathinfo, '/magasin')) {
            // magasin_homepage
            if ('/magasin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'magasin_homepage');
                }

                return array (  '_controller' => 'MagasinBundle\\Controller\\DefaultController::indexAction',  '_route' => 'magasin_homepage',);
            }

            if (0 === strpos($pathinfo, '/magasin/affiche')) {
                if (0 === strpos($pathinfo, '/magasin/afficheM')) {
                    // afficheMagasinProp
                    if ('/magasin/afficheMagasinProp' === $pathinfo) {
                        return array (  '_controller' => 'MagasinBundle\\Controller\\MagasinController::afficheMagasinPropAction',  '_route' => 'afficheMagasinProp',);
                    }

                    // affiche_m
                    if ('/magasin/afficheM' === $pathinfo) {
                        return array (  '_controller' => 'MagasinBundle\\Controller\\MagasinController::afficheMagasinAction',  '_route' => 'affiche_m',);
                    }

                }

                // afficheProduit_m
                if (0 === strpos($pathinfo, '/magasin/affichePM') && preg_match('#^/magasin/affichePM/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficheProduit_m')), array (  '_controller' => 'MagasinBundle\\Controller\\ProduitController::afficheProduitMAction',));
                }

                // affichePanier
                if ('/magasin/affichePanier' === $pathinfo) {
                    return array (  '_controller' => 'MagasinBundle\\Controller\\PanierController::affichePanierAction',  '_route' => 'affichePanier',);
                }

                // afficheCommande
                if ('/magasin/afficheCommande' === $pathinfo) {
                    return array (  '_controller' => 'MagasinBundle\\Controller\\CommandeController::afficheCommandeAction',  '_route' => 'afficheCommande',);
                }

            }

            elseif (0 === strpos($pathinfo, '/magasin/ajout')) {
                // ajout_m
                if ('/magasin/ajoutM' === $pathinfo) {
                    return array (  '_controller' => 'MagasinBundle\\Controller\\MagasinController::ajoutMagasinAction',  '_route' => 'ajout_m',);
                }

                // ajoutProduit_m
                if ('/magasin/ajoutPM' === $pathinfo) {
                    return array (  '_controller' => 'MagasinBundle\\Controller\\ProduitController::ajoutProduitMAction',  '_route' => 'ajoutProduit_m',);
                }

                // ajoutProduit_p
                if (0 === strpos($pathinfo, '/magasin/ajoutProdPanier') && preg_match('#^/magasin/ajoutProdPanier/(?P<idProduit>[^/]++)/(?P<prix>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutProduit_p')), array (  '_controller' => 'MagasinBundle\\Controller\\PanierController::ajouterProduitPanierAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/magasin/supp')) {
                // suppMagasinProp
                if (0 === strpos($pathinfo, '/magasin/suppMagasinProp') && preg_match('#^/magasin/suppMagasinProp/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppMagasinProp')), array (  '_controller' => 'MagasinBundle\\Controller\\MagasinController::suppMagasinPropAction',));
                }

                // suppProduit_m
                if (0 === strpos($pathinfo, '/magasin/suppPM') && preg_match('#^/magasin/suppPM/(?P<idProduit>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppProduit_m')), array (  '_controller' => 'MagasinBundle\\Controller\\ProduitController::suppProduitMAction',));
                }

                // suppProduit_p
                if (0 === strpos($pathinfo, '/magasin/suppProdPanier') && preg_match('#^/magasin/suppProdPanier/(?P<idContenuPanier>[^/]++)/(?P<prix>[^/]++)/(?P<quantite>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppProduit_p')), array (  '_controller' => 'MagasinBundle\\Controller\\PanierController::supprimerProduitPanierAction',));
                }

                // suppCommande
                if ('/magasin/suppCommande' === $pathinfo) {
                    return array (  '_controller' => 'MagasinBundle\\Controller\\CommandeController::suppCommandeAction',  '_route' => 'suppCommande',);
                }

            }

            elseif (0 === strpos($pathinfo, '/magasin/modif')) {
                // modifMagasinProp
                if (0 === strpos($pathinfo, '/magasin/modifMagasinProp') && preg_match('#^/magasin/modifMagasinProp/(?P<idMagasin>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifMagasinProp')), array (  '_controller' => 'MagasinBundle\\Controller\\MagasinController::modifMagasinPropAction',));
                }

                // modifProduit_m
                if (0 === strpos($pathinfo, '/magasin/modifPM') && preg_match('#^/magasin/modifPM/(?P<idProduit>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifProduit_m')), array (  '_controller' => 'MagasinBundle\\Controller\\ProduitController::modifProduitMAction',));
                }

                if (0 === strpos($pathinfo, '/magasin/modifPanier')) {
                    // ModifPanier
                    if ('/magasin/modifPanier' === $pathinfo) {
                        return array (  '_controller' => 'MagasinBundle\\Controller\\PanierController::modifPanierAction',  '_route' => 'ModifPanier',);
                    }

                    // modifPanier
                    if (preg_match('#^/magasin/modifPanier/(?P<idContenuPanier>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifPanier')), array (  '_controller' => 'MagasinBundle\\Controller\\PanierController::modifPanierAction',));
                    }

                }

            }

            // affichePrduit_mDash
            if ('/magasin/gerePM' === $pathinfo) {
                return array (  '_controller' => 'MagasinBundle\\Controller\\ProduitController::afficheProduitMDashAction',  '_route' => 'affichePrduit_mDash',);
            }

            // passeCommande
            if ('/magasin/passeCommande' === $pathinfo) {
                return array (  '_controller' => 'MagasinBundle\\Controller\\CommandeController::passeCommandeAction',  '_route' => 'passeCommande',);
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/petsitter')) {
                // pet_sitter_dresseur_homepage
                if ('/petsitter' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'pet_sitter_dresseur_homepage');
                    }

                    return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pet_sitter_dresseur_homepage',);
                }

                if (0 === strpos($pathinfo, '/petsitter/re')) {
                    // redirectPetSitter
                    if ('/petsitter/redirect3' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\PetSitterController::redirectAction',  '_route' => 'redirectPetSitter',);
                    }

                    // redirectDresseur
                    if ('/petsitter/redirect2' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::redirectAction',  '_route' => 'redirectDresseur',);
                    }

                    // recherche_Parc_DQL
                    if ('/petsitter/rechercheDQLParc' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::rechercheAction',  '_route' => 'recherche_Parc_DQL',);
                    }

                    // recherche_Promenade_DQL
                    if ('/petsitter/rechercheDQLPromenade' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\PetSitterController::rechercheAction',  '_route' => 'recherche_Promenade_DQL',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/petsitter/creerp')) {
                    // creerpromenade
                    if ('/petsitter/creerp' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\PetSitterController::creePromenadeAction',  '_route' => 'creerpromenade',);
                    }

                    // creerparc
                    if ('/petsitter/creerparc' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::creeParcAction',  '_route' => 'creerparc',);
                    }

                }

                // consulter
                if (0 === strpos($pathinfo, '/petsitter/consulparc') && preg_match('#^/petsitter/consulparc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::consulterParcAction',));
                }

                // deletepromenade
                if (0 === strpos($pathinfo, '/petsitter/deletepromenade') && preg_match('#^/petsitter/deletepromenade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletepromenade')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\PetSitterController::deletePromenadeAction',));
                }

                // deleteparc
                if (0 === strpos($pathinfo, '/petsitter/deleteparc') && preg_match('#^/petsitter/deleteparc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteparc')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::deleteParcAction',));
                }

                // editpromenade
                if (0 === strpos($pathinfo, '/petsitter/editpromenade') && preg_match('#^/petsitter/editpromenade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editpromenade')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\PetSitterController::updatePromenadeAction',));
                }

                // editparc
                if (0 === strpos($pathinfo, '/petsitter/editparc') && preg_match('#^/petsitter/editparc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editparc')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::updateParcAction',));
                }

                // rating
                if (0 === strpos($pathinfo, '/petsitter/avis') && preg_match('#^/petsitter/avis/(?P<val>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::ratingAction',));
                }

                // listparc
                if ('/petsitter/listparc' === $pathinfo) {
                    return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::afficheParcAction',  '_route' => 'listparc',);
                }

                if (0 === strpos($pathinfo, '/petsitter/p')) {
                    // profileDresseur
                    if ('/petsitter/profile2' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::showAction',  '_route' => 'profileDresseur',);
                    }

                    // editDresseur
                    if (0 === strpos($pathinfo, '/petsitter/profile3') && preg_match('#^/petsitter/profile3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'editDresseur')), array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::updateAction',));
                    }

                    // showparcnonc
                    if ('/petsitter/parcdec' === $pathinfo) {
                        return array (  '_controller' => 'PetSitterDresseurBundle\\Controller\\DresseurController::afficheParcnncAction',  '_route' => 'showparcnonc',);
                    }

                }

            }

            // petSitterpage
            if ('/petSitter' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxBundle:PetSitter:affichep',  '_route' => 'petSitterpage',);
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // profile
                if ('/profile' === $pathinfo) {
                    return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::showAction',  '_route' => 'profile',);
                }

                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/refuge')) {
                // refuge_homepage
                if ('/refuge' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'refuge_homepage');
                    }

                    return array (  '_controller' => 'RefugeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'refuge_homepage',);
                }

                if (0 === strpos($pathinfo, '/refuge/refuge')) {
                    // proprietaire_refuge
                    if ('/refuge/refuge' === $pathinfo) {
                        return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::admingererAction',  '_route' => 'proprietaire_refuge',);
                    }

                    // refuge_plus_proche
                    if ('/refuge/refugePlusProche' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::recherchePlusProcheAction',  '_route' => 'refuge_plus_proche',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/refuge/questionnaireChat')) {
                    // questionnaire_chat
                    if ('/refuge/questionnaireChat' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::questionnaireChatAction',  '_route' => 'questionnaire_chat',);
                    }

                    // questionnaire_chat_internaute
                    if ('/refuge/questionnaireChatInternaute' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::questionnaireChatInternauteAction',  '_route' => 'questionnaire_chat_internaute',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/refuge/questionnaireChient')) {
                    // questionnaire_chien
                    if ('/refuge/questionnaireChient' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::questionnaireChienAction',  '_route' => 'questionnaire_chien',);
                    }

                    // questionnaire_chien_Internaute
                    if ('/refuge/questionnaireChientInternaute' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::questionnaireChienInternauteAction',  '_route' => 'questionnaire_chien_Internaute',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/refuge/A')) {
                    if (0 === strpos($pathinfo, '/refuge/AfficherRefuge')) {
                        // afficher_refuge_internaute
                        if ('/refuge/AfficherRefugeInternaute' === $pathinfo) {
                            return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::AfficherRefugeInternauteAction',  '_route' => 'afficher_refuge_internaute',);
                        }

                        // afficher_refuge
                        if ('/refuge/AfficherRefuge' === $pathinfo) {
                            return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::AfficherRefugeAction',  '_route' => 'afficher_refuge',);
                        }

                        // afficher_refuge_dashboard
                        if ('/refuge/AfficherRefugeDashboard' === $trimmedPathinfo) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($rawPathinfo.'/', 'afficher_refuge_dashboard');
                            }

                            return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::AfficherRefugeDashboardAction',  '_route' => 'afficher_refuge_dashboard',);
                        }

                    }

                    // afficher_animaux
                    if ('/refuge/AfficherAnimaux' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::AfficherAnimauxAction',  '_route' => 'afficher_animaux',);
                    }

                    // ajouter_refuge
                    if ('/refuge/AjouterRefuge' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::AjouterRefugeAction',  '_route' => 'ajouter_refuge',);
                    }

                    // ajouter_animal
                    if ('/refuge/AjouterAnimal' === $pathinfo) {
                        return array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::AjouterAnimalAction',  '_route' => 'ajouter_animal',);
                    }

                }

                // delete_animaux
                if (0 === strpos($pathinfo, '/refuge/deletAnimaux') && preg_match('#^/refuge/deletAnimaux/(?P<idAnimal>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_animaux')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::deleteAnimalAction',));
                }

                // delete_refuge
                if (0 === strpos($pathinfo, '/refuge/deleteRefuge') && preg_match('#^/refuge/deleteRefuge/(?P<immatriculation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_refuge')), array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::deleteRefugeAction',));
                }

                // supprimer_commentaire
                if (0 === strpos($pathinfo, '/refuge/supprimerCommentaire') && preg_match('#^/refuge/supprimerCommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_commentaire')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::supprimerCommentaireAction',));
                }

                // update_animaux
                if (0 === strpos($pathinfo, '/refuge/updateAnimaux') && preg_match('#^/refuge/updateAnimaux/(?P<idAnimal>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_animaux')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::updateAnimalAction',));
                }

                if (0 === strpos($pathinfo, '/refuge/a')) {
                    // affiche_animaux_Internaute
                    if (0 === strpos($pathinfo, '/refuge/afficheAnimauxInternaute') && preg_match('#^/refuge/afficheAnimauxInternaute/(?P<immatriculation>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiche_animaux_Internaute')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::afficheAnimalPourInternauteAction',));
                    }

                    // affiche_animaux_client
                    if (0 === strpos($pathinfo, '/refuge/afficheAnimauxClient') && preg_match('#^/refuge/afficheAnimauxClient/(?P<immatriculation>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'affiche_animaux_client')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::afficheAnimalPourClientAction',));
                    }

                    // adress_map
                    if (0 === strpos($pathinfo, '/refuge/adressMap') && preg_match('#^/refuge/adressMap/(?P<immatriculation>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adress_map')), array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::indexAction',));
                    }

                }

                // modifier_refuge
                if (0 === strpos($pathinfo, '/refuge/modifierRefuge') && preg_match('#^/refuge/modifierRefuge/(?P<immatriculation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_refuge')), array (  '_controller' => 'RefugeBundle\\Controller\\RefugeController::modifierRefugeAction',));
                }

                // modifier_commentaire_client
                if (0 === strpos($pathinfo, '/refuge/ModifierCommentaire') && preg_match('#^/refuge/ModifierCommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_commentaire_client')), array (  '_controller' => 'RefugeBundle\\Controller\\AnimauxController::modifierCommentaireAction',));
                }

            }

            // redirect
            if ('/redirect' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::redirectAction',  '_route' => 'redirect',);
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // zanimaux_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'zanimaux_homepage');
            }

            return array (  '_controller' => 'ZanimauxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'zanimaux_homepage',);
        }

        // affiche
        if ('/affiche' === $pathinfo) {
            return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::afficheAction',  '_route' => 'affiche',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // zanimaux_mobile_homepage
            if ('/api' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'zanimaux_mobile_homepage');
                }

                return array (  '_controller' => 'ZanimauxMobileBundle\\Controller\\DefaultController::indexAction',  '_route' => 'zanimaux_mobile_homepage',);
            }

            // affiche_magasin
            if ('/api/afficheMagasin' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxMobileBundle\\Controller\\MagasinController::afficheMagasinAction',  '_route' => 'affiche_magasin',);
            }

        }

        // inscription
        if ('/inscrit' === $pathinfo) {
            return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::inscritAction',  '_route' => 'inscription',);
        }

        // deconnexion
        if ('/Template2' === $pathinfo) {
            return array('_route' => 'deconnexion');
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ('/log' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // loginadmin
        if ('/dashboard' === $pathinfo) {
            return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::adminAfficheAction',  '_route' => 'loginadmin',);
        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::editAction',));
        }

        if (0 === strpos($pathinfo, '/gerer')) {
            // gereruser
            if ('/gerer' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::adminuserAction',  '_route' => 'gereruser',);
            }

            // edituser
            if (0 === strpos($pathinfo, '/gerer2') && preg_match('#^/gerer2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edituser')), array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::adminEdituserAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_notification_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_list')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }
            not_notification_list:

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_seen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_seen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }
            not_notification_mark_as_seen:

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_unseen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_unseen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }
            not_notification_mark_as_unseen:

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_all_as_seen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_all_as_seen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }
            not_notification_mark_all_as_seen:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
