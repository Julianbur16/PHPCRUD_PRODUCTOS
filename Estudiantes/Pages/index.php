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
    <link rel="stylesheet" type="text/css" href="../Style_Estudiantes/Styles.css" >
    <title>System notes</title>
</head>

<body>
    <header>
        
    <?php 
        if($validarsession->validarSessionAdministrador()){
            ?>

            <h3>
                <div class ="navbar">
                <div><a href="#" class="status">Estudiantes</a></div>
                <div>
                <ul>
                    <li><a href="../../Administradores/Pages/index.php" class="sections">Administradores</a></li>
                    <li><a href="../../Docentes/Pages/index.php" class="sections">Docentes</a></li>
                    <li><a href="../../Materias/Pages/index.php" class="sections">Materias</a></li>
                 </ul>
                 </div>
                 <div><a href="../../Usuarios/Controladores/Salir.php" class="salira">   Salir   </a></div>
                 </div>
                </h3>

       
            <?php
            }else{
                ?>
                <h3>
                <div class ="navbar">
                    <div><a href="#" class="status">Estudiantes</a></div>
                    <div>
                    <ul>
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
    <br> <h4>  <a href="add.php" class= "registrar"> Registrar estudiante</a><br></h4><br><br>
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
            <th> acciones</th>
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
                <br>
                <a href="edit.php? id=<?php echo($rows['ID']) ?>" class="edit_css">Editar</a>
                <a href="delete.php? id=<?php echo($rows['ID']) ?>" class="delete_css">Borrar</a>
            </td>
        </tr>

        <?php 
            }
        }
        ?>

    </table>
</body>

</html>