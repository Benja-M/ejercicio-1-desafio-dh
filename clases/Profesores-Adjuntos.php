<?php

class ProfesorAdjunto extends Profesor
{
    private $cantHoras;

    public function __construct($nombre, $apellido,$antiguedad,$codigoDeProfesor,int $cantHoras)
    {
        parent::__construct($nombre, $apellido,$antiguedad,$codigoDeProfesor);
        $this->cantHoras = $cantHoras;
    }
    public function getCantHoras()
    {
        return $this->cantHoras;
    }

    public function setCantHoras(int $cantHoras)
    {
        $this->cantHoras = $cantHoras;

        return $this;
    }
}