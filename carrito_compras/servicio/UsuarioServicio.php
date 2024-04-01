<?php

require_once('./modelo/Usuario.php'); // Requerir la clase Usuario para utilizarla en UsuarioServicio

class UsuarioServicio {
    private $conexion;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para registrar un nuevo usuario en la base de datos
    public function registrarUsuario($usuario) {
        $nombreUsuario = $usuario->getNombreUsuario();
        $contrasena = $usuario->getContrasena();
        $correoElectronico = $usuario->getCorreoElectronico();

        // Aquí deberías implementar la lógica para insertar el nuevo usuario en la base de datos
        // Por ejemplo:
        // $sql = "INSERT INTO usuarios (nombre_usuario, contrasena, correo_electronico) VALUES ('$nombreUsuario', '$contrasena', '$correoElectronico')";
        // $resultado = $this->conexion->query($sql);
        
        // Simulación de inserción en la base de datos (comenta esto si estás haciendo una inserción real)
        $resultado = true;

        return $resultado;
    }

    // Otros métodos para manejar operaciones relacionadas con usuarios, como autenticación, recuperación de contraseña, etc.
}

?>
