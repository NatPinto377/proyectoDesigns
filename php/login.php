<?php
session_start();

// Incluir archivo de conexión
include 'conexion.php';

// Procesar el formulario de inicio de sesión si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Limpiar los datos de entrada
    $email = trim($email);
    $password = trim($password);

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT id, email, password FROM usuarios WHERE email = ?";
    
    // Preparar la declaración
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña usando password_verify si la contraseña está encriptada
        if (password_verify($password, $row['password'])) {
            // Iniciar sesión y redirigir al usuario a la página de inicio
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: ../assets/components/shopGallery.php"); // Cambia esto a la página a la que quieres redirigir después del inicio de sesión
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>
                            <form action="login.php" method="POST">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" required>
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" required>
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block" type="submit">Login</button>
                                <a class="nav-link" href="register.php">Register</a>
                            </form>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>