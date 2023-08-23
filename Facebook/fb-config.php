<?php
session_start();
include_once('php-graph-sdk-5.x/src/Facebook/autoload.php');
$fb = new Facebook\Facebook(array(
	'app_id' => '1015850912774677', 
	'app_secret' => 'e21344d9d649493e489183f9a28dc35b',  
	'default_graph_version' => 'v3.2',
));

$helper = $fb->getRedirectLoginHelper();

//conexion bd

$hostname = "localhost";
$username = "root";
$password = "root";
$database = "facebook";

$conn = mysqli_connect($hostname, $username, $password, $database);

?>