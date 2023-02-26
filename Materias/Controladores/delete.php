<?php

require_once("../Modelos/Materias.php");
$metodosestudiante=new Materias;

if($_POST){
    $id=$_POST["id"];

    $metodosestudiante->delete($id);
}else{
    header("Locate: ../../index.php");
}
?>