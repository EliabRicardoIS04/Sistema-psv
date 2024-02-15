<?php

    include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM productos WHERE Id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../seccion/productos2.php");
    }else {
        echo "No se elimino el dato";
    }