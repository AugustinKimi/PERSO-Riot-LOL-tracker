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
        '/create-itemset' => [[['_route' => 'app_default_createitemset', '_controller' => 'App\\Controller\\DefaultController::createItemset'], null, null, null, false, false, null]],
        '/delete-itemset' => [[['_route' => 'app_default_deleteitemset', '_controller' => 'App\\Controller\\DefaultController::deleteItemset'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/l(?'
                    .'|ive\\-match/([^/]++)(*:31)'
                    .'|ast\\-games\\-stats/([^/]++)(*:64)'
                .')'
                .'|/g(?'
                    .'|ame\\-(?'
                        .'|history/([^/]++)(*:101)'
                        .'|details/([^/]++)(*:125)'
                    .')'
                    .'|et\\-(?'
                        .'|champion\\-itemset/([^/]++)/([^/]++)(*:176)'
                        .'|all\\-itemset/([^/]++)(*:205)'
                    .')'
                .')'
                .'|/user\\-(?'
                    .'|data/([^/]++)(*:238)'
                    .'|exist/([^/]++)(*:260)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:297)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_default_livematch', '_controller' => 'App\\Controller\\DefaultController::liveMatch'], ['summonerName'], null, null, false, true, null]],
        64 => [[['_route' => 'app_default_lastgamesstats', '_controller' => 'App\\Controller\\DefaultController::lastGamesStats'], ['summonerName'], null, null, false, true, null]],
        101 => [[['_route' => 'app_default_gamehistory', '_controller' => 'App\\Controller\\DefaultController::gameHistory'], ['summonerName'], null, null, false, true, null]],
        125 => [[['_route' => 'app_default_gamedetails', '_controller' => 'App\\Controller\\DefaultController::gameDetails'], ['gameId'], null, null, false, true, null]],
        176 => [[['_route' => 'app_default_getchampionitemset', '_controller' => 'App\\Controller\\DefaultController::getChampionItemset'], ['summonerName', 'championId'], null, null, false, true, null]],
        205 => [[['_route' => 'app_default_getallitemsets', '_controller' => 'App\\Controller\\DefaultController::getAllItemsets'], ['summonerName'], null, null, false, true, null]],
        238 => [[['_route' => 'app_default_userdata', '_controller' => 'App\\Controller\\DefaultController::userData'], ['summonerName'], null, null, false, true, null]],
        260 => [[['_route' => 'app_default_userexist', '_controller' => 'App\\Controller\\DefaultController::userExist'], ['summonerName'], null, null, false, true, null]],
        297 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
