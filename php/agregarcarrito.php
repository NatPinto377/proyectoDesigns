<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="../styles/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];
    $usuario_id = 1; // Esto debería ser el ID del usuario actualmente logueado

    // Verifica si el carrito ya existe para el usuario
    $sql = "SELECT id FROM carritos WHERE usuario_id = $usuario_id AND estado = 'activo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si hay un carrito activo
        $row = $result->fetch_assoc();
        $carrito_id = $row['id'];
    } else {
        // Si no hay un carrito activo, crea uno nuevo
        $sql = "INSERT INTO carritos (usuario_id) VALUES ($usuario_id)";
        if ($conn->query($sql) === TRUE) {
            $carrito_id = $conn->insert_id;
        } else {
            die("Error al crear el carrito: " . $conn->error);
        }
    }

    // Añade el producto al carrito
    $sql = "INSERT INTO carrito_items (carrito_id, producto_id, cantidad) VALUES ($carrito_id, $producto_id, $cantidad)";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'>";
        echo "Producto añadido al carrito";
        echo " <a href='../assets/components/shopGallery.php' class='btn btn-danger ml-3'>Volver</a>";
        echo "</div>";
    } else {
        echo "Error al añadir el producto al carrito: " . $conn->error;
    }
}

$conn->close();

?>
</div>
</body>
</html>
