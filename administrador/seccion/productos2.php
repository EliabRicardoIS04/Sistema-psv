<?php 
 $page1 = "productos";
 
 ?>
<?php  include("../template/cabecera.php");?> 
    <main>
    <div class="container">
        <br>
        <center>
            <H1>Listada de producto</H1>
        </center>
        <br>
        <div class="container">

            <a href="../Crud_productos/Nuevo.php" class="btn btn-dark">Agregar </a>
            
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../Crud_productos/Config/Conexion.php";

                    $Sql = "SELECT * FROM productos";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['Id']?></th>
                            <td><?php echo $Fila['Nombre']?></td>
                            <td><?php echo $Fila['Descripcion']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" alt=""></td>
                            <td>
                                <a href="../Crud_productos/Vista_Editar.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-warning">Editar</a>
                                <a href="../Crud_productos/Eliminar.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    </main>

   
        <?php include("../template/pie.php");?>
    