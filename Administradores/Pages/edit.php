<?php 
require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelo/Administradores.php");

$metodosadministradores=new Administradores;
$validarsession=new Usuarios;

$validarsession->validarSession();
$rowsAdministradores=$metodosadministradores->getByid($_GET['id']);

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
    <h1>Editar administrador</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
        <?php
        if($rowsAdministradores != null){
            foreach($rowsAdministradores as $rowsAdministradores){

        ?>
        <input type="text" name="Usuario" placeholder="Usuario" require="" autocomplete="off" value="<?php echo($rowsAdministradores['Usuario'])?>"><br>
        <input type="text" name="Password" placeholder="Password" require="" autocomplete="off" value="<?php echo($rowsAdministradores['Password'])?>"><br>
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off" value="<?php echo($rowsAdministradores['Nombre'])?>"><br>
        <input type="text" name="Apellido" placeholder="Apellido" require="" autocomplete="off" value="<?php echo($rowsAdministradores['Apellido'])?>"><br>
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