<?php
    include("configBD.php");
// initialize variables for the insert query 
$Nom=$_POST['NOMBRE'];
$EMAIL=$_POST['EMAIL'];
$CEL=$_POST['CELULAR'];
$ID=$_POST['ID'];
// prepare the insert query 
$query = "UPDATE usuario DELETE 
`NOM` = '". mysqli_real_escape_string($connection_obj, $Nom) ."',
`CEL` = '". mysqli_real_escape_string($connection_obj, $CEL) ."',
`EMAIL` = '". mysqli_real_escape_string($connection_obj, $EMAIL) ."'
 WHERE `id` = '". $ID ."'";
// run the insert query 
$result=mysqli_query($connection_obj, $query);
if($result){
    echo " Dato actualizado";
}else{
    echo " Dato no actualizado"; 
}
// close the db connection 
mysqli_close($connection_obj);
?>