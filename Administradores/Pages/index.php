<?php 
require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelo/Administradores.php");

$metodosadministradores=new Administradores;
$validarsession=new Usuarios;

$validarsession->validarSession();
$rowsAdministradores=$metodosadministradores->get();

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
    <header>
        <h1>Administradores en curso</h1>
    </header>
    <a href="add.php" target="_blank"> Registrar administrador</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Perfil</th>
            <th>acciones</th>
        </tr>
        <?php
        if($rowsAdministradores != null){
            foreach($rowsAdministradores as $rowsAdministradores){
        ?>
        <tr>
            <td><?php echo($rowsAdministradores['ID'])?></td>
            <td><?php echo($rowsAdministradores['Usuario'])?></td>
            <td><?php echo($rowsAdministradores['Password'])?></td>
            <td><?php echo($rowsAdministradores['Nombre'])?></td>
            <td><?php echo($rowsAdministradores['Apellido'])?></td>
            <td><?php echo($rowsAdministradores['Perfil'])?></td>
            <td>
                <a href="edit.php? id= <?php echo($rowsAdministradores['ID'])?>" target="_blank">Editar</a><br>
                <a href="delete.php? id= <?php echo($rowsAdministradores['ID'])?>" target="_blank">Borrar</a>
            </td>
        </tr>

        <?php
            }
        }
        ?>
    </table>
</body>

</html>