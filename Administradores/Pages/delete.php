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
    <header>
        <h1>Eliminar administrador</h1><br>
    </header>
    <P>¿Estas seguro de eliminar el administrador?</P><br><br>
    <form action="../Controladores/delete.php" method="POST">
        <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">
        <input type="button" value="CANCELAR" id="button_cancelar"><br>
        <input type="submit" value="ELIMINAR">
    </form>
     <script type="text/javascript" src="../../Metodo_redirigir.js"> </script>
</body>
</html>