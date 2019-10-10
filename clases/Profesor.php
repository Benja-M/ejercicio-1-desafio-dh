<?php

class Profesor
{
    private $nombre;
    private $apellido;
    private $antiguedad;
    private $codigoDeProfesor;

    public function __construct(string $nombre, string $apellido, int $antiguedad, int $codigoDeProfesor)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->antiguedad = $antiguedad;
        $this->codigoDeProfesor = $codigoDeProfesor;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setAntiguedad(int $antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    public function getcodigoDeProfesor()
    {
        return $this->codigoDeProfesor;
    }

    public function setcodigoDeProfesor(int $codigoDeProfesor)
    {
        $this->codigoDeProfesor = $codigoDeProfesor;

        return $this;
    }
    
    public function listarProfesores($profesores){
        echo "<ul>";
        foreach ($profesores as $key => $value) {
            echo "<li>$key : $value </li>";
        }
        echo "</ul>";
    }
}