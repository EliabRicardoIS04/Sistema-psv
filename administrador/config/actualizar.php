<?php
    include("configBD.php");
// initialize variables for the insert query 

$id = $_POST['ID'];



// prepare the insert query 
$query = "UPDATE productos SET
 nombre` = '". mysqli_real_escape_string($connection_obj, $Nombre) ."',
  `celular` = '". mysqli_real_escape_string($connection_obj, $precio) ."',
  `descripcion` = '". mysqli_real_escape_string($connection_obj, $descripcion) ."' 
  `foto` = '". mysqli_real_escape_string($connection_obj, $foto) ."' 
 WHERE `id` = '". (int) $id ."'";
// run the insert query 
mysqli_query($connection_obj, $query);
// close the db connection 
mysqli_close($connection_obj);
?>