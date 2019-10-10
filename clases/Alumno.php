<?php

class Alumno
{
    private $nombre ;
    private $apellido;
    private $codigoDeAlumno;

    public function __construct(string $nombre, string $apellido, int $codigoDeAlumno)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->codigoDeAlumno = $codigoDeAlumno;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function getcodigoDeAlumno()
    {
        return $this->codigoDeAlumno;
    }

    public function setcodigoDeAlumno( int $codigoDeAlumno)
    {
        $this->codigoDeAlumno = $codigoDeAlumno;
    }
    
    public function listarAlumnos($alumnos){
        echo "<ul>";
        foreach ($alumnos as $key => $value) {
            echo "<li>$key : $value </li>";
        }
        echo "</ul>";
    }

}

