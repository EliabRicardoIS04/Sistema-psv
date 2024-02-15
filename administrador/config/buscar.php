<?php
    include("configBD.php");
// initialize variables for the insert query 

$IDbuscar = $_POST["id"];



// prepare the insert query 
$query = "SELECT ID, Nombre, precio, foto, descripcion FROM pruductos WHERE ID = '$IDbuscar'";;
$resultado = mysqli_query($connection_obj, $query);


if ($row = mysqli_fetch_assoc($resultado)) {
    $id = $row['ID'];
    $name = $row['Nombre'];
    $precio = $row['precio'];
    $descripcion = $row['descripcion'];
    $imagen = $row['foto'];

    // asignar los valores a los inputs
    echo '<script>
            document.getElementsByName("id")[0].value = "'.$id.'";
            document.getElementsByName("nombre")[0].value = "'.$name.'";
            document.getElementsByName("precio")[0].value = "'.$precio.'";
            document.getElementsByName("descripcion")[0].value = "'.$descripcion.'";

            // mostrar la imagen
            var img = document.createElement("img");
            img.src = "../../imagenes/'.$imagen.'";
            img.height = "100";
            document.getElementById("imagen_container").appendChild(img);
         </script>';
}


;
// close the db connection 
mysqli_close($connection_obj);

header('location:../seccion/productos.php');
?>