<?php
// Iniciar sesión si no se ha hecho
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Inicializar $_SESSION['carrito'] como un array si no está definido o no es un array
if (!isset($_SESSION['carrito']) || !is_array($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Enlazar el archivo CSS -->
    <!-- Tus estilos previos aquí -->

    <style>
        /* Estilos para los productos en el carrito */
        .producto {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .producto img {
            max-width: 100%; /* Ancho máximo igual al contenedor */
            height: auto; /* Altura automática para mantener la proporción */
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .producto h3 {
            margin-top: 0;
        }
        .producto p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Carrito de Compras</h2>
    <div class="productos-carrito">
        <?php
        // Verificar si hay productos en el carrito
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $indice => $producto) {
                echo "<div class='producto'>";
                // Verificar si la clave 'imagen' está definida
                if (isset($producto['imagen'])) {
                    echo "<img src='{$producto['imagen']}' alt='Imagen del producto'>";
                }
                // Verificar si la clave 'nombre' está definida
                if (isset($producto['nombre'])) {
                    echo "<h3>{$producto['nombre']}</h3>";
                }
                // Verificar si la clave 'descripcion' está definida
                if (isset($producto['descripcion'])) {
                    echo "<p>{$producto['descripcion']}</p>";
                }
                // Verificar si la clave 'precio' está definida
                if (isset($producto['precio'])) {
                    echo "<p>Precio: {$producto['precio']}</p>";
                }
                // Formulario para actualizar la cantidad
                echo "<form action='actualizar_carrito.php' method='post'>";
                echo "<input type='number' name='cantidad' value='1' min='1'>";
                echo "<input type='hidden' name='indice' value='{$indice}'>";
                echo "<input type='submit' value='Actualizar Cantidad'>";
                echo "</form>";
                // Botón para eliminar producto
                echo "<form action='eliminar_del_carrito.php' method='post'>";
                echo "<input type='hidden' name='indice' value='{$indice}'>";
                echo "<input type='submit' value='Eliminar Producto'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "<p>El carrito de compras está vacío.</p>";
        }
        ?>
    </div>
</body>
</html>
