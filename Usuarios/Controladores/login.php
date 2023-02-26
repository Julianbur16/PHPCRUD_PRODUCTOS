<?php

require_once("../Modelos/Usuarios.php");


if($_POST){
    $Usuario =$_POST["Usuario"];
    $password=$_POST["Contrasena"];
    $login=new Usuarios();
    
    if($login->login($Usuario,$password)){
        header("Location: ../../Administradores/Pages/index.php");
    }else{
        header("Location: ../../index.php");
    }
}else{
    header("Location: ../../index.php");
}




?>