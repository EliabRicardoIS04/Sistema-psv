
<?php

include_once '../libs/bdConfig.php';                                           

class Turno extends ActiveRecord\Model
{
    private $turnoId;
    private $jornada;
    private $horaInicio;
    private $horaFin;
    private $fecha;

    public function __construct($turnoId,$jornada,$horaInicio,$horaFin,$fecha) {
        $this->turnoId = $turnoId;
        $this->jornada = $jornada;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
        $this->fecha = $fecha;
    }


    public function getTurnoId() {
        return $this->turnoId;
    }

    public function setTurnoId($turnoId) {
        $this->turnoId = $turnoId;
    }

    // Getter y Setter para jornada
    public function getJornada() {
        return $this->jornada;
    }

    public function setJornada($jornada) {
        $this->jornada = $jornada;
    }

    // Getter y Setter para horaInicio
    public function getHoraInicio() {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    // Getter y Setter para horaFin
    public function getHoraFin() {
        return $this->horaFin;
    }

    public function setHoraFin($horaFin) {
        $this->horaFin = $horaFin;
    }

    // Getter y Setter para fecha
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

}