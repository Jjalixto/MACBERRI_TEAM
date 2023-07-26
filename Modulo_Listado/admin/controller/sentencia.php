
    <?php 
            if(!isset($_POST["register"]) or $_POST["register"]==""){
                $select_bd = "SELECT * FROM cities";
                $res_query = mysqli_query($conexion, $select_bd);
            }else{
                $select_bd = "SELECT * FROM cities WHERE id = '".$_POST["register"]."'";
                $res_query = mysqli_query($conexion, $select_bd);
            }
    ?>