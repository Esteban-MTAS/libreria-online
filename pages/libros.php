<?php
require_once("../bd/conexion.php");

$sql = "SELECT id_titulo, titulo, tipo, precio, fecha_pub FROM titulos";
$stmt = $conexion->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
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
                        <a class="nav-link active" href="libros.php">
                            <i class="bi bi-book"></i> Libros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="autores.php">
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
            <h1>Listado de Libros</h1>
            <p class="text-muted">Aquí puedes ver los libros disponibles en la biblioteca.</p>
        </div>

<div class="row mb-3">
    <div class="col-md-6 mx-auto">
        <input type="text" id="buscar-libro" class="form-control" placeholder="Buscar libro...">
    </div>
</div>
        <div class="card shadow-sm borde-suave">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle" id="tabla-libros">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Tipo</th>
                                <th>Precio</th>
                                <th>Fecha de publicación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($libros) > 0): ?>
                                <?php foreach ($libros as $libro): ?>
                                    <tr>
                                        <td><?php echo $libro['id_titulo']; ?></td>
                                        <td><?php echo $libro['titulo']; ?></td>
                                        <td><?php echo $libro['tipo']; ?></td>
                                        <td>
                                            <?php
                                            if ($libro['precio'] != null) {
                                                echo "$" . number_format($libro['precio'], 2);
                                            } else {
                                                echo "No disponible";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if (!empty($libro['fecha_pub'])) {
                                                echo date("d/m/Y", strtotime($libro['fecha_pub']));
                                            } else {
                                                echo "Sin fecha";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">No hay libros registrados.</td>
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