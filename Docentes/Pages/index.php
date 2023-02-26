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
    <?php 
        if($modelouser->validarSessionAdministrador()){
            ?>
            <h1>
            <a href="../../Administradores/Pages/index.php">Administradores</a>
            <a href="#">Docentes</a>
            <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
            <a href="../../Materias/Pages/index.php">Materias</a>
            <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </h1>
            <?php
            }else{
                ?>
                <h1>
                <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
                <a href="../../Materias/Pages/index.php">Materias</a>
                <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
            </h1>
                <?php
            }
        ?>
    </header>
    <a href="add.php"> Registrar docente</a><br><br>
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
                <a href="edit.php? id= <?php echo($info_teacher['ID'])?>" >Editar</a><br>
                <a href="delete.php? id= <?php echo($info_teacher['ID'])?>" >Borrar</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>