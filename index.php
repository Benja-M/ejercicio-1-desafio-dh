<?php

require('strict_types=1');
require_once("autoload.php");
$alumnos =["Benjamin","Javier","Gloria","Mauro"];
$profesores =["Daniel","Hernan","Juan"];
$alumno1 = new Alumno(1,"1","2","3");
$profesor1 = new Profesor(1,"1","2","3");
var_dump($alumno1);
var_dump($profesor1);

$alumno1->listarAlumnos($alumnos);

$profesor1->listarProfesores($profesores);




//$administradorSistema = new Administrador();





//$alumno2 = new Alumno(2,"1", "2", "3");

//benjamin recuerda colocar bien los tipos de datos para crear el curso, ojo que deben tambien enviar la lista de alumnos y eso es un array
$curso = new Curso(22,"FullStack","$profesor1","$profesor2","30","[$alumnos]",5);



//Benjamin por favor debes pasar los datos completos y en el mismo orden que tienes el constructor
$profesor1 = new Profesor("Daniel", "Fuentes", "3 años", 717);

//$administradorSistema->setAlumnos($alumno1);
//$administradorSistema->setAlumnos($alumno2);
//$administradorSistema->setProfesores($profesor1);
//$administradorSistema->setCursos($curso);
//dd($administradorSistema);

// dd($alumno2->getApellido());

//dd($alumno1->getNombre());
//dd($curso);
//dd($profesor1);
// dd($profesor1->getApellido());
?>
