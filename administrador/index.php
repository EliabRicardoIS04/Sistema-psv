<?php 

 /* if(isset($_POST['submit'])) {
      header('location:inicio.php');   
    }*/

?>

<!DOCTYPE html> 
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSSd/estilos2.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet"> 
        <title> Administrador</title>


    </head>
    <body>


        

           
        <div class="contenedor">
        <div class="prueba">
            <?php
                include("controlador/controlador.php");
            ?>       
        </div>
       
        
        <div class = "bloque-content">
            <div class="bienvenida">
                <h2>Bienvenido al ingreso de admnistración</h2>
            </div>
             
             <form method="post" class = "form" action= "" >
                   
        
                 <label class="label">Usuario: <label><br>
                 <input class="input" type = "text" name = "usuario" placeholder = "ingrese su usuario" ><br><br><br>    
                 <label class="label">Contraseña: <label><br>
                 <input class="input" type = "password" name = "contrasena" placeholder = "ingrese su contraseña" ><br>    
                 <input type = "submit" class = "btn"  value = "Ingresar" name= "submit">
             </form>
           
 
         </div>

        </div>    
            
    
        
    </body>
</html>
