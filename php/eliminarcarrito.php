<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carrito_item_id = $_POST['carrito_item_id'];

    // Eliminar el ítem del carrito
    $sql = "DELETE FROM carrito_items WHERE id = $carrito_item_id";
    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado del carrito";
    } else {
        echo "Error al eliminar el producto del carrito: " . $conn->error;
    }

    $conn->close();
    header("Location: carrito.php");
    exit();
}
?>