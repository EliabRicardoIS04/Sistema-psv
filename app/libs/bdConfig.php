<?php

require_once 'php-activerecord/ActiveRecord.php';
 
 ActiveRecord\Config::initialize(function($cfg)
 {
    $cfg->set_model_directory(__DIR__ . '/../models');
     $cfg->set_connections(array(
         'development' => 'mysql://luis:12345@localhost/service_security'));
 });



