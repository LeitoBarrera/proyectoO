<?php

require ("conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if (mysqli_connect_errno()) {
    echo "La conexion ha fallado";
    exit();
}
mysqli_select_db($conexion, $db_nombre)or die ("No se ha encontrado la Base de Datos");

if(isset($_GET["enviar"])){

    $id_cod=$_GET['c_prod'];
    $seccion =$_GET['seccion'];
    $producto=$_GET['n_prod'];
    $pais=$_GET['p_orig'];
    $importado=$_GET['importado'];
    $precio=$_GET['precio'];

$consulta= "INSERT INTO productos (id_producto, seccion, producto, origen, importada, precio) VALUES ('$id_cod','$seccion','$producto','$pais','$importado','$precio')";
$resultado=mysqli_query($conexion,$consulta);

echo "<script>alert('Se almacenaron correctamente los datos sexo');</script>";
echo '<script>window.location.href="form_registroo.php";</script>';

mysqli_close($conexion);
}else{
    echo "<script>alert('Error en la insercion');</script>";


}



?>