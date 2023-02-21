<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System notes</title>
    <link rel="shortcut icon" type="image/x-icon" href="Style_pricipal/sucre_escudo.ico">
    <link rel="stylesheet" type="text/css" href="Style_pricipal/style.css" >
</head>
<body>
    <header>
    <img src="Style_pricipal/logo_sucre.png" width="50%" height="50%">
    </header>
    
    <h1>Inicio de sesión</h1>
    <form action="Usuarios/Controladores/login.php" method="POST">
        Usuario<br/>
        <input type="text" name="Usuario" placeholder="User" required="" autocomplete="off" ><br>
        Contraseña <br>
        <input type="password" name="Contrasena" Placeholder="Password" required="" autocomplete="off"><br><br>
        <input type="submit" value="INGRESAR"><br><br>
    </form>
</body>
</html>

