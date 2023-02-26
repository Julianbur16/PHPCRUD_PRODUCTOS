<?php

require_once("../../conexion.php");
class Estudiante extends conection{

    public function __construct(){

        $this->db=parent::validar();
    }

    public function add($nombre, $apellido,$documento,$correo,$materia,$docentes,$promedio,$fecha){
        $statement=$this->db->prepare("INSERT INTO Estudiantes (Nombre, Apellido, Documento, Correo, Materia, Docentes, Promedio, Fecha) VALUES(:nombre, :apellido, :documento, :correo, :materia, :docentes, :promedio, :fecha)");
       
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        $statement->bindParam(":documento",$documento);
        $statement->bindParam(":correo",$correo);
        $statement->bindParam(":materia",$materia);
        $statement->bindParam(":docentes",$docentes);
        $statement->bindParam(":promedio",$promedio);
        $statement->bindParam(":fecha",$fecha);
        
        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/add.php");
        }
    }
    
    public function get(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Estudiantes");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    public function getByid($id){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Estudiantes WHERE ID = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

    public function delete($id){
        $statement=$this->db->prepare("DELETE FROM Estudiantes WHERE ID = :id");
        $statement->bindParam(':id',$id);

        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/delete.php");
        }
    }

    public function update($id, $nombre, $apellido,$documento,$correo,$materia,$docentes,$promedio,$fecha){
        $statement=$this->db->prepare("UPDATE Estudiantes SET Nombre = :nombre, Apellido=:apellido, Documento=:documento, Correo=:correo, Materia=:materia, Docentes=:docentes, Promedio=:promedio, Fecha=:fecha WHERE ID=:id");

        $statement->bindParam(":id",$id);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        $statement->bindParam(":documento",$documento);
        $statement->bindParam(":correo",$correo);
        $statement->bindParam(":materia",$materia);
        $statement->bindParam(":docentes",$docentes);
        $statement->bindParam(":promedio",$promedio);
        $statement->bindParam(":fecha",$fecha);

        if($statement->execute()){
            header("Location: ../Pages/index.php");
        }else{
            header("Location: ../Pages/edit.php");
        }
    }
    
}

?>