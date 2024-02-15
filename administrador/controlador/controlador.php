


<?php
    if(!empty($_POST["submit"])){
        if(empty($_POST["usuario"]) and empty($_POST["contraseña"])){
            echo'<b style = "color:red;">LOS CAMPOS ESTAN VACIOS, INTENTE NUEVAMENTE</b>';
        } else{
            $usuario = $_POST["usuario"];       
            $clave = $_POST["contrasena"];       
            $connection_obj = mysqli_connect("localhost", "root", "", "administraciónserver");
        if (!$connection_obj) {
            echo "Error No: " . mysqli_connect_errno();
            echo "Error Description: " . mysqli_connect_error();
            exit;
        }
            $sql = "SELECT * FROM administrar WHERE usuario='$usuario' AND contraseña='$clave'";
            $result = mysqli_query($connection_obj, $sql);
            if(mysqli_num_rows($result) == 1){
                header("location:inicio.php");
            }else{
                echo '<b style = "color:red;">USUARIO Y CONTRASEÑA NO EXISTENTE</b>';
            }
            mysqli_close($connection_obj);
        }
    }
    
   
?>