
<?php
include ("../conex.php");  
include ("../sentencia.php");
?>

<?php    // $ciudades = "SELECT * FROM cities";
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
<!-- <div>
        <form action="reporte.php" method="post" autocomplete ="off">
            <p class="text-primary h1 d-flex">Genera tu reporte de ID</p>
            <input type="text" id="numero" name="numero" value=>
            <br>
            <button type="submit">Generar</button>
        </form>
    </div> -->

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME OF CITY</th>
                    <th scope="col">DISTRIC</th>
                    <th scope="col">POPULATION</th>
                    <th scope="col">REPORTE EN PDF</th>
                    <th scope="col">REPORTE EN EXCEL</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <?php
                while ($data_set = mysqli_fetch_array($res_query)) {
                    ?>
                            <th id ="hola" scope="row"><?php echo $data_set['id'] ?></th>
                            <td><?php echo $data_set['name'] ?></td>
                            <td><?php echo $data_set['district'] ?></td>
                            <td><?php echo $data_set['population'] ?></td>
                            <th><a href="reporte2.php?id=<?php echo $data_set['id']?>">PDF</a></th>
                            <th><a href="create_excel.php?id=<?php echo $data_set['id']?>">EXCEL</a></th>
                        </tr>
                        <?php }?>
        </tbody>
    </table>
