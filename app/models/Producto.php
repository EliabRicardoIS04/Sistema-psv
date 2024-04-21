<?php
include_once '../libs/bdConfig.php';

class Producto extends ActiveRecord\Model
{
    private $productoId;
    private $descripcion;
    private $nombre;
    private $urlImagen;
}