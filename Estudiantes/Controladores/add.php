<?php

require_once("../Modelo/Estudiantes.php");
$metodosestudiante=new Estudiante;

if($_POST){
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];
    $documento=$_POST["Documento"];
    $correo=$_POST["Gmail"];
    $materia=$_POST["Materia"];
    $docentes=$_POST["Docente"];
    $promedio=$_POST["Promedio"];
    $fecha=$_POST["Fecha"];
    $metodosestudiante->add($nombre, $apellido,$documento,$correo,$materia,$docentes,$promedio,$fecha);
}else{
    header("Locate: ../../index.php");
}
?>