<?php
include_once '../libs/bdConfig.php';
class Cliente extends ActiveRecord\Model

{
    private $clienteId;
    private $ciudad;
    private $departamento;
    private $barrio;
    private $carritosId;
    private $facturasid;
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