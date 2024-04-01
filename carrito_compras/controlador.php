<?php

// Incluir la clase Usuario y UsuarioServicio
require_once('modelo/Usuario.php');
require_once('servicio/UsuarioServicio.php');

// Verificar si se ha enviado un formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombreUsuario']) && isset($_POST['contrasena'])) {
    // Obtener los datos del formulario
    $nombreUsuario = $_POST['nombreUsuario'];
    $contrasena = $_POST['contrasena'];

    // Validar los datos del usuario (esto puede variar dependiendo de tu implementación)
    if ($nombreUsuario == 'usuario_demo' && $contrasena == 'contrasena_demo') {
        // Iniciar sesión (esto puede variar dependiendo de tu implementación)
        session_start();
        $_SESSION['nombreUsuario'] = $nombreUsuario;

        

        // Redirigir al usuario a la página principal o a otra página deseada
        header("Location: index.php");
        exit();
    } else {
        // Mostrar mensaje de error si los datos de inicio de sesión son incorrectos
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    // Mostrar mensaje de error si se intenta acceder directamente al controlador sin enviar el formulario
    echo "Acceso no autorizado.";
}

?>
