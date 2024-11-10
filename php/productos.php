<?php
include 'conexion.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="product-card">';
        echo '<img src="' . $row["imagen_url"] . '" alt="' . $row["nombre"] . '">';
        echo '<h2>' . $row["nombre"] . '</h2>';
        echo '<p class="price">$' . $row["precio"] . '</p>';
        echo '<form action="../../php/agregarcarrito.php" method="POST">';
        echo '<input type="hidden" name="producto_id" value="' . $row["id"] . '">';
        echo '<input type="number" name="cantidad" value="1" min="1">';
        echo '<button type="submit">Añadir al Carrito</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>