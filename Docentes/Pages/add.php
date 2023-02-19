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
        <input type="number" name="Celular" placeholder="Celular" require="" autocomplete="off"><br>
        <input type="gmail" name="Gmail" placeholder="Gmail" require="" autocomplete="off"><br>
        <select name="Materia" required="">
            <option>Seleccione</option>
            <option value="Español">Español</option>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
        </select><br>
        <input type="submit" value="REGISTRAR"><br>
    </form>

</body>
</html>