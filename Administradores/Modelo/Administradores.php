<?php

require_once("../../conexion.php");
class Administradores extends conection{

    public function __construct(){

        $this->db=parent::validar();
    }

    public function add($usuario, $password, $nombre, $apellido){
        $statement=$this->db->prepare("INSERT INTO Usuarios (Usuario, Password, Nombre, Apellido, Perfil) VALUES(:usuario, :password, :nombre, :apellido,'Administrador')");
        $statement->bindParam(":usuario",$usuario);
        $statement->bindParam(":password",$password);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/add.php");
        }
    }
    
    public function get(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getByid($id){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador' AND  ID = :di");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

    public function delete($id){
        $statement=$this->db->prepare("DELETE FROM usuarios WHERE ID = :id");
        $statement->bindParam(':id',$id);
    
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/delete.php");
        }
    }

    public function update($id, $usuario, $password, $nombre, $apellido){
        $statement=$this->db->prepare("UPDATE Usuarios SET Usuario=:usuario, Password=:password, Nombre=:nombre, Apellido=:apellido,Perfil='Administrador' WHERE ID=:id");
        $statement->bindParam(":usuario",$usuario);
        $statement->bindParam(":password",$password);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header("Location: ../Pages/index");
        }else{
            header("Location: ../Pages/edit.php");
        }
    }
}


?>