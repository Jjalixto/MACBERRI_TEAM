<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('133609575968-p5299ckree1h4h6vgkkpm4dos5r2ca3j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/web01/Google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');


// Connect to database
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "google";

$conn = mysqli_connect($hostname, $username, $password, $database);
?>