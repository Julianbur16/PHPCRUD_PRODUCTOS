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
    <title>System notes</title>
</head>

<body>
    <header>
    <?php 
        if($validarsession->validarSessionAdministrador()){
            ?>
            <h1>
            <a href="../../Administradores/Pages/index.php">Administradores</a>
            <a href="../../Docentes/Pages/index.php">Docentes</a>
            <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
            <a href="#">Materias</a>
            <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </h1>
            <?php
            }else{
                ?>
                <h1>
                <a href="../../Estudiantes/Pages/index.php">Estudiantes</a>
                <a href="#">Materias</a>
                <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
            </h1>
                <?php
            }
        ?>
    </header>
    <a href="add.php" > Registrar materias</a><br><br>
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
                <a href="edit.php? id= <?php echo($names_materias['ID'])?>" >Editar</a><br>
                <a href="delete.php? id= <?php echo($names_materias['ID'])?>" >Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>
    </table>
</body>

</html>