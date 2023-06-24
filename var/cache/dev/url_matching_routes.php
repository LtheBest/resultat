<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::homepage'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'app_news_index', '_controller' => 'App\\Controller\\NewsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/news/new' => [[['_route' => 'app_news_new', '_controller' => 'App\\Controller\\NewsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/news/([^/]++)(?'
                    .'|(*:59)'
                    .'|/edit(*:71)'
                    .'|(*:78)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'app_news_show', '_controller' => 'App\\Controller\\NewsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        71 => [[['_route' => 'app_news_edit', '_controller' => 'App\\Controller\\NewsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        78 => [
            [['_route' => 'app_news_delete', '_controller' => 'App\\Controller\\NewsController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
