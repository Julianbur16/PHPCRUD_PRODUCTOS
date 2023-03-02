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
    <link rel="stylesheet" type="text/css" href="../Style_Administradores/Styles.css" >
    <title>System notes</title>
</head>

<body>
    <header>
        <?php 
        if($validarsession->validarSessionAdministrador()){
            ?>
            <h3>
            <div class ="navbar">
            <div><a href="#" class="status">Administradores</a></div>
            <div>
                <ul>
                <li><a href="../../Docentes/Pages/index.php" class="sections">Docentes</a></li>
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
                <div><a href="#" class="status">Administradores</a></div>
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
    <br><h4><a href="add.php" class= "registrar"> Registrar administrador</a><br></h4><br><br>
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
                <br>
                <a href="edit.php? id= <?php echo($rowsAdministradores['ID'])?>" class="edit_css">Editar</a>
                <a href="delete.php? id= <?php echo($rowsAdministradores['ID'])?>" class="delete_css">Borrar</a>
            </td>
        </tr>

        <?php
            }
        }
        ?>
    </table>
</body>

</html>