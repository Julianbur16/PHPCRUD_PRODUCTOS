<?php

require_once("../../Usuarios/Modelos/Usuarios.php");


$metodosestudents=new Usuarios;
$metodosestudents->validarSession();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Style_Materias/add/Style_add.css" >
    <title>System notes</title>
</head>
<body>
    <h1>Agregar Materia</h1>
    <form action="../Controladores/add.php" method="POST">
        <input type="hidden" name="id" value="">
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off"><br>
        <input type="button" value="CANCELAR" id="button_cancelar">
        <input type="submit" value="GUARDAR"><br>
    </form>
    <script type="text/javascript" src="../../Metodo_redirigir.js"> </script>
</body>
</html>