<?php

require ("conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if (mysqli_connect_errno()) {
    echo "La conexion ha fallado";
    exit();
}
mysqli_select_db($conexion, $db_nombre)or die ("No se ha encontrado la Base de Datos");

if (isset($_GET[""])) {
    # code...
}
?>