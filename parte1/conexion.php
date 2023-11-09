<?php
$db_host = "localhost"; // Tu servidor de base de datos
$db_nombre = "usuario"; // Nombre de tu base de datos
$db_usuario = "root"; // Nombre de usuario de la base de datos
$db_contra = ""; // Contraseña de tu base de datos

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()) {
    echo "La conexión con la base de datos ha fallado: " . mysqli_connect_error();
    exit();
}




?>
