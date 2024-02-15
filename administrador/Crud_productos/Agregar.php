<?php

    include "Config/Conexion.php";

    $nombreproductos =$_POST["Nombre"];
    $descripcionproductos = $_POST["Descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $sql = "INSERT INTO `productos` ( Nombre , Descripcion , Imagen) VALUES ('$nombreproductos','$descripcionproductos','$imagen')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: ../seccion/productos2.php');
    }else {
        echo "No se insertaron los datos";
    }