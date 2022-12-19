<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/formes' => [[['_route' => 'app_get_formes_juridiques', '_controller' => 'App\\Controller\\FormeJuridiqueController::getFormesJuridiques'], null, ['GET' => 0], null, false, false, null]],
        '/societes' => [
            [['_route' => 'app_list_societe', '_controller' => 'App\\Controller\\SocieteListController::getSocieteList'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_add_societe', '_controller' => 'App\\Controller\\SocieteListController::postSociete'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'homepage', 'path' => '/societes?pageSize=10&page=1', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/societe(?'
                    .'|/([^/]++)(?'
                        .'|(*:30)'
                        .'|/(?'
                            .'|version(*:48)'
                            .'|adresse(?'
                                .'|(*:65)'
                                .'|(*:72)'
                            .')'
                        .')'
                    .')'
                    .'|s/([^/]++)(*:92)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:128)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [
            [['_route' => 'app_get_societe', '_controller' => 'App\\Controller\\SocieteController::getSociete'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_update_societe', '_controller' => 'App\\Controller\\SocieteController::putSociete'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        48 => [[['_route' => 'app_add_societe_version', '_controller' => 'App\\Controller\\SocieteController::postSocieteVersion'], ['id'], ['POST' => 0], null, false, false, null]],
        65 => [[['_route' => 'app_add_adresse', '_controller' => 'App\\Controller\\SocieteController::postAdresseSociete'], ['idSocieteInfo'], ['POST' => 0], null, false, false, null]],
        72 => [
            [['_route' => 'app_update_adresse', '_controller' => 'App\\Controller\\SocieteController::putAdresseSociete'], ['idAdresse'], ['PUT' => 0], null, false, false, null],
            [['_route' => 'app_delete_adresse', '_controller' => 'App\\Controller\\SocieteController::deleteAdresseSociete'], ['idAdresse'], ['DELETE' => 0], null, false, false, null],
        ],
        92 => [[['_route' => 'app_delete_societe', '_controller' => 'App\\Controller\\SocieteListController::deleteSociete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        128 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
