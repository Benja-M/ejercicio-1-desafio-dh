<?php

class ProfesorTitular extends Profesor{
    private $especialidad;

    public function __construct($nombre, $apellido,$antiguedad,$codigoDeProfesor, string $especialidad)
    {   
        parent::__construct($nombre, $apellido,$antiguedad,$codigoDeProfesor);
        $this->especialidad = $especialidad;
    } 
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad( string $especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }
}