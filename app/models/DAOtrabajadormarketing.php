<?php


include_once 'TrabajadorMarketing.php';

class DAOtrabajadorMarketing {
    public static function agregar_trabajador($trabajador)
    {
        try {
            return $trabajador->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar trabajador");
        }
    }

    public static function buscar_trabajador($trabajadortrabajadorId)
    {
        try {
            $trabajador =Trabajadormarketing::find($trabajadortrabajadorId);
            return $trabajador;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el trabajador con id : $trabajadortrabajadorId");
        }
    }

    public static function eliminar_trabajador($trabajadortrabajadorId)
    {
        return Trabajadormarketing::delete_all(array('condition' => "trabajadortrabajadorId = $trabajadortrabajadorId"));
    }


    public static function modificar_trabajador($trabajador)
    {
        return DAOtrabajadorMarketing::agregar_trabajador($trabajador);
    }

    public static function listar_trabajador()
    {
        return Trabajadormarketing::all();
    }

    public static function listar_trabajador_por_campo($nombre, $valor)
    {
        return Trabajadormarketing::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_trabajador_por_sql($sql)
    {
        return Trabajadormarketing::find_by_sql($sql);
    }
}