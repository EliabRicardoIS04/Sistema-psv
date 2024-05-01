<?php

include_once 'Pedido.php';

class DAOpedido
{

    public static function agregar_pedido($pedido)
    {
        try {
            return $pedido->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el pedido");
        }
    }

    public static function buscar_pedido($pedidoId)
    {
        try {
            $pedido = pedido::find($pedidoId);
            return $pedido;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el pedido con id : $pedidoId");
        }
    }

    public static function eliminar_pedido($pedidoId)
    {
        return Turno::delete_all(array('condition' => "pedidoId = $pedidoId"));
    }


    public static function modificar_pedido($pedido)
    {
        return DAOpedido::agregar_pedido($pedido);
    }

    public static function listar_pedido()
    {
        return pedido::all();
    }

    public static function listar_pedido_por_campo($nombre, $valor)
    {
        return pedido::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_pedido_por_sql($sql)
    {
        return pedido::find_by_sql($sql);
    }
}
