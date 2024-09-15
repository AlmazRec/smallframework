<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/routes/web.php';

use App\Models\Post;
use Database\Connector;
use Src\Router\Router;



$router = new Router($routes);
$router->router();

$db = new Connector();



