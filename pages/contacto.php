<?php
$mensaje = "";
$tipo = "";

if (isset($_GET['ok'])) {
    $mensaje = "Mensaje enviado correctamente.";
    $tipo = "success";
}

if (isset($_GET['error'])) {
    $mensaje = "No se pudo enviar el mensaje. Verifica los datos.";
    $tipo = "danger";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
                        <a class="nav-link" href="autores.php">
                            <i class="bi bi-people"></i> Autores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contacto.php">
                            <i class="bi bi-envelope"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="mb-4 text-center">
            <h1>Formulario de Contacto</h1>
            <p class="text-muted">Envíanos tu mensaje llenando el siguiente formulario.</p>
        </div>

        <?php if ($mensaje != ""): ?>
    <div class="alert alert-<?php echo $tipo; ?> text-center">
        <?php echo $mensaje; ?>
    </div>
<?php endif; ?>

        <div class="card shadow-sm borde-suave">
            <div class="card-body p-4">
                <form action="guardar_contacto.php" method="POST" id="formulario-contacto">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Asunto</label>
                        <input type="text" name="asunto" id="asunto" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Comentario</label>
                        <textarea name="comentario" id="comentario" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="bi bi-send"></i> Enviar
                        </button>
                        <a href="../index.php" class="btn btn-secondary">
                            <i class="bi bi-arrow-left-circle"></i> Volver al inicio
                        </a>
                    </div>
                </form>
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