<?php

require_once("../../Usuarios/Modelos/Usuarios.php");

$metodosestudents=new Usuarios;
$metodosestudents->validarSession();

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
        <h1>Eliminar Materia</h1><br>
    </header>
    <P>¿Estas seguro de eliminar esta Materia?</P><br><br>
    <form action="../Controladores/delete.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
        <input type="submit" value="ELIMINAR">
    </form>
</body>
</html>