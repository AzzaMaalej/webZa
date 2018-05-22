<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        // event_and_annonce_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'event_and_annonce_homepage');
            }

            return array (  '_controller' => 'EventAndAnnonceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_and_annonce_homepage',);
        }

        // veterinaire_homepage
        if ('/veterinaire' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'veterinaire_homepage');
            }

            return array (  '_controller' => 'VeterinaireBundle\\Controller\\DefaultController::indexAction',  '_route' => 'veterinaire_homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // petsitter_dresseur_homepage
            if ('/petsitter_dresseur' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'petsitter_dresseur_homepage');
                }

                return array (  '_controller' => 'PetsitterDresseurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'petsitter_dresseur_homepage',);
            }

            // petSitterpage
            if ('/petSitter' === $pathinfo) {
                return array (  '_controller' => 'ZanimauxBundle\\Controller\\PetSitterController::affichepAction',  '_route' => 'petSitterpage',);
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
                    if (preg_match('#^/magasin/modifPanier/(?P<idProduit>[^/]++)/(?P<cin>[^/]++)/(?P<quantite>[^/]++)$#s', $pathinfo, $matches)) {
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

        // gereruser
        if ('/gerer' === $pathinfo) {
            return array (  '_controller' => 'ZanimauxBundle\\Controller\\UserController::adminuserAction',  '_route' => 'gereruser',);
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
