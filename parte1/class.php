<?php
function ejecutar_consulta($laconsulta){
    require("../conexion.php");
    $consulta = "SELECT * FROM productos WHERE productos LIKE '%$laconsulta%'";
    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_row($resultado)) {
        echo "<tr>";
        foreach ($fila as $arrayx) {
            echo "<td>" . $arrayx . "</td>";
        }
        echo "</tr><br>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados X2</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Seccion</th>
            <th>Producto</th>
            <th>Origen</th>
            <th>Importado</th>
            <th>Precio</th>
        </tr>

        <?php
        require("../parte1/conexion.php");
        $mibusqueda = isset($_GET["search"]) ? $_GET["search"] : null;
        $mipagina = $_SERVER["PHP_SELF"];

        if ($mibusqueda != null) {
            $busqueda=$_GET["search"];
            ejecutar_consulta($mibusqueda);
            
        } else {
            echo("<form action='".$mipagina."' method='get'>");
            echo("<label>Buscar: <input type='text' name='search'></label>");
            echo("<input type='submit' name='search' value='Enviar'>");
            echo("</form>");
            
        }
        ?>
    </table>
</body>
</html>
