
<?php

include_once '../libs/bdConfig.php';
class ProductoInventario extends ActiveRecord\Model{
    private $id;
    private $nombre;
    private $marca;
    private $precio;
    private $proveedor;
    private $descripcion;
    private $cantidad;
    private $fecha_ingreso;
    private $hora_ingreso;
    private $estado;



}