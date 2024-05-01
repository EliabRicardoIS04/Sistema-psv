<?php
include_once 'Persona.php';

class DAOpersona{

    public static function agregar_Persona($Persona)
    {
        try {
            return $Persona->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el Persona");
        }
    }

    public static function buscar_Persona($cedula)
    {
        try {
            $Persona = Persona::find($cedula);
            return $Persona;
        } catch (Exception $error) {
            throw new Exception("Error al consultar la Persona con cedula : $cedula");
        }
    }

    public static function eliminar_Persona($cedula)
    {
        return Turno::delete_all(array('condition' => "cedula = $cedula"));
    }


    public static function modificar_Persona($Persona)
    {
        return DAOPersona::agregar_Persona($Persona);
    }

    public static function listar_Personas()
    {
        return Persona::all();
    }

    public static function listar_Persona_por_campo($nombre, $valor)
    {
        return Persona::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_Persona_por_sql($sql)
    {
        return Persona::find_by_sql($sql);
    }
}