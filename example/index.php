<?php 
    // echo "Hola mundo";
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="root";
    $dbname="friendsdb";
    
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    
    //$con->close();
    
    $query = "SELECT id,user_id,friend_id,created_at,updated_at FROM friendships";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($id, $user_id, $friend_id, $created_at, $updated_at);
    while ($stmt->fetch()) {
        // printf("%s, %s, %s, %s, %s\n", $id, $user_id, $friend_id, $created_at, $updated_at);
        // ECHO "<table>
        //         <tr>
        //             <td>$id</td>
        //             <td>$user_id</td>
        //             <td>$friend_id</td>
        //             <td>$created_at</td>
        //             <td> $updated_at</td>
        //         </tr>
        //     </table>";
    }
    $stmt->close();
}
?>
