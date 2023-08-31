<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que tal</title>
</head>

<body>
    <?php
    include "model/conexion.php";

    $query = "SELECT * FROM clientes";
    $resultado = pg_query($conexion, $query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
        
        echo "<table>";
        while ($fila = pg_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            // Agregar más columnas según tu tabla
            echo "</tr>";
        }
        echo "</table>";

        ?>
    </body>
    </html>
</body>

</html>