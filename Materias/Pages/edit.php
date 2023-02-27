<?php

require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelos/Materias.php");

$metodosestudents=new Usuarios;
$metodosestudents->validarSession();

$metodos_materias=new Materias;

$namesByid=$metodos_materias->getByid($_GET['id']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System notes</title>
</head>
<body>
    <h1>Editar Materia</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
        <?php 
        if($namesByid != null){
            foreach($namesByid as $namesByid){
        ?>
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off" value="<?php echo($namesByid['Nombre']) ?>"><br>

        <?php
            }
        }
        ?>
        <input type="button" value="CANCELAR" id="button_cancelar"><br>
        <input type="submit" value="GUARDAR"><br>
    </form>
    <script type="text/javascript" src="../../Metodo_redirigir.js"> </script>
</body>
</html>