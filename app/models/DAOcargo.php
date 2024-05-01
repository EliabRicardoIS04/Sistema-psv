<?php

include_once "Cargo.php";

class DAOcargo
{
    public static function agregar_cargo($cargo)
    {
        try {
            return $cargo->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar el cargo");
        }
    }

    public static function buscar_cargo($cargoId)
    {
        try {
            $cargo = Cargo::find($cargoId);
            return $cargo;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el cargo con id : $cargoId");
        }
    }

    public static function eliminar_cargo($cargoId)
    {
        return Turno::delete_all(array('condition' => "cargoId = $cargoId"));
    }


    public static function modificar_cargo($cargo)
    {
        return DAOcargo::agregar_cargo($cargo);
    }

    public static function listar_cargo()
    {
        return cargo::all();
    }

    public static function listar_cargo_por_campo($nombre, $valor)
    {
        return cargo::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_cargo_por_sql($sql)
    {
        return cargo::find_by_sql($sql);
    }
}