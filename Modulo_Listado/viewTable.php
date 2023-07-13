
<?php 

include ("conex.php");  
include ("sentencia.php");

    // $ciudades = "SELECT * FROM cities";
        // if(!isset($_POST["register"]) or $_POST["register"]==""){
        //     $select_bd = "SELECT * FROM cities";
        //     $res_query = mysqli_query($con, $select_bd);
        // }else{
        //     $select_bd = "SELECT * FROM cities WHERE id = '".$_POST["register"]."'";
        //     $res_query = mysqli_query($con, $select_bd);
        // }
    // }

    // include ("poo.php");
    //         $lista = new Listar();   //Instanciando la clase lista del archivo poo.php
    //         echo $lista -> population;
    //         echo "<br>";
    //         echo $lista -> cities;
    //         echo "<br>";
    //         echo $lista -> district;
    //         echo "<br>";
    //         $lista -> hablar("Hello POO --> PHP");

?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name of city</th>
                    <th scope="col">district</th>
                    <th scope="col">population</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <?php
                while ($data_set = mysqli_fetch_array($res_query)) {
                    ?>
                            <th scope="row"><?php echo $data_set["id"] ?></th>
                            <td><?php echo $data_set["name"] ?></td>
                            <td><?php echo $data_set["district"] ?></td>
                            <td><?php echo $data_set["population"] ?></td>
                            <td><button onclick="deleteTable(<?php echo $data_set['id'] ?>)">ELIMINAR</button>
                                <!-- <button onclick="setViewTable()">mostrar</button> -->
                            </td>
                        </tr>
                        <?php }?>
        </tbody>
    </table>