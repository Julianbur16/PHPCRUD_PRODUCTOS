<?php

require_once("../Modelo/Administradores.php");
$metodo_Administrador=new Administradores;

if($_POST){
    $id=$_POST["id"];
    $usuario=$_POST["Usuario"];
    $password=$_POST["Password"];
    $nombre=$_POST["Nombre"];
    $apellido=$_POST["Apellido"];

    $metodo_Administrador->update($id,$usuario, $password, $nombre, $apellido);
}else{
    header("Locate: ../../index.php");
}
?>