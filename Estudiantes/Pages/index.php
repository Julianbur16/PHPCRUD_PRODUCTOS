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
        <h1>Estudiantes en curso</h1>
    </header>
    <a href="add.php" target="_blank"> Registrar estudiante</a><br><br>
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
                <a href="edit.php? id=<?php echo($rows['ID']) ?>" target="_blank">Editar</a><br>
                <a href="delete.php? id=<?php echo($rows['ID']) ?>" target="_blank">Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>

    </table>
</body>

</html>