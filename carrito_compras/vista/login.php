<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Enlazar el archivo CSS -->
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="../controlador.php" method="post">
        <label for="nombreUsuario">Nombre de Usuario:</label><br>
        <input type="text" id="nombreUsuario" name="nombreUsuario"><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html> 





