<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oficina de marketing</title>
</head>

<body>

    <div>
        <div>
            <form action="Crear.php" method="post" enctype="">
                <input type="submit" name="subir" value="Crear">
            </form>
        </div>
    </div>
    <div>
        <div>
            <form action="editar.php" method="post" enctype="">
                <input type="submit" name="subir" value="editar">
            </form>
        </div>
    </div>
    <div>
        <div>
            <form action="borrar.php" method="post" enctype="">
                <input type="submit" name="subir" value="Borrar">
            </form>
        </div>
    </div>

</body>
</html>

<?php
$link = mysqli_connect("localhost", "root", "", "sistema-psv");
if (!$link) {
    echo 'No se pudo establecer conexión con el servidor: ' . mysqli_error();
} else {
    $base = mysqli_select_db($link, 'sistema-psv');
    if (!$base) {
        echo 'No se encontró la base de datos: ' . mysqli_error();
    } else {
        $sql = "SELECT * FROM imagenof";
        $ejecutasentencia = mysqli_query($link, $sql);
        if (!$ejecutasentencia) {
            echo 'Hay un error en la sentencia SQL: ' . mysqli_error();
        } else {
            $listausuarios = mysqli_fetch_array($ejecutasentencia);
            if (!$listausuarios) {
                echo 'Error al mostrar lista de usuarios: ' . mysqli_error();
            }
        }
    }
}
?>

<html> 
        <h1>Mostrando Usuarios desde Base de Datos</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Direccion</th>

                     <?php
                      while ($row = mysqli_fetch_array($ejecutasentencia)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['direccion'] . "</td>";
                        echo "<td></td>";
                        echo "</tr>";
                    }
        

                    ?>

            <tr>
        </table>
</html>