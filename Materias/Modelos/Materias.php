<?php

require_once("../../conexion.php");
class Materias extends conection{

    public function __construct(){

        $this->db=parent::validar();
    }

    public function add($nombre){
        $statement=$this->db->prepare("INSERT INTO Materias (Nombre) VALUES(:nombre)");

        $statement->bindParam(":nombre",$nombre);
        
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/add.php");
        }
    }
    
    public function get(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Materias");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getByid($id){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Materias WHERE ID = :di");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

    public function delete($id){
        $statement=$this->db->prepare("DELETE FROM Materias WHERE ID = :id");
        $statement->bindParam(':id',$id);
     
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/delete.php");
        }
    }

    public function update($id, $nombre){
        $statement=$this->db->prepare("UPDATE Materias SET Nombre=:nombre WHERE ID=:id");

        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":id",$id);
   
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/edit.php");
        }
    }

    
}

?>