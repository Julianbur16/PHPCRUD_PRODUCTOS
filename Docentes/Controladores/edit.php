<?php

require_once("../Modelo/Docentes.php");
$metodo_Docente=new Docentes;

if($_POST){
    $id=$_POST["id"];
    $usuario=$_POST["Usuario"];
    $password=$_POST["Password"];
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];

    $metodo_Docente->update($id,$usuario, $password, $nombre, $apellido);
}else{
    header("Locate: ../../index.php");
}
?>