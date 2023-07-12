<?php 
// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="root";
// $dbname="world";
// include("config/config.php"); // ruta relativa
include_once __DIR__ . 'config/config.php';
//config    $this -- llama variables locales
$conexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8', DB_USERNAME, DB_PASSWORD, array(
    PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
			));
//archivos globales en config
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
// //PDO -revisar

//$con->close();
$query = "SELECT id,language,is_official,percentage FROM languages";

// if ($stmt = $con->prepare($query)) {
//     $stmt->execute();
//     $stmt->bind_result($id, $language, $is_official, $percentage);
//     while ($stmt->fetch()) {
//         //printf("%s, %s, %s, %s\n", $id, $language, $is_official, $percentage);
//             ECHO "<table>
//                 <tr>
//                     <td>$id</td>
//                     <td>$language</td>
//                     <td>$is_official</td>
//                     <td>$percentage</td>
//                 </tr>
//             </table>";
//     }
//     $stmt->close();
// }

?>