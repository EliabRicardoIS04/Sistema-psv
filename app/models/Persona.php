<?php
include_once '../libs/bdConfig.php';

class Persona extends ActiveRecord\Model
{
    private $cedula;
    private $nombres;
    private $apellidos;
    private $correo;
    private $contrasena;
    private $usuario;
    private $celular;
    private $telefono;
    private $estado;


    public function getCedula(){
        return $this->cedula;
    }

}