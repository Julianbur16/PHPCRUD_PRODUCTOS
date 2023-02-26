<?php

require_once("../Modelos/Materias.php");
$metodosestudiante=new Materias;

if($_POST){
    $id=$_POST["id"];
    $nombre=$_POST["Nombre"];

    $metodosestudiante->update($id,$nombre);
}else{
    header("Locate: ../../index.php");
}
?>