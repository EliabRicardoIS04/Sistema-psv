<?php
    include("configBD.php");

// initialize variables for the insert query 
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$foto = file_get_contents($_FILES['imagen']['tmp_name']);
// prepare the insert query 
$query = "INSERT INTO pruductos(`Nombre`,`precio`, `descripcion`,`foto`) 

VALUES ('". mysqli_real_escape_string($connection_obj, $nombre) ."','"
. mysqli_real_escape_string($connection_obj, $precio) ."','"
. mysqli_real_escape_string($connection_obj, $descripcion) ."','"
. mysqli_real_escape_string($connection_obj, $foto) ."')";
// run the insert query 
mysqli_query($connection_obj, $query);
// close the db connection 
mysqli_close($connection_obj);

header('location:../seccion/productos.php');
?>