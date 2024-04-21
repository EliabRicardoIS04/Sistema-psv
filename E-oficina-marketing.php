<?php
$id = $_POST["id"];
$nombre = $_POST['nombre'];

if (isset($_POST['subir'])) {
    $archivo = $_FILES['archivo']['name'];

    if (isset($archivo) && $archivo != "") {
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];

        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
            - Se permiten archivos .gif, .jpg, .png y de 200 kb como máximo.</b></div>';
        } else {
            if (move_uploaded_file($temp, '../img/' . $archivo)) {
                chmod('img/' . $archivo, 0777);
                echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                echo '<p><img src="images/' . $archivo . '"></p>';
            } else {
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
        }
    }
}

$d = '../img/' . $archivo;

$conexion = mysqli_connect("localhost", "root", "", "sistema-psv");
if (!$conexion) {
    echo 'No se pudo establecer conexión con el servidor: ' . mysqli_error();
} else {
    $sql = "UPDATE `imagenof` SET `nombre`='$nombre', `direccion`='$d' WHERE `id` = '$id'";
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
}
echo "header('Location: vista/editar.php')";

?>