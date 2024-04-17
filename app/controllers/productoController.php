<?php
require_once('../core/conexion.php');
require_once('../models/Productos.php');


$productos = new Producto();

switch($_GET['op']){
    case 'listar':
        $datos = $productos->get_producto();
        $data = Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["ID"];
            $sub_array[] = '<button type = "button" onClick= "editar('.$row["ID"].');" id="'.$row["ID"].'" class "btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type = "button" onClick= "eliminar('.$row["ID"].');" id="'.$row["ID"].'" class "btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
        }

        break;
}

