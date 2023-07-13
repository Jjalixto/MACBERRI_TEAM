<?php 
// 	$host="localhost";
// 	$port=3306;
// 	$socket="";
// 	$user="root";
// 	$password="root";
// 	$dbname="world";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

//otra forma de adquirir datos de "BD"
$con = mysqli_connect("localhost", "root", "root", "world");
// if ($con) {
//     echo "YES";
// } else {
//     echo "not";
// }

//query variable para hacer consultas 
// $query = "SELECT id,name,district,population FROM cities";


?>