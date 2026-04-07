<?php
require_once("../bd/conexion.php");

$consulta = $conexion->query("SELECT id_autor, apellido, nombre, telefono, ciudad, estado FROM autores");
$autores = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                <img src="../assets/img/logo.png" alt="Logo" width="40" class="me-2">
                <span>Biblioteca Online</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="libros.php">
                            <i class="bi bi-book"></i> Libros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="autores.php">
                            <i class="bi bi-people"></i> Autores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">
                            <i class="bi bi-envelope"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="mb-4 text-center">
            <h1>Listado de Autores</h1>
            <p class="text-muted">Aquí puedes ver los autores registrados en la biblioteca.</p>
        </div>

<div class="row mb-3">
    <div class="col-md-6 mx-auto">
        <input type="text" id="buscar-autor" class="form-control" placeholder="Buscar autor...">
    </div>
</div>

        <div class="card shadow-sm borde-suave">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle" id="tabla-autores">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Apellido</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($autores) > 0): ?>
                                <?php foreach ($autores as $autor): ?>
                                    <tr>
                                        <td><?php echo $autor['id_autor']; ?></td>
                                        <td><?php echo $autor['apellido']; ?></td>
                                        <td><?php echo $autor['nombre']; ?></td>
                                        <td><?php echo $autor['telefono']; ?></td>
                                        <td><?php echo $autor['ciudad']; ?></td>
                                        <td><?php echo $autor['estado']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">No hay autores registrados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-center mt-3">
                    <a href="../index.php" class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle"></i> Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
         <small>Proyecto Final - Programación Web <span id="anio"></span></small>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>