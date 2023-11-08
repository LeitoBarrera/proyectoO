<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLAS</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php
        require_once("../parte1/conexion.php");
        $consulta = "SELECT * FROM datospersonales";
        $resultado = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila[0] . "</td>";
            echo "<td>" . $fila[1] . "</td>";
            echo "<td>" . $fila[2] . "</td>";
            echo "<td>" . $fila[3] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conexion);
        ?>
    </table>
</body>
</html>
