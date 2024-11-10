<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Company</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                <a class="nav-link" href="../assets/components/shopGallery.php">Shop</a>
                <a class="nav-link" href="carrito.php">Cart</a> <!-- Enlace al carrito -->
                <a class="nav-link" href="../assets/components/contact.php">Contact</a>
                <a class="nav-link" href="login.php">Log in</a>
            </nav>
        </div>
    </header>
    <main class="container">
        <h2>Crear Nuevo Producto</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="imagen_url">URL de la Imagen:</label>
                <input type="url" class="form-control" id="imagen_url" name="imagen_url" placeholder="https://ejemplo.com/imagen.jpg" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'conexion.php';

            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $imagen_url = $_POST['imagen_url'];
            $descripcion = $_POST['descripcion'];

            // Insertar en la base de datos
            $sql = "INSERT INTO productos (nombre, precio, imagen_url, descripcion) VALUES ('$nombre', '$precio', '$imagen_url', '$descripcion')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success mt-3" role="alert">Producto creado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger mt-3" role="alert">Error al crear el producto: ' . $conn->error . '</div>';
            }

            $conn->close();
        }
        ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

