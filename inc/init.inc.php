<?php
// titre
$title = '';
require __DIR__ . '/../vendor/autoload.php';
Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/../')->load();
//--------- Base de donnée
$mysqli = new mysqli($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
// print_r($_SERVER);
define("RACINE_SITE","http://" . $_SERVER['HTTP_HOST'] . "/");
$contenu = "";
require('function.inc.php');
 
