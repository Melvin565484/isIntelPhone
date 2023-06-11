<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $rol = $_POST["rol"];

        // Imprime la operación con los datos recibidos

        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Correo electrónico: " . $email . "</p>";
        echo "<p>Rol: " . $rol . "</p>";
    }
    ?>
</body>
</html>