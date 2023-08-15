<?php

/**
 * 
 * En este archivo se realiza la conexion 
 * a la base de datos utilizando PDO
 * 
 */

 //se declara la clase conexion
class conection{

  //se definen la variables de configuración
    protected $db;
    private $driver="mysql";
     private $host="localhost";
     private $usuario="root";
     private $bd="proyecto";
     private $password="";

  // se declara el metodo que valida la conexión
     public function validar(){
       try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $db=new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}",$this->usuario,$this->password,$options);
        return $db;
        
       } catch (PDOException $e) {
        echo("ha ocurrido un error".$e->getMessage());
       
       }

     
     }
     

}

?>