<?php 
require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelos/Materias.php");

$metodosMaterias=new Materias;
$validarsession=new Usuarios;

$validarsession->validarSession();
$names_materias=$metodosMaterias->get();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Style_Materias/Styles.css" >
    <title>System notes</title>
</head>

<body>
    <header>
    <?php 
        if($validarsession->validarSessionAdministrador()){
            ?>
            <h3>
            <div class ="navbar">
            <div><a href="#" class="status">Materias</a></div>
            <div>
                <ul> 
                <li><a href="../../Administradores/Pages/index.php" class="sections">Administradores</a></li>
                <li><a href="../../Docentes/Pages/index.php" class="sections">Docentes</a></li>
                <li><a href="../../Estudiantes/Pages/index.php" class="sections">Estudiantes</a></li>
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
                <div><a href="#" class="status">Materias</a></div>
                <div>
                    <ul>
                    <li><a href="../../Estudiantes/Pages/index.php" class="sections">Estudiantes</a></li>
                </ul>
                </div>
                <div><a href="../../Usuarios/Controladores/Salir.php" class="salira">Salir</a></div>
                </div>
            </h3>
                <?php
            }
        ?>
    </header>
    <br><h4><a href="add.php" class= "registrar"> Registrar materias</a><br></h4><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>acciones</th>
        </tr>

        <?php 
        if($names_materias != null){
            foreach($names_materias as $names_materias){

        ?>
        <tr>
            <td><?php echo($names_materias['ID'])?></td>
            <td><?php echo($names_materias['Nombre'])?></td>
            <td>
                <br>
                <a href="edit.php? id= <?php echo($names_materias['ID'])?>" class="edit_css">Editar</a>
                <a href="delete.php? id= <?php echo($names_materias['ID'])?>" class="delete_css">Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>
    </table>
</body>

</html>