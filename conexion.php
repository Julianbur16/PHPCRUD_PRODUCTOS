<?php

class conection{
    protected $db;
    private $driver="mysql";
     private $host="localhost";
     private $usuario="root";
     private $bd="notes";
     private $password="";

    
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