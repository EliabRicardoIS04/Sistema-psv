


<?php

include_once '../libs/bdConfig.php';

class AdministradorSitio extends ActiveRecord\Model{

    private $administradorId;
    private $sueldo;
    private $horario;
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