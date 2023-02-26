<?php 
require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelo/Estudiantes.php");

$metodosestudiante=new Estudiante;
$validarsession=new Usuarios;

$validarsession->validarSession();

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
            <a href="#">Estudiantes</a>
            <a href="../../Materias/Pages/index.php">Materias</a>
            <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
        </h1>
            <?php
            }else{
                ?>
                <h1>
                <a href="#">Estudiantes</a>
                <a href="../../Materias/Pages/index.php">Materias</a>
                <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
            </h1>
                <?php
            }
        ?>
    </header>
    <a href="add.php"> Registrar estudiante</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docentes</th>
            <th>Promedio</th>
            <th>fecha de ingreso</th>
            <th>acciones</th>
        </tr>

        <?php 
        $rows=$metodosestudiante->get();
        if($rows != null){
            foreach($rows as $rows){

        
        ?>
        <tr>
            <td><?php echo($rows['ID']) ?></td>
            <td><?php echo($rows['Nombre']) ?></td>
            <td><?php echo($rows['Apellido']) ?></td>
            <td><?php echo($rows['Documento']) ?></td>
            <td><?php echo($rows['Correo']) ?></td>
            <td><?php echo($rows['Materia']) ?></td>
            <td><?php echo($rows['Docentes']) ?></td>
            <td><?php echo($rows['Promedio']) ?></td>
            <td><?php echo($rows['Fecha']) ?></td>
            <td>
                <a href="edit.php? id=<?php echo($rows['ID']) ?>" >Editar</a><br>
                <a href="delete.php? id=<?php echo($rows['ID']) ?>" >Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>

    </table>
</body>

</html>