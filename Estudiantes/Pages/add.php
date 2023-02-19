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
            <option value="Español">Español</option>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
        </select><br>

        <select name="Docente" required="">
            <option>Docente</option>
            <option>Flavio Parra</option>
            <option>Ignacio Caicedo</option>
            <option>Carlos Moran</option>
        </select><br>
        <input type="number" name="Promedio" placeholder="Promedio" require="" autocomplete="off"><br>
        <input type="date" name="Fecha" require="" autocomplete="off"><br>
        <input type="submit" value="REGISTRAR"><br>
    </form>

</body>
</html>