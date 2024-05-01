<?php

include_once 'Cliente.php';

class DAOCliente
{

    public static function agregar_cliente($cliente)
    {
        try {
            return $cliente->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el cliente");
        }
    }

    public static function buscar_cliente($clienteId)
    {
        try {
            $cliente = Cliente::find($clienteId);
            return $cliente;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el cliente con id : $clienteId");
        }
    }

    public static function eliminar_cliente($clienteId)
    {
        return Cliente::delete_all(array('condition' => "clienteId = $clienteId"));
    }


    public static function modificar_cliente($cliente)
    {
        return DAOCliente::agregar_cliente($cliente);
    }

    public static function listar_cliente()
    {
        return Cliente::all();
    }

    public static function listar_cliente_por_campo($nombre, $valor)
    {
        return Cliente::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_cliente_por_sql($sql)
    {
        return Cliente::find_by_sql($sql);
    }
    
}
