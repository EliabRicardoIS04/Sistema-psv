
        <?php
           $url2 = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/administrador/CSSd/estilospage.css";
        ?>   

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link style rel = "stylesheet"   type = "text/css" href = "<?php echo $url2;?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title><?php echo ucfirst($page1); ?></title>
    </head>
    <body>
        <?php
           $url = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/principal.php";
           $url1 = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/administrador";
           $url3 = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/Crud_productos";
           ?>

        <div>
        <nav class = "navegation">
                <ul>
                     <li>
                         <a href = "<?php echo $url1;?>/inicio.php">inicio</a>
                     </li>
                    <li>
                         <a href = "<?php echo $url1;?>/seccion/servicios.php ">servicios</a>
                    </li>
                    <li>
                      <a  href =  "<?php echo $url1;?>/seccion/productos2.php ">productos</a>
                    </li>
                    <li>
                       <a class="cerrar" href = "<?php echo $url1;?>/seccion/cerrar.php ">salir</a>
                  </li>
                    <li>
                        <a class="ver" href = "<?php echo $url;?>"  target= "blank">Ver pagina web</a>
                     </li>
                </ul>   
            </nav>
                  

                 <div class = "clearfix"></div>
             <header>
                 <div class = "textLogo">
                     <h2>Configuración</h2>
                  </div>
            </header>
                <div class = "clearfix"></div>

                