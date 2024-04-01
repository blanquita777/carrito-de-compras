<?php
session_start();
// Verificar que el índice esté seteado
if(isset($_POST['indice'])) {
    $indice = $_POST['indice'];
    // Eliminar el producto del carrito
    unset($_SESSION['carrito'][$indice]);
}
header("Location: carrito.php");
