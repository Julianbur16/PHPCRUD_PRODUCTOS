<?php

require_once("../Modelo/Docentes.php");
$metodo_Docente=new Docentes;

if($_POST){
    $id=$_POST["id"];

    $metodo_Docente->delete($id);
}else{
    header("Locate: ../../index.php");
}
?>