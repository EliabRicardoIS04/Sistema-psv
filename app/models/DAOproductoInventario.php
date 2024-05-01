<?php


include_once 'ProductoInventario.php';

class DAOproductoInventario {


    public static function agregar_producto($productoInventario)
    {
        try {
            return $productoInventario->save();
        } catch (Exception $error) {
            throw new Exception("Error al guardar producto");
        }
    }

    public static function buscar_producto($productoInventarioId)
    {
        try {
            $producto = ProductoInventario::find($productoInventarioId);
            return $producto;
        } catch (Exception $error) {
            throw new Exception("Error al consultar el producto con id : $productoInventarioId");
        }
    }

    public static function eliminar_producto($productoInventarioId)
    {
        return Turno::delete_all(array('condition' => "productoInventarioId = $productoInventarioId"));
    }


    public static function modificar_producto($producto)
    {
        return DAOproductoInventario::agregar_producto($producto);
    }

    public static function listar_producto()
    {
        return ProductoInventario::all();
    }

    public static function listar_producto_por_campo($nombre, $valor)
    {
        return ProductoInventario::find('all', array("conditions" => "$nombre LIKE '%$valor%'"));
    }
    public static function listar_producto_por_sql($sql)
    {
        return ProductoInventario::find_by_sql($sql);
    }
}