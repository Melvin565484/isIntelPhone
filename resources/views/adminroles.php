<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Roles</title>
</head>
<body>
    <h1>Gestión de Roles</h1>

    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Usuario:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol">
            <option value="admin">Crear</option>
            <option value="editor">Modificar</option>
            <option value="usuario">Visualizar</option>
            <option value="usuario">Todas las autorizaciones</option>
         </select><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>