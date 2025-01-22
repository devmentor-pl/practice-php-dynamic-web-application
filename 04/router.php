<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => 'controllers/index.php',
    "/about" => 'controllers/about.php',
    "/contact" => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
    $routeExists = array_key_exists($uri, $routes);
    $isUriValid = preg_match('/^[a-z_-]+$/', $uri);

    if ($routeExists && $isUriValid) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController("{$uri}", $routes);