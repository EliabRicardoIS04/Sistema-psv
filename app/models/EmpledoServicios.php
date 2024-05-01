<?php
include_once '../libs/bdConfig.php';

class Empleadoservicio extends ActiveRecord\Model
{
    private $empleadoServicioId;
    private $sueldo;
    private $jornada;
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