<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../parte1/estilos.css">
</head>
<body>
    <div class="table-container">
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
            require("conexion.php"); 

            $busqueda = isset($_GET["search"]) ? $_GET["search"] : "";

            if (!empty($busqueda)) {
                $consulta = "SELECT * FROM productos WHERE producto LIKE ?";
                $stmt = mysqli_prepare($conexion, $consulta);
                
                if ($stmt) {
                    $busqueda = "%" . $busqueda . "%";
                    mysqli_stmt_bind_param($stmt, "s", $busqueda);
                    mysqli_stmt_execute($stmt);
                    $resultado = mysqli_stmt_get_result($stmt);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        foreach ($fila as $clave => $valor) {
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }

                    mysqli_stmt_close($stmt);
                }
            }

            mysqli_close($conexion);
            ?>
        </table>
        
        <div class="button-container">
            <a class="button" href="../parte1/form_busqueda.php">Volver al formulario de búsqueda</a>
        </div>
    </div>
</body>
</html>


