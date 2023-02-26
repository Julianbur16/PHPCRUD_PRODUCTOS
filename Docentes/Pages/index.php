<?php

require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelo/Docentes.php");

$modelouser=new Usuarios;
$modelouser->validarSession();

$modelo_docentes=new Docentes;
$info_teacher=$modelo_docentes->get();
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
        <h1>Docentes en curso</h1>
    </header>
    <a href="add.php" target="_blank"> Registrar docente</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Perfil</th>
            <th>acciones</th>
        </tr>
        <?php
        if($info_teacher != null){
            foreach($info_teacher as $info_teacher){

        ?>
        <tr>
            <td><?php echo($info_teacher['ID'])?></td>
            <td><?php echo($info_teacher['Usuario'])?></td>
            <td><?php echo($info_teacher['Password'])?></td>
            <td><?php echo($info_teacher['Nombre'])?></td>
            <td><?php echo($info_teacher['Apellido'])?></td>
            <td><?php echo($info_teacher['Perfil'])?></td>
            <td>
                <a href="edit.php? id= <?php echo($info_teacher['ID'])?>" target="_blank">Editar</a><br>
                <a href="delete.php? id= <?php echo($info_teacher['ID'])?>" target="_blank">Borrar</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>