<?php

include_once 'Turno.php';


class DAOTurno{
    
    public static function agregar_turno($turno){
        try{
            return $turno->save();
        } catch(Exception $error){
            throw new Exception("Error al guardar el turno ".$error);
        }

    }

    public static function buscar_turno($turnoId){
        try{
            $turno = Turno::find($turnoId);
            return $turno;
        } catch(Exception $error){
            throw new Exception("Error al consultar el turno con id : $turnoId");
        }

    }   

    public static function eliminar_turno($turnoId){
        return Turno::delete_all(array('condition' => "turnoId = $turnoId"));
    }
    

    public static function modificar_turno($turno){
        return DAOTurno::agregar_turno($turno);
    }

    public static function listar_turno(){
        return Turno::all();
    }

    public static function listar_turno_por_campo($nombre, $valor){
        return Turno::find('all',array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_turno_por_sql($sql){
        return Turno::find_by_sql($sql);
    }


}