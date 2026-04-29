<?php

define('BASE_PATH', __DIR__);

require_once basePath('helpers.php');
require_once basePath('framework/router.php');

function basePath(string $path = ''): string {
    return rtrim(BASE_PATH, '/') . '/' . ltrim($path, '/');
}

// Re-require after basePath is available
require_once __DIR__ . '/helpers.php';

$router = new Router();

// Register routes
$router->get('/',          'views/home.view.php');
$router->get('/listings',  'views/home.view.php');

// 403 demo route
$router->get('/apply/restricted', function($params) {
    http_response_code(403);
    require basePath('controllers/listings/error.php');
});

// Dispatch current request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
