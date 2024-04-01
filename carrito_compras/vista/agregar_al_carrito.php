<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Verificar si se envió el ID del producto a través de la URL
if (isset($_GET['producto_id']) && is_numeric($_GET['producto_id'])) {
    $producto_id = $_GET['producto_id'];
    
    // Aquí deberías buscar los detalles reales del producto usando $producto_id
    // Por ahora, usaré datos de ejemplo
    $producto = [
        'id' => $producto_id,
        'nombre' => "Producto Ejemplo",
        'precio' => 100,
        'cantidad' => 1, // o cualquier lógica para definir cantidad
        'imagen' => "URL_de_la_imagen_del_producto.jpg"
    ];

    // Verificar si el producto ya está en el carrito
    $producto_existente = array_search($producto_id, array_column($_SESSION['carrito'], 'id'));
    if ($producto_existente !== false) {
        // Si el producto ya está en el carrito, aumentar la cantidad en lugar de agregar un nuevo elemento
        $_SESSION['carrito'][$producto_existente]['cantidad']++;
    } else {
        // Agregar el producto al carrito
        $_SESSION['carrito'][] = $producto;
    }

    // Redirigir al usuario al carrito de compras
    header('Location: carrito.php');
    exit;
} else {
    // Manejar el caso en el que no se proporciona un ID de producto válido
    echo "Error: ID de producto no válido.";
}
?>
