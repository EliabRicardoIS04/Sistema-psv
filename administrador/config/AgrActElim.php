<?php
if(isset($_POST['buscar'])){
    header('location:buscar.php');
} 


if(isset($_POST['Añadir'])){
    header('location:insertar.php');
} 

if(isset($_POST['Actualizar'])){
    header('location:actualizar.php');
} 

if(isset($_POST['Eliminar'])){
    header('location:insertar.php');
} 



?>