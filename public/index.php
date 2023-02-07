<?php

// Include autoload to use composer.
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;

// Echo errors messages.
ini_set('display_errors', 1); error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);    


$app = new Application(dirname(__DIR__));   // Initialize application.

// Mapping all the allowed paths to the application.

// Main Page
$app->router->get('/', [SiteController::class , 'home']);

// Contact Page
$app->router->get('/contact', [SiteController::class , 'contact']);
$app->router->post('/contact', [SiteController::class,'handleContact']);

// Start the application.
$app->run();

?>
