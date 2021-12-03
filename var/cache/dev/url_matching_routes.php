<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\DefaultController::error'], null, null, null, false, false, null]],
        '/store-items' => [[['_route' => 'app_default_storeitems', '_controller' => 'App\\Controller\\DefaultController::storeItems'], null, null, null, false, false, null]],
        '/store-champions' => [[['_route' => 'app_default_storechampions', '_controller' => 'App\\Controller\\DefaultController::storeChampions'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_default_login', '_controller' => 'App\\Controller\\DefaultController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_default_signup', '_controller' => 'App\\Controller\\DefaultController::signup'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/l(?'
                    .'|ive\\-match/([^/]++)(*:31)'
                    .'|ast\\-games\\-stats/([^/]++)(*:64)'
                .')'
                .'|/game\\-history/([^/]++)(*:95)'
                .'|/user\\-data/([^/]++)(*:122)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:158)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_default_livematch', '_controller' => 'App\\Controller\\DefaultController::liveMatch'], ['summonerName'], null, null, false, true, null]],
        64 => [[['_route' => 'app_default_lastgamesstats', '_controller' => 'App\\Controller\\DefaultController::lastGamesStats'], ['summonerName'], null, null, false, true, null]],
        95 => [[['_route' => 'app_default_gamehistory', '_controller' => 'App\\Controller\\DefaultController::gameHistory'], ['summonerName'], null, null, false, true, null]],
        122 => [[['_route' => 'app_default_userdata', '_controller' => 'App\\Controller\\DefaultController::userData'], ['summonerName'], null, null, false, true, null]],
        158 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
