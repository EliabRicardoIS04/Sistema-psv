<?php

include_once 'Cliente.php';

class DAOCliente
{

    public static function agregar_servicio($cliente)
    {
        try {
            return $cliente->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el cliente");
        }
    }

    public static function buscar_servicio($servicioId)
    {
        try {
            $servicio = Servicio::find($servicioId);
            return $servicio;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el servicio con id : $servicioId");
        }
    }

    public static function eliminar_servicio($servicioId)
    {
        return Turno::delete_all(array('condition' => "servicioId = $servicioId"));
    }


    public static function modificar_servicio($servicio)
    {
        return DAOTurno::agregar_turno($servicio);
    }

    public static function listar_servicio()
    {
        return servicio::all();
    }

    public static function listar_servicio_por_campo($nombre, $valor)
    {
        return servicio::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_servicio_por_sql($sql)
    {
        return servicio::find_by_sql($sql);
    }
}
