<?php

require_once("../Modelos/Usuarios.php");
$Usuario =$_POST["Usuario"];
$password=$_POST["Contrasena"];


$login=new Usuarios();

if($login->login($Usuario,$password)){
    echo($login->getid()."<br>");
    echo($login->getname()."<br>");
    echo($login->getperfil()."<br>");
}else{
    header("Location: ../../index.php");
}

?>