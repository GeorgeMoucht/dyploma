<?php

// Include autoload to use composer.
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

// Echo errors messages.
ini_set('display_errors', 1); error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);    

// Database configuration settings that are
// retrieved from .env by the help of dotenv package.
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];


$app = new Application(dirname(__DIR__), $config);   // Initialize application.

// Mapping all the allowed paths to the application.

// Main Page
$app->router->get('/', [SiteController::class , 'home']);

// Contact Page
$app->router->get('/contact', [SiteController::class , 'contact']);
$app->router->post('/contact', [SiteController::class,'handleContact']);

// Login Page
$app->router->get('/login', [AuthController::class,'login']);
$app->router->post('/login', [AuthController::class,'login']);

//Register Page
$app->router->get('/register', [AuthController::class,'register']);
$app->router->post('/register', [AuthController::class,'register']);


// Start the application.
$app->run();

?>
