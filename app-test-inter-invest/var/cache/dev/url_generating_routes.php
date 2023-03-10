<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_get_formes_juridiques' => [[], ['_controller' => 'App\\Controller\\FormeJuridiqueController::getFormesJuridiques'], [], [['text', '/formes']], [], [], []],
    'app_get_societe' => [['id'], ['_controller' => 'App\\Controller\\SocieteController::getSociete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/societe']], [], [], []],
    'app_update_societe' => [['id'], ['_controller' => 'App\\Controller\\SocieteController::putSociete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/societe']], [], [], []],
    'app_add_societe_version' => [['id'], ['_controller' => 'App\\Controller\\SocieteController::postSocieteVersion'], [], [['text', '/version'], ['variable', '/', '[^/]++', 'id', true], ['text', '/societe']], [], [], []],
    'app_add_adresse' => [['idSocieteInfo'], ['_controller' => 'App\\Controller\\SocieteController::postAdresseSociete'], [], [['text', '/adresse'], ['variable', '/', '[^/]++', 'idSocieteInfo', true], ['text', '/societe']], [], [], []],
    'app_update_adresse' => [['idAdresse'], ['_controller' => 'App\\Controller\\SocieteController::putAdresseSociete'], [], [['text', '/adresse'], ['variable', '/', '[^/]++', 'idAdresse', true], ['text', '/societe']], [], [], []],
    'app_delete_adresse' => [['idAdresse'], ['_controller' => 'App\\Controller\\SocieteController::deleteAdresseSociete'], [], [['text', '/adresse'], ['variable', '/', '[^/]++', 'idAdresse', true], ['text', '/societe']], [], [], []],
    'app_list_societe' => [[], ['_controller' => 'App\\Controller\\SocieteListController::getSocieteList'], [], [['text', '/societes']], [], [], []],
    'app_add_societe' => [[], ['_controller' => 'App\\Controller\\SocieteListController::postSociete'], [], [['text', '/societes']], [], [], []],
    'app_delete_societe' => [['id'], ['_controller' => 'App\\Controller\\SocieteListController::deleteSociete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/societes']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'homepage' => [[], ['path' => '/societes?pageSize=10&page=1', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], [], [['text', '/']], [], [], []],
];
