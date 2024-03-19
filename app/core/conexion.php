<?php


class conectar{
    protected $dbh;


    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:localhost,dbname=proyectofinal","luis","12345");
            return $conectar;
        }catch(Exception $e){
            print "Error BD".$e->getMessage();
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAME 'utf8'");
    }

}