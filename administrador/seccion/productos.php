<?php 
 $page1 = "productos";
 $name = "";
 ?>

       

<?php  include("../template/cabecera.php");?>    
        <style>
            main{
                height: 900px;
                width:1900px; 
                background-color: gray;
                padding: 15px;
            }
            div{
                float:left;
                
            }

            .bloque_agregar{
                padding: 15px;
               border: 2px dotted white;
               height: 90%;
               width: 50%;
            }
            .bloque_mostrar{
                padding: 15px;;
               border: 2px dotted white;
               height: 90%;
               width: 50%;
               display: inline;
            }


        </style>

        <main>
            <br>
            <div class ="bloque_agregar">
                <form action="../config/AgrActElim.php" method = "post" enctype = "multipart/form-data">
                    <fieldset>
                        <legend>AÑADIR PRODUCTO</legend>
                        <br><br>
                        <label >ID:</label><br>
                        <input type= "number" name = "id" value = "<?php echo $id; ?>">
                        <input type = "submit" name= "buscar" value = "Buscar" class = "btn"><br><br>
                        <label >Ingrese el nombre del producto:</label><br>
                        <input type= "text" name = "nombre" value = "<?php echo $name; ?>"> <br><br>
                        <label >Ingrese el precio del producto:</label><br>
                        <input type= "number" name = "precio" value = "<?php echo $precio; ?>" ><br><br>
                        <label >Ingrese una descripción clara del pruducto:</label><br>
                        <textarea cols="60" rows="15"  name = "descripcion" value = "<?php echo $descripcion; ?>"></textarea><br><br>
                        <label >Foto:</label><br>
                        <input type= "file" name = "imagen" value = "<?php echo $imagen; ?>"><br><br>

                        <input type = "submit" name= "Añadir" value = "añadir" class= "btn">
                        <input type = "submit" name= "Actualizar" value = "actualizar" class= "btn">
                        <input type = "submit" name= "Eliminar" value = "eliminar" class = "btn">
                    </fieldset>

               </form>
            </div>
            <div  class ="bloque_mostrar">
               <?php include("../config/mostrar.php")?>
            </div>
        </main>
    <?php include("../template/pie.php");?>
