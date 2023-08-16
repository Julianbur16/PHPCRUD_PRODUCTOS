<?php

/**
 * 
 * Mediante este archivo se hace el llamado al metodo get del modelo para
 * poder extraer la información de la base de datos se la trata y se hace 
 * la respuesta cuando se la solicite el front end
 * 
 */

  // llamada del modelo
require_once("../../Modelo/Products.php");

// creación de nuevo objeto de tipo producto
//$metodosproductos=new Productos;

// llamada del metodo get de la clase estudiante
//$rows=$metodosproductos->get();

// codificación de tipo array a json
//$jsonData = json_encode($rows);

// asignacion de header y impresión de la informacion
//header("Content-Type: application/json");
//echo $jsonData;
echo('si f');

?>