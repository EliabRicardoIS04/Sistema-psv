<?php

include_once '../libs/bdConfig.php';

class Pedido extends ActiveRecord\Model
{
    private $pedidoId;
    private $hora;
    private $fecha;
    private $detallecarritoCarritoId;
    private $detallecarritoServicioId;
    private $detallecarritoProductoId;
    private $clienteId;


}