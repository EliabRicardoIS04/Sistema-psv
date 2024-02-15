<?php
include("configBD.php");

// prepare the select query 
$query = "SELECT * FROM pruductos";
// execute the select query 
$result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
// run the select query 
if ($result->num_rows > 0) {
    echo "<table with=30% border= 3>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "<th>Descripción</th>";
    echo "<th>Foto</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td  >" . $row["ID"] . "</td>";
      echo "<td  >" . $row["Nombre"] . "</td>";
      echo "<td>" . $row["precio"] . "</td>";
      echo "<td>" . $row["descripcion"] . "</td>";
      $imagen = $row['foto'];
      echo "<td>".'<img width ="100" height="100" src="data:image/jpg;base64,' . base64_encode($imagen) . '">'."<br/>" . "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "No se encontraron productos";
  }
// close the db connection S
mysqli_close($connection_obj);
?>

