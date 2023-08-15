<?php
/**
 * En este archivo se crea el modelo para 
 * interactuar con la base de datos de Productos
 */

 //Se llama al archivo que realiza la conexion con la base de datos
require_once("conexion.php");

//Se crea la clase correspondiente
class Productos extends conection{

    //En el constructor se valida la conexion
    public function __construct(){

        $this->db=parent::validar();
    }

    //Se establece el metodo por el cual se añaden los productos
    public function add($names, $category,$price,$createdat,$updateat){
        $statement=$this->db->prepare("INSERT INTO Productos (name, category, price, createdat, updateat) VALUES(:nombre, :categoria, :precio, :creado, :actualizado)");
       
        $statement->bindParam(":nombre",$names);
        $statement->bindParam(":categoria",$category);
        $statement->bindParam(":precio",$price);
        $statement->bindParam(":creado",$createdat);
        $statement->bindParam(":actualizado",$updateat);

        if($statement->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    //Se establece el metodo por el cual se listan los productos
    public function get(){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Productos");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

    //Se establece el metodo por el cual se obtiene un producto por su id
    public function getByid($id){
        $rows= null;
        $statement=$this->db->prepare("SELECT * FROM Productos WHERE code = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;

    }

    //Se establece el metodo por el cual se borrean o eliminan productos
    public function delete($id){
        $statement=$this->db->prepare("DELETE FROM Productos WHERE code = :id");
        $statement->bindParam(':id',$id);

        if($statement->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Se establece el metodo por el cual se actualizan los datos de un producto
    public function update($id, $names, $category,$price,$createdat,$updateat){
        $statement=$this->db->prepare("UPDATE Productos SET name = :nombre, category=:categoria, price=:precio, createdat=:creado, updateat=:actualizado WHERE code=:id");

        $statement->bindParam(":id",$id);
        $statement->bindParam(":nombre",$names);
        $statement->bindParam(":categoria",$category);
        $statement->bindParam(":precio",$price);
        $statement->bindParam(":creado",$createdat);
        $statement->bindParam(":actualizado",$updateat);

        if($statement->execute()){
            return true;
        }else{
            return false;
        }
    }
    
}

?>