<?php

require_once("../../conexion.php");
session_start();
class Usuarios extends conection{
    
    public function __construct(){

        $this->db=parent::validar();
    }

    public function login($usuario, $password){
        $statement=$this->db->prepare("SELECT * FROM Usuarios WHERE Usuario=:Usuario AND Password=:Password");
        $statement->bindParam(":Usuario",$usuario);
        $statement->bindParam(":Password",$password);
        $statement->execute();

        if($statement->rowCount()==1){
            $result=$statement->fetch();
            $_SESSION["Nombre"]=$result["Nombre"]." ".$result["Apellido"];
            $_SESSION["Id"]=$result["ID"];
            $_SESSION["Perfil"]=$result["Perfil"];
            return true;
        }
        return false;
    }

    public function getname(){
        return $_SESSION["Nombre"];
    }
    public function getid(){
        return $_SESSION["Id"];
    }
    
    public function getperfil(){
        return $_SESSION["Perfil"];
    }

    public function validarSession(){
        if($_SESSION["Id"] == null){
            header("Location: ../../index.php");
        }
    }

    public function validarSessionAdministrador(){
        if($_SESSION["Id"] != null){
            if($_SESSION["Perfil" == "Docente"]){
                header("Location: ../../Estudiantes/Pages/index.php");
            }else{
                header("Location: ../../index.php");
            }
        }
    }
}


?>