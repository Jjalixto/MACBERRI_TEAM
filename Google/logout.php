<?php
//logout.php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>