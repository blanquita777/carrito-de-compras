<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Enlazar el archivo CSS -->
    <style>
        /* Estilos para los productos */
        .productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Crea columnas automáticas, cada una con un ancho mínimo de 250px */
            grid-gap: 20px; /* Espacio entre los productos */
        }
        .producto {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .producto img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .producto h3 {
            margin-top: 0;
        }
        .producto p {
            margin-bottom: 10px;
        }
        .agregar-carrito {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transición suave al pasar el ratón */
        }
        .agregar-carrito:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Productos Disponibles</h2>
    <!-- Contenedor de productos -->
    <div class="productos">
        <!-- Ejemplo de producto -->
        <div class="producto">
            <img src="https://buzosdeportivos.com/wp-content/uploads/2023/03/buzos-deportivos-polinan-mujeres.webp" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Descripción breve del Producto 1.</p>
            <p>Precio: $100</p>
            <button class="agregar-carrito" onclick="agregarAlCarrito(1)">Agregar al Carrito</button>
        </div>
        
        <!-- Ejemplo de otro producto -->
        <div class="producto">
            <img src="https://buzosdeportivos.com/wp-content/uploads/2023/03/buzos-deportivos-interfil-hombres.webp" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Descripción breve del Producto 2.</p>
            <p>Precio: $120</p>
            <button class="agregar-carrito" onclick="agregarAlCarrito(2)">Agregar al Carrito</button>
        </div>

        <script>
            function agregarAlCarrito(idProducto) {
                // Redirigir al archivo agregar_al_carrito.php con el idProducto como parámetro en la URL
                window.location.href = 'agregar_al_carrito.php?producto_id=' + idProducto;
            }
        </script>

        <!-- Puedes repetir esta estructura para más productos -->
    </div>
    <!-- Puedes agregar más contenido según sea necesario, como imágenes y descripciones detalladas de los productos. -->
</body>
</html>
