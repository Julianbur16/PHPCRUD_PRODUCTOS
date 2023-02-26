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
        <h1>Materias en curso</h1>
    </header>
    <a href="add.php" target="_blank"> Registrar materias</a><br><br>
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
                <a href="edit.php? id= <?php echo($names_materias['ID'])?>" target="_blank">Editar</a><br>
                <a href="delete.php? id= <?php echo($names_materias['ID'])?>" target="_blank">Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>
    </table>
</body>

</html>