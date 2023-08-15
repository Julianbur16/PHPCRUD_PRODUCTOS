<?php
/**
 * 
 * Mediante este archivo se hace la recepción de los datos enviados en el cuerpo del json
 * y la validación de que existan todos los campos, como se crea un nuevo producto
 * se tomo como fecha de creación y de actualización la fecha actual.
 */

 // llamada del modelo
require_once("../../Modelo/Products.php");

// creacion de nuevo objeto de tipo producto
$metodosproductos=new Productos;

//recepción del cuerpo de la petición
$json_data = file_get_contents('php://input');

//decodificación de json a array
$data = json_decode($json_data, true);

//verificación de campos
if(isset($data['nombre']) && isset($data['categoria']) && isset($data['precio'])){
    date_default_timezone_set('America/Bogota'); // se establece la zona horaria
    $fechaActual = date('Y-m-d H:i:s'); // extracción de fecha y hora
    $response=$metodosproductos->add($data['nombre'], $data['categoria'], $data['precio'], $fechaActual ,  $fechaActual ); // Agregar un nuevo registro mediante el modelo

    //Respuesta del modelo true si fue satisfactoria false si existe un error
    if($response){
        echo('Se ha agregado un nuevo producto');
    }else{
        echo('Ha ocurrido un error');
    }
    
}else{
    echo('Campos incompletos'); //aviso de campos incompletos
}


?>