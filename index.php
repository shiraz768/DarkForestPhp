<?php
// Router logic
$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/'; // Adjust this based on your server configuration
$route = str_replace($basePath, '', $requestUri);
$parts = explode('/', $route);
$page = $parts[0]; // The first part of the route typically represents the page

// Route to the corresponding PHP file or action
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
        // Handle 404 page not found
        http_response_code(404);
        echo 'Page Not Found';
        break;
}
?>
