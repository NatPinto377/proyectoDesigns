<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../styles/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">House Designs</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
        <a class="nav-link" href="shopGallery.php">Shop</a>
        <a class="nav-link" href="contact.php">Contact</a>
        <a class="nav-link" href="../../php/login.php">Log in</a>
      </nav>
    </div>
  </header>
<body>
    <div class="container mt-5">
        <div class="row form-container">
            <div class="col-md-4 mb-3"></div>
            <div class="container mt-5">
                <div class="row form-container">
                    <div class="col-md-4 p-0">
                        <img src="../../src/assets/large-14.jpg" alt="Italian Trulli" class="img-fluid rounded-start-5">
                    </div>
                    <div class="col-md-8 p-0">
                        <form class="needs-validation h-100" action="../../php/form.php" method="POST" novalidate>
                            <div class="row g-3 m-0">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="col-12 form-outline mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <input type="text" class="form-control" name="message" id="message" placeholder="Message">
                                    <div class="invalid-feedback">
                                        Please enter a valid message.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-danger btn-lg mt-3" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstName = htmlspecialchars($_POST['firstName']);
                $lastName = htmlspecialchars($_POST['lastName']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<h3>Submitted Information:</h3>";
                echo "<p><strong>First Name:</strong> $firstName</p>";
                echo "<p><strong>Last Name:</strong> $lastName</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Message:</strong> $message</p>";
            }
            ?>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>