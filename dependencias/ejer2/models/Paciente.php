<?php

require "vendor/autoload.php";
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Paciente{
    private $nombre, $apellido, $edad, $log;



    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;

        $this->log = new Logger('Paciente');
        $this->log->pushHandler(new StreamHandler('app.log', Logger::DEBUG));
    }

    public function curar(){
        $this->log->debug('curar');
    }
    public function enfermar(){
        $this->log->warning('enfermar');
    }

}





?>