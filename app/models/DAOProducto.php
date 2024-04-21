<?php
class Producto extends Conectar{

    public function get_producto(){
        $conectar = parent::Conexion();
        parent::set_name();
        $sql ="SELECT * FROM productos WHERE estado = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }


    public function get_producto_x_id($id_producto){
        $conectar = parent::Conexion();
        parent::set_name();
        $sql ="SELECT * FROM productos WHERE ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$id_producto);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_producto($id_producto){
        $conectar = parent::Conexion();
        parent::set_name();
        $sql ="UPDATE producto
                SET
                   estado = 0 
                
                WHERE 
                    ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$id_producto);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }


    public function insert_producto($descripcion, $imagen,$nombre){
        $conectar = parent::Conexion();
        parent::set_name();
        $sql ="INSERT INTO PRODUCTOS(DESCRIPCION, IMAGEN,NOMBRE) VALUES('$descripcion','$imagen','$nombre')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    
    }

    public function update_producto($nombre, $descripcion, $imagen){
        $conectar = parent::Conexion();
        parent::set_name();
        $sql ="UPDATE producto SET descripcion =?,imagen=?, nombre=? WHERE ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1,$descripcion);
        $sql->bindValue(2,$imagen);
        $sql->bindValue(3,$nombre);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

}