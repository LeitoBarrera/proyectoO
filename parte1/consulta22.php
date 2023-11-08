<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
</head>
<body>
    <div class="table-container">
        <table>
            <tr class="table-header">
                <th>ID</th>
                <th>SECCION</th>
                <th>PRODUCTO</th>
                <th>ORIGEN</th>
                <th>IMPORTADA</th>
                <th>PRECIO</th>
            </tr>
            <?php
            require_once("../parte1/conexion.php");

            $consulta = "SELECT * FROM productos WHERE seccion='CERAMICA'";
            $resultado2 = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_assoc($resultado2)) {
                echo "<tr>";
                foreach ($fila as $clave => $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }

            mysqli_close($conexion);
            ?>
        </table>
    </div>
</body>
</html>


