<?php
session_start();
// Verificar que el índice y la cantidad estén seteados
if(isset($_POST['indice'], $_POST['cantidad'])) {
    $indice = $_POST['indice'];
    $cantidad = $_POST['cantidad'];
    // Actualizar la cantidad en la sesión del carrito
    $_SESSION['carrito'][$indice]['cantidad'] = $cantidad;
}
header("Location: carrito.php");
