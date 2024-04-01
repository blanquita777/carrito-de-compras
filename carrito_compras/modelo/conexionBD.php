<?php

class ConexionBD {
    private $host = "localhost"; // Cambia esto por la dirección de tu servidor de base de datos si es diferente
    private $usuario = "root"; // Cambia esto por el nombre de usuario de tu base de datos
    private $contrasena = ""; // Cambia esto por la contraseña de tu base de datos
    private $nombreBD = "carrito_compras"; // Cambia esto por el nombre de tu base de datos
    private $conexion;

    // Método para conectar a la base de datos
    public function conectar() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->nombreBD);

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        } else {
            echo "Conexión exitosa";
        }
    }

    // Método para cerrar la conexión
    public function cerrarConexion() {
        $this->conexion->close();
    }

    // Método para obtener la conexión
    public function obtenerConexion() {
        return $this->conexion;
    }
}

?>
