<?php 
require_once("../../Usuarios/Modelos/Usuarios.php");

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
    <h1>Registrar administrador</h1>
    <form action="../Controladores/add.php" method="POST">
    
        <input type="text" name="Usuario" placeholder="Usuario" require="" autocomplete="off"><br>
        <input type="text" name="Password" placeholder="Password" require="" autocomplete="off"><br>
        <input type="text" name="Nombre" placeholder="Nombre" require="" autocomplete="off"><br>
        <input type="text" name="Apellido" placeholder="Apellido" require="" autocomplete="off"><br>

        <input type="submit" value="REGISTRAR"><br>
    </form>

</body>
</html>