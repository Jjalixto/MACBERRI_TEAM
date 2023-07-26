<?php 
    include("../modelo/conexion.php");
    $select_bd = "SELECT * FROM cities";
    $res_consult = mysqli_query($conexion, $select_bd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>
<body>
    <?php include "../controller/sentencia.php";?>
    <label>Your ID</label>
    <input type="text" name="register" id="register" onchange="setViewTable">
    <td>   
        <!-- <button onclick="deleteTable(<?php echo $data_set['id'] ?>)">Delete</button> -->
        <button onclick="setViewTable()">Search</button>
    </td>
    <div id="main"></div>
    <h2 id="msg"></h2>

        <script>
            function setViewTable(){
                var registerInput = document.getElementById("register").value;
                var dataen = 'register=' + registerInput;
                $.ajax({
                    type: 'POST',
                    url: 'viewTable.php',
                    data: dataen,
                    success: function(resp){
                        $('#main').html(resp);
                    }
                });
            }
            setViewTable();
            </script>
            <script>
                function deleteTable(id){
                    var dataen = 'id=' + id;
                    $.ajax({
                        type: "POST",
                        url: 'delete.php',
                        data: dataen,
                        success: function(resp){
                            $('#msg').html(resp);
                        }
                    });
                }
        </script>
</body>
</html>