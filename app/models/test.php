<?php

include_once 'DAOTurno.php';
include_once 'Turno.php';


$turn = new Turno(5645,"mañana","7:00","8:00","2024/2/24");
#$turn->setTurnoId(3554);
#$turn->setJornada("mañana");
#$turn->setHoraFin("7:00 pm");
#$turn->setFecha("2024/2/12");
#$turn->setHoraInicio("8:00 AM");#



$t = new DAOTurno();
//$t->agregar_turno($turn);


$t->listar_turno();