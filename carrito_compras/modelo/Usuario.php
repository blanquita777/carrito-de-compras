<?php

class Usuario {
    private $id;
    private $nombreUsuario;
    private $contrasena;
    private $correoElectronico;

    // Constructor
    public function __construct($nombreUsuario, $contrasena, $correoElectronico) {
        $this->nombreUsuario = $nombreUsuario;
        $this->contrasena = $contrasena;
        $this->correoElectronico = $correoElectronico;
    }

    // Métodos getters y setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    public function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    public function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }
}

?>
