<?php

// Include autoload to use composer.
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;

// Echo errors messages.
ini_set('display_errors', 1); error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);    

$app = new Application();   // Initialize application

// Mapping all the allowed paths to the application.

// Main Page
$app->router->get('/', 'home');

// Contact Page
$app->router->get('/contact', 'contact');

// Start the application.
$app->run();

?>