<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Enlazar el archivo CSS -->
    <style>
        header {
            display: flex;
            justify-content: space-between; /* Alinea los elementos a los extremos */
            align-items: center; /* Centra verticalmente los elementos */
            padding: 10px 0;
        }
        
        nav {
            /* Estilos para el contenedor de los botones de navegación */
            display: flex;
            gap: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            /* Estilos para cada elemento de la lista */
            display: inline;
        }
        nav ul li a {
            /* Estilos para los enlaces */
            display: block;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #f0f0f0;
        }
        /* Estilos para los productos */
        .productos {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Espacio entre productos */
        }
        .producto {
            flex: 1 1 calc(33.33% - 20px); /* Tres productos por fila con espacio entre ellos */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
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
        .agregar-carrito {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .agregar-carrito:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <!-- Aquí puedes colocar tu logo y cualquier otro contenido del encabezado -->
        <div class="logo">
            <img src="https://previews.123rf.com/images/sellingpix/sellingpix1509/sellingpix150900012/45446570-percha-moda-texto-logo-tienda-plantilla-de-dise%C3%B1o-vectorial-idea-creativa-para-la-tienda-de-ropa.jpg" alt="Logo de la tienda" style="max-width: 500px;">
        </div>
        <!-- Botones de navegación -->
        <nav>
            <ul>
                <li><a href="vista/carrito.php">Carrito de Compras</a></li>
                <li><a href="vista/productos.php">Productos</a></li>
                <li><a href="#">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <!-- Formulario de inicio de sesión -->
        <h2>Iniciar sesión</h2>
        <form action="controlador.php" method="post">
            <label for="nombreUsuario">Nombre de Usuario:</label><br>
            <input type="text" id="nombreUsuario" name="nombreUsuario"><br>
            <label for="contrasena">Contraseña:</label><br>
            <input type="password" id="contrasena" name="contrasena"><br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
        
        <!-- Sección de Productos Disponibles -->
        <h2>Productos Disponibles</h2>
        <div class="productos">
            <!-- Ejemplo de producto -->
            <div class="producto">
                <img src="https://i.pinimg.com/236x/f8/eb/b9/f8ebb9396ba2f0eb253682c49fde8b64.jpg" alt="Producto 1" style="max-width: 100px;"> <!-- Ajusta el ancho máximo según tu preferencia -->
                <h3>Producto 1</h3>
                <p>Descripción del Producto 1</p>
                <p>Precio: $100</p>
                <form action="vista/agregar_al_carrito.php" method="post">
                    <input type="hidden" name="accion" value="agregar">
                    <input type="hidden" name="producto_id" value="1">
                    <input type="submit" class="agregar-carrito" value="Agregar al Carrito">
                </form>
            </div>
            <div class="producto">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZtxhFbaH-QgFFiwp2YemODsXnaN5PjJyk05MnlJKLDw&s" alt="Producto 2" style="max-width: 100px;"> <!-- Ajusta el ancho máximo según tu preferencia -->
                <h3>Producto 2</h3>
                <p>Descripción del Producto 1</p>
                <p>Precio: $120</p>
                <form action="vista/agregar_al_carrito.php" method="post">
                    <input type="hidden" name="accion" value="agregar"> <!-- Agregamos el campo acción -->
                    <input type="hidden" name="producto_id" value="2"> <!-- Cambiamos el ID del producto -->
                    <input type="submit" class="agregar-carrito" value="Agregar al Carrito">
                </form>
            </div>
            <div class="producto">
                <img src="https://i.pinimg.com/736x/e7/e7/d1/e7e7d1f436da1c9fac9a2ba2ecb9ea39--white-crop-tops-ideas-para.jpg" alt="Producto 3" style="max-width: 100px;">
                <h3>Producto 3</h3>
                <p>Descripción del Producto 3</p>
                <p>Precio: $150</p>
                <form action="vista/agregar_al_carrito.php" method="post">
                <input type="hidden" name="accion" value="agregar"> <!-- Agregamos el campo acción -->
                    <input type="hidden" name="producto_id" value="2"> <!-- Cambiamos el ID del producto -->
                    <input type="submit" class="agregar-carrito" value="Agregar al Carrito">
                </form>
            </div>
            
            <!-- Puedes repetir esta estructura para más productos -->
            
        </div>
    </div>
</body>
</html>








