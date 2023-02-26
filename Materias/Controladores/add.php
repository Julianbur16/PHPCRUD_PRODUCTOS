<?php

require_once("../Modelos/Materias.php");
$metodosestudiante=new Materias;

if($_POST){
    $nombre=$_POST["Nombre"];

    $metodosestudiante->add($nombre);
}else{
    header("Locate: ../../index.php");
}
?>