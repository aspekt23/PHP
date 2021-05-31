<?php
use Bramus\Router\Router;
require $_SERVER['DOCUMENT_ROOT'] . "/config/database.php";


$router = new Router();
session_start();

// Define routes
$router->get('/', function() {
    $_SESSION['varname'] = 'toto je skrytapremenna';
    require 'public/views/mainpage.php';
});

$router->get('/db', function() {
    $db = new Database();
    if($db->connect())
        echo 'yes MF';
    else echo 'oh no';

});



$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo 'go fuck yourself';
});




$router->run();


