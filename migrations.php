<?php

// Include autoload to use composer.
require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;
use app\core\Database;

// Echo errors messages.
ini_set('display_errors', 1); error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);    

// Database configuration settings that are
// retrieved from .env by the help of dotenv package.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];


$app = new Application(__DIR__, $config);   // Initialize application.

$app->db->appyMigrations();
?>




?>