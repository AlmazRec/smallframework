<?php

use App\Controllers\HomeController;
use App\Controllers\PostController;

// тут распологаются все маршруты

$routes = [
    '/' => [
        'controller' => HomeController::class,
        'method' => 'index'
    ],

    '/posts' => [
        'controller' => PostController::class,
        'method' => 'index'
    ],

    '/posts/create' => [
        'controller' => PostController::class,
        'method' => 'create'
    ],

    '/posts/store' => [
        'controller' => PostController::class,
        'method' => 'store'
    ],
];