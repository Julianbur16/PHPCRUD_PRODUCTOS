<?php

/**
 * En este arcrivo se distingen los diferentes 
 * metodos de entrada para su redireccion al 
 * controlador correspondiente y tambien para 
 * la actualizacion de datos
 */
require_once("../Modelo/Products.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    //entra al controlador relaciona el metodo get
    header("Location: ../Controlador/get");
    

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //entra al controlador relaciona el metodo post
    header("Location: ../Controlador/post");

} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    //Identifica  el id enviado a travez de url
    $id = $_GET['code'];

    // se obtiene el cuerpo de la peticion para actualizar y se la decodifica
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    //se crea una nueva clase del objeto producto
    $metodosproductos = new Productos;

    //se utiliza el metodo por el cual encuentra el objeto asignado al id
    $object = $metodosproductos->getByid($id);

    //Si el objeto existe con el id o code 
    if (isset($object)) {
        //Comprobado se extrae la fecha de creación
        $fechacreate = $object[0]['createdat'];

        //se comprueba que todos los campos esten completos
        if(isset($data['nombre']) && isset($data['categoria']) && isset($data['precio'])){

            date_default_timezone_set('America/Bogota'); // se establece la zona horaria
            $fechaActual = date('Y-m-d H:i:s'); // extracción de fecha y hora

            //Se realiza la llamada a la funcion update del modelo productos
            $status=$metodosproductos->update($id, $data['nombre'], $data['categoria'], $data['precio'], $fechacreate,$fechaActual);

            //Si la respuesta de la llamada es afirmativa
            if($status){

                echo('Se a actualizado satisfactoriamente');

            }else{

                echo('Ha ocurrido un error');
            }

        }else{
            echo('Campos incompletos');
        }
    } else {
        echo ('No existe objeto con id especificado');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    //Realiza la llamada al modelo y elimina la fila con el code designado
    $id = $_GET['code'];
    $metodosproductos = new Productos;
    $response = $metodosproductos->delete($id);

    if ($response) {
        echo ('Se ha eliminado satisfactoriamente el producto');
    } else {
        echo ('Ha ocurrido un error');
    }
} else {

    // si se inicializa otro tipo de metodos
    http_response_code(405);
    echo "Método no permitido";
}
