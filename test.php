<?php
function testAgregarProducto() {
    // Simular un producto
    $producto = [
        'id' => 1,
        'nombre' => 'Producto de prueba',
        'precio' => 100,
        'cantidad' => 1
    ];

    // Agregar el producto al carrito
    agregarProducto($producto);

    // Obtener el carrito actualizado
    $carrito = obtenerCarrito();

    // Verificar que el producto fue agregado correctamente
    assert(count($carrito) == 1, "El producto no fue agregado correctamente al carrito");
}

function testActualizarCantidad() {
    // Simular un producto en el carrito
    $producto = [
        'id' => 1,
        'nombre' => 'Producto de prueba',
        'precio' => 100,
        'cantidad' => 1
    ];

    // Agregar el producto al carrito
    agregarProducto($producto);

    // Actualizar la cantidad del producto en el carrito
    actualizarCantidad(1, 2); // Actualizar a 2 unidades

    // Obtener el carrito actualizado
    $carrito = obtenerCarrito();

    // Verificar que la cantidad fue actualizada correctamente
    assert($carrito[1]['cantidad'] == 2, "La cantidad del producto no fue actualizada correctamente");
}

function testEliminarProducto() {
    // Simular un producto en el carrito
    $producto = [
        'id' => 1,
        'nombre' => 'Producto de prueba',
        'precio' => 100,
        'cantidad' => 1
    ];

    // Agregar el producto al carrito
    agregarProducto($producto);

    // Eliminar el producto del carrito
    eliminarProducto(1);

    // Obtener el carrito actualizado
    $carrito = obtenerCarrito();

    // Verificar que el producto fue eliminado correctamente
    assert(empty($carrito), "El producto no fue eliminado correctamente del carrito");
}

function testCalcularTotal() {
    // Simular productos en el carrito
    $productos = [
        [
            'id' => 1,
            'nombre' => 'Producto 1',
            'precio' => 100,
            'cantidad' => 2
        ],
        [
            'id' => 2,
            'nombre' => 'Producto 2',
            'precio' => 50,
            'cantidad' => 3
        ]
    ];

    // Agregar los productos al carrito
    foreach ($productos as $producto) {
        agregarProducto($producto);
    }

    // Calcular el total del carrito
    $total = calcularTotal();

    // Verificar que el total calculado sea correcto
    $totalEsperado = (100 * 2) + (50 * 3); // 300
    assert($total == $totalEsperado, "El total calculado del carrito no es correcto");
}

// Ejecutar todas las pruebas
testAgregarProducto();
testActualizarCantidad();
testEliminarProducto();
testCalcularTotal();

echo "Pruebas completadas con éxito.\n";
?>