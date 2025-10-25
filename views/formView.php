<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario MVC</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="form/save" method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Confirmacion:</label>
        <select name="confirmation" id="confirmation">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>