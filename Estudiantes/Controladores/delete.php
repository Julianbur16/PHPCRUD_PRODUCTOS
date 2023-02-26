<?php

require_once("../Modelo/Estudiantes.php");
$metodosestudiante=new Estudiante;

if($_POST){
    $id=$_POST["id"];

    $metodosestudiante->delete($id);
}else{
    header("Locate: ../../index.php");
}
?>