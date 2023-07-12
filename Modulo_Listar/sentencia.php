
    <?php 

        // class Sentencia{
        //     //aributos
        //     function anonima(){
            if(!isset($_POST["register"]) or $_POST["register"]==""){
                $select_bd = "SELECT * FROM cities";
                $res_query = mysqli_query($con, $select_bd);
            }else{
                $select_bd = "SELECT * FROM cities WHERE id = '".$_POST["register"]."'";
                $res_query = mysqli_query($con, $select_bd);
            }

        

        // }
        //     //metodos

        //     // public function hablar($mensaje){
        //     //     echo $mensaje;
        //     // }
        // }
        
    ?>