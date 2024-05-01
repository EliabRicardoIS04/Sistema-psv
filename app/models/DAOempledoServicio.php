<?php

include_once "EmpleadoServicios.php";

class DAOempleadoservicio {

    public static function agregar_empleadoservicio($empleadoservicio)
    {
        try {
            return $empleadoservicio->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el empleadoservicio");
        }
    }

    public static function buscar_empleadoservicio($empleadoservicioId)
    {
        try {
            $empleadoservicio = empleadoservicio::find($empleadoservicioId);
            return $empleadoservicio;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el empleadoservicio con id : $empleadoservicioId");
        }
    }

    public static function eliminar_empleadoservicio($empleadoservicioId)
    {
        return Turno::delete_all(array('condition' => "empleadoservicioId = $empleadoservicioId"));
    }


    public static function modificar_empleadoservicio($empleadoservicio)
    {
        return DAOempleadoservicio::agregar_empleadoservicio($empleadoservicio);
    }

    public static function listar_empleadoservicio()
    {
        return empleadoservicio::all();
    }

    public static function listar_empleadoservicio_por_campo($nombre, $valor)
    {
        return empleadoservicio::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_empleadoservicio_por_sql($sql)
    {
        return empleadoservicio::find_by_sql($sql);
    }
}