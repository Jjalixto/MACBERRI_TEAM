<?php
require "../modelo/conexion.php";  
require "../controller/sentencia.php";
?>
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
                            <th><a href="../admin/controller/reporte2.php?id=<?php echo $data_set['id']?>">PDF</a></th>
                            <th><a href="../admin/view/create_excel.php?id=<?php echo $data_set['id']?>">EXCEL</a></th>
                        </tr>
                        
                        <?php }?>
        </tbody>
    </table>
