<?php
// Create Router instance
use Bramus\Router\Router;

$router = new Router();
session_start();

// Define routes
$router->get('/', function() {
    $_SESSION['varname'] = 'toto je skrytapremenna';
    require 'views/mainpage.php';
});



$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo 'go fuck yourself';
});




$router->run();


