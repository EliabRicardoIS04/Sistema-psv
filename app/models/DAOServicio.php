<?php

include_once 'Servicio.php';

class DAOServicio{

    public static function agregar_servicio($servicio){
        try{
            return $servicio->save();
        } catch(Exception $error){
            throw new Exception("Error al guardar el servicio");
        }

    }

    public static function buscar_servicio($servicioId){
        try{
            $servicio = Servicio::find($servicioId);
            return $servicio;
        } catch(Exception $error){
            throw new Exception("Error al consultar el servicio con id : $servicioId");
        }

    }   

    public static function eliminar_servicio($servicioId){
        return Turno::delete_all(array('condition' => "servicioId = $servicioId"));
    }
    

    public static function modificar_servicio($servicio){
        return DAOTurno::agregar_turno($servicio);
    }

    public static function listar_servicio(){
        return servicio::all();
    }

    public static function listar_servicio_por_campo($nombre, $valor){
        return servicio::find('all',array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_servicio_por_sql($sql){
        return servicio::find_by_sql($sql);
    }
}