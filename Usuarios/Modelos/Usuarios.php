<?php

require_once("../../conexion.php");
session_start();
class Usuarios extends conection{
    
    public function __construct(){

        $this->db=parent::validar();
    }

    public function login($usuario, $password){
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE USUARIO=:usuario AND PASSWORD=:password");
        $statement->bindParam(":usuario",$usuario);
        $statement->bindParam(":usuario",$usuario);
        $statement->execute();

        if($statement->rowCount()==1){
            $result=$statement->fetch();
            $_SESSION["Nombre"]=$result["Nombre"]."".$result["Apellido"];
            $_SESSION["Id"]=$result["Id"];
            $_SESSION["Perfil"]=$result["Perfil"];
            return true;
        }
        return false;
    }
    
}


?>