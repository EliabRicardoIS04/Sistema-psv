<?php

include_once "AdministradorSitio.php";

class DAOadministradorsitio {
    public static function agregar_administradorsitio($administradorsitio)
    {
        try {
            return $administradorsitio->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el administradorsitio");
        }
    }

    public static function buscar_administradorsitio($administradorsitioId)
    {
        try {
            $administradorsitio = administradorsitio::find($administradorsitioId);
            return $administradorsitio;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el administradorsitio con id : $administradorsitioId");
        }
    }

    public static function eliminar_administradorsitio($administradorsitioId)
    {
        return Turno::delete_all(array('condition' => "administradorsitioId = $administradorsitioId"));
    }


    public static function modificar_administradorsitio($administradorsitio)
    {
        return DAOadministradorsitio::agregar_administradorsitio($administradorsitio);
    }

    public static function listar_administradorsitio()
    {
        return administradorsitio::all();
    }

    public static function listar_administradorsitio_por_campo($nombre, $valor)
    {
        return administradorsitio::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_administradorsitio_por_sql($sql)
    {
        return administradorsitio::find_by_sql($sql);
    }
    
}