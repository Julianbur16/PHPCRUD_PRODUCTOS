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
    <link rel="stylesheet" type="text/css" href="../Style_docentes/Styles.css" >
    <title>System notes</title>
</head>

<body>
    <header>
    <?php 
        if($modelouser->validarSessionAdministrador()){
            ?>
            <h3>
            <div class ="navbar">
            <div><a href="#" class="status">Docentes</a></div>
            <div>
                <ul>
                <li><a href="../../Administradores/Pages/index.php" class="sections">Administradores</a></li>
                <li><a href="../../Estudiantes/Pages/index.php" class="sections">Estudiantes</a></li>
                <li><a href="../../Materias/Pages/index.php" class="sections">Materias</a></li>
            </ul>
            </div>
            <div><a href="../../Usuarios/Controladores/Salir.php" class="salira">Salir</a></div>
            </div>
        </h3>
            <?php
            }else{
                ?>
                <h3>
                <div class ="navbar">
                <div><a href="#" class="status">Docentes</a></div>
                <div>
                    <ul>
                    <li><a href="../../Estudiantes/Pages/index.php" class="sections">Estudiantes</a></li>
                    <li><a href="../../Materias/Pages/index.php" class="sections">Materias</a></li>
                </ul>
                </div> 
                <div><a href="../../Usuarios/Controladores/Salir.php" class="salira">Salir</a></div>
                </div>
            </h3>
                <?php
            }
        ?>
    </header>
    <br> <h4><a href="add.php" class= "registrar"> Registrar docente</a><br> </h4> <br><br>
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
                <br>
                <a href="edit.php? id= <?php echo($info_teacher['ID'])?>" class="edit_css">Editar</a>
                <a href="delete.php? id= <?php echo($info_teacher['ID'])?>" class="delete_css">Borrar</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>