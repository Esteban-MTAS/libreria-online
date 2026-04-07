<?php
require_once("bd/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" width="40" class="me-2">
                <span>Biblioteca Online</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/libros.php">
                            <i class="bi bi-book"></i> Libros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/autores.php">
                            <i class="bi bi-people"></i> Autores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/contacto.php">
                            <i class="bi bi-envelope"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="fondo-principal text-white text-center d-flex align-items-center">
        <div class="container">
            <h1 class="display-5 fw-bold">Bienvenido a la Biblioteca Online</h1>
            <p class="lead">Consulta libros, autores y envíanos tus comentarios fácilmente.</p>
            <a href="pages/libros.php" class="btn btn-light btn-lg mt-2">
                <i class="bi bi-book"></i> Ver libros
            </a>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm borde-suave">
                        <div class="card-body text-center">
                            <i class="bi bi-book fs-1 text-primary"></i>
                            <h3 class="mt-3">Libros</h3>
                            <p>Consulta todos los libros disponibles en la base de datos.</p>
                            <a href="pages/libros.php" class="btn btn-primary">
                                Entrar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm borde-suave">
                        <div class="card-body text-center">
                            <i class="bi bi-people fs-1 text-primary"></i>
                            <h3 class="mt-3">Autores</h3>
                            <p>Visualiza el listado de autores registrados en el sistema.</p>
                            <a href="pages/autores.php" class="btn btn-primary">
                                Entrar
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm borde-suave">
                        <div class="card-body text-center">
                            <i class="bi bi-envelope-paper fs-1 text-primary"></i>
                            <h3 class="mt-3">Contacto</h3>
                            <p>Envíanos un mensaje mediante el formulario de contacto.</p>
                            <a href="pages/contacto.php" class="btn btn-primary">
                                Entrar
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
          <small>Proyecto Final - Programación Web <span id="anio"></span></small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>