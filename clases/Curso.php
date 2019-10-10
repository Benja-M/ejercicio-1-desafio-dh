<?php

class Curso
{
    private $nombre ;
    private $codigoDeCurso ;
    private $profesorTitular;
    private $profesorAdjunto;
    private $cupoDeAlumnos;
    private $listaDeInscriptos;
    


    public function __construct(int $codigoDeCurso,string $nombre, string $profesorTitular, string $profesorAdjunto, int $cupoDeAlumnos, array $listaDeInscriptos)
    {
        $this->nombre = $nombre;
        $this->codigoDeCurso = $codigoDeCurso;
        $this->profesorTitular = $profesorTitular;
        $this->profesorAdjunto = $profesorAdjunto;
        $this->cupoDeAlumnos = $cupoDeAlumnos;
        $this->listaDeInscriptos = $listaDeInscriptos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

    }
 
    public function getcodigoDeCurso()
    {
        return $this->codigoDeCurso;
    }

    public function setcodigoDeCurso(int $codigoDeCurso)
    {
        $this->codigoDeCurso = $codigoDeCurso;

    }

    public function getprofesorTitular()
    {
        return $this->profesorTitular;
    }

    public function setprofesorTitular(string $profesorTitular)
    {
        $this->profesorTitular = $profesorTitular;

    }

    public function getprofesorAdjunto()
    {
        return $this->profesorTitular;
    }

    public function setprofesorAdjunto(string $profesorAdjunto)
    {
        $this->profesorAdjunto = $profesorAdjunto;

    }
    
    public function getcupoDeAlumnos()
    {
        return $this->cupoDeAlumnos;
    }

    public function setcupoDeAlumnos(int $cupoDeAlumnos)
    {
        $this->cupoDeAlumnos = $cupoDeAlumnos;

    }
    
    public function getlistaDeInscriptos()
    {
        return $this->listaDeInscriptos;
    }

    public function setlistaDeInscriptos(array $listaDeInscriptos)
    {
        foreach ($listaDeInscriptos as $value) {
            $this->listaDeInscriptos[] = $value;
        }
        

    }
    
    

}

