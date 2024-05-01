<?php

include_once '../libs/bdConfig.php';


class TrabajadorRh extends ActiveRecord\Model
{

    private $trabajadorRhId;
    private $sueldo;
    private $jornada;
    private $fecha_ingreso_sistema;
    private $hora_ingreso_sistema;
    private $persona;


    public function __construct($cedula)
    {   
        parent::__construct();
        $this->persona = new Persona();
    }

    public function getCedula(){
        return $this->persona->getCedula();
    }

}