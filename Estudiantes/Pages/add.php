<?php
require_once("../../metodos_docentes_materias.php");
require_once("../../Usuarios/Modelos/Usuarios.php");

$metodosestudents=new Usuarios;
$metodosestudents->validarSession();

$obj_docentes_materias=new Getdocentesmaterias;
$nomdocentes=$obj_docentes_materias->getdocentes();
$nommaterias=$obj_docentes_materias->getmaterias();

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
    <h1>Registrar estudiante</h1>
    <form action="../Controladores/add.php" method="POST">
        <input type="hidden" name="id" value="">
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off"><br>
        <input type="text" name="Apellido" placeholder="Apellido" require="" autocomplete="off"><br>
        <input type="text" name="Documento" placeholder="Documento" require="" autocomplete="off"><br>
        <input type="gmail" name="Gmail" placeholder="Gmail" require="" autocomplete="off"><br>

        <select name="Materia" required="">
            <option>Seleccione</option>

            <?php
            if($nommaterias != null){
                foreach($nommaterias as $nommaterias){
                    ?> <option value="<?php echo($nommaterias['Nombre'])?>"><?php echo($nommaterias['Nombre'])?></option>
                    <?php
                }
            }
            ?>
        </select><br>

        <select name="Docente" required="">
            <option>Docente</option>

            <?php
            if($nomdocentes != null){
                foreach($nomdocentes as $nomdocentes){
                    ?><option value="<?php echo($nomdocentes['Nombre']. " ". $nomdocentes['Apellido'])?>"><?php echo($nomdocentes['Nombre']. " ". $nomdocentes['Apellido'])?></option>

                    <?php
                }
            }
            ?>
        </select><br>
        <input type="number" name="Promedio" placeholder="Promedio" require="" autocomplete="off"><br>
        <input type="date" name="Fecha" require="" autocomplete="off"><br>
        <input type="button" value="CANCELAR" id="button_cancelar"><br>
        <input type="submit" value="REGISTRAR"><br>
    </form>
    <script type="text/javascript" src="../../Metodo_redirigir.js"> </script>
</body>
</html>