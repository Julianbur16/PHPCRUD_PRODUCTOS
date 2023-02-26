<?php

require_once("../Modelo/Administradores.php");
$metodo_Administrador=new Administradores;

if($_POST){
    $id=$_POST["id"];

    $metodo_Administrador->delete($id);
}else{
    header("Locate: ../../index.php");
}
?>