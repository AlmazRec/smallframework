<?php

namespace Src\Router;
require_once __DIR__ . '/../../routes/web.php';

class Router
{
    private $routes;

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function router()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$uri])) {
            $controller = $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];

            (new $controller())->$method();
        } else {
            http_response_code(404);
            echo '404 page not found';
        }
    }
}