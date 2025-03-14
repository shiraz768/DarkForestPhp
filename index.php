<?php

$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/';
$route = str_replace($basePath, '', $requestUri);
$parts = explode('/', $route);
$page = $parts[0];


switch ($page) {
    case '':
    case 'home':
        require './handlers/home.php';
        break;
    case 'about':
        require './handlers/about.php';
        break;
    case 'contact':
        require './handlers/contact.php';
        break;
    default:
        http_response_code(404);
        echo 'Page Not Found';
        break;
}
?>
