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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/live\\-match/([^/]++)(*:28)'
                .'|/game\\-history/([^/]++)(*:58)'
                .'|/user\\-data/([^/]++)(*:85)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:120)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_default_livematch', '_controller' => 'App\\Controller\\DefaultController::liveMatch'], ['summonerName'], null, null, false, true, null]],
        58 => [[['_route' => 'app_default_gamehistory', '_controller' => 'App\\Controller\\DefaultController::gameHistory'], ['summonerName'], null, null, false, true, null]],
        85 => [[['_route' => 'app_default_userdata', '_controller' => 'App\\Controller\\DefaultController::userData'], ['summonerName'], null, null, false, true, null]],
        120 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
