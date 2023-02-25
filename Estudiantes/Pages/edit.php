<?php

require_once("../../Usuarios/Modelos/Usuarios.php");
require_once("../Modelo/Estudiantes.php");
require_once("../../Metodos_docentes_materias.php");

$metodosestudents=new Usuarios;
$metodosestudents->validarSession();

$newclassstudents=new Estudiante;
$datesByid=$newclassstudents->getByid($_GET['id']);

$newclassteacher_sobject=new Getdocentesmaterias;
$name_teacher=$newclassteacher_sobject->getdocentes();
$name_sobjects=$newclassteacher_sobject->getmaterias();


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
    <h1>Editar estudiante</h1>
    <form action="../Controladores/edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id']) ?>">
        <?php
        if($datesByid != null){
            foreach($datesByid as $datesByid){
        
        ?>
       
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off" value="<?php echo($datesByid['Nombre']) ?>"><br>
        <input type="text" name="Apellido" placeholder="Apellido" require="" autocomplete="off" value="<?php echo($datesByid['Apellido']) ?>"><br>
        <input type="text" name="Documento" placeholder="Documento" require="" autocomplete="off" value="<?php echo($datesByid['Documento']) ?>"><br>
        <input type="gmail" name="Gmail" placeholder="Gmail" require="" autocomplete="off" value="<?php echo($datesByid['Correo']) ?>"><br>
        <select name="Materia" required="" >
            <option><?php echo($datesByid['Materia']) ?></option>

            <?php 
            if($name_sobjects != null){
                foreach($name_sobjects as $name_sobjects){

                    if($datesByid['Materia'] != $name_sobjects['Nombre'] ){
                    ?>
                    <option value="<?php echo ($name_sobjects['Nombre'])?> "><?php echo ($name_sobjects['Nombre'])?></option>

                    <?php 
                    }
                }
            }
            ?>
            
        </select><br>

        <select name="Docente" required="">
            <option><?php echo($datesByid['Docentes']) ?></option>

            <?php 
            if($name_teacher != null){
                foreach($name_teacher as $name_teacher){
                    
                    if($datesByid['Docentes'] != $name_teacher['Nombre']. " ". $name_teacher['Apellido']){
                    ?>
                    <option value="<?php echo ($name_teacher['Nombre']. " ". $name_teacher['Apellido'])?> "><?php echo ($name_teacher['Nombre']. " ". $name_teacher['Apellido'])?></option>

                    <?php 
                    }
                }
            }
            ?>
        </select><br>
        <input type="number" name="Promedio" placeholder="Promedio" require="" autocomplete="off" value="<?php echo($datesByid['Promedio']) ?>"><br>
        <input type="date" name="Fecha" require="" autocomplete="off" value="<?php echo($datesByid['Fecha']) ?>"><br>
        <?php
            }
        }
        ?>
        <input type="submit" value="GUARDAR"><br>
    </form>

</body>
</html>