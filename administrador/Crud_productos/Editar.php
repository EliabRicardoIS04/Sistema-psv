<?php


error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Nombre = $_POST['Nombreproductos'];
$Descripcion = $_POST['Descripcionproductos'];
$imagen = addslashes(file_get_contents($_FILES['Imagenproductos']['tmp_name']));


$sql = "UPDATE productos SET 
Nombre = '$Nombre', 
Descripcion = '$Descripcion',
Imagen = '$imagen' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../seccion/productos2.php");
}else {
    echo "No se insertaron los datos";
}