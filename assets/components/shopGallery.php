<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../styles/style.css" rel="stylesheet">
    <link href="../../styles/gallery.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">House Designs</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
            <a class="nav-link" href="shopGallery.php">Shop</a>
            <a class="nav-link" href="../../php/carrito.php">Cart</a> <!-- Enlace al carrito -->
            <a class="nav-link" href="contact.php">Contact</a>
            <a class="nav-link" href="../../php/login.php">Log in</a>
          </nav>
        </div>
      </header>
</head>
<body>
    <h3 class="tittle">Productos del Hogar</h3>
    <div class="gallery">
        <?php include '../../php/productos.php'; ?>
    <a href="../../php/carrito.php"><button type="button" class="btn btn-outline-danger">Ver Carrito</button></a>
    <a href="../../php/crear_producto.php"><button type="button" class="btn btn-outline-danger">Añadir Producto</button></a>
    </div>
    
    </div>
    
      <div class="container p-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">© 2024 William Bermudez, Programación Web</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#"></use></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
        </footer>
      </div>
</body>
</html>