<?php

require_once("conexion.php");
class Getdocentesmaterias extends conection{

    public function __construct(){

        $this->db=parent::validar();
    }

    
    public function getdocentes(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Usuarios WHERE Perfil = 'Docente'");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getmaterias(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Materias");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
    
}

?>