<?php
require_once("../bd/conexion.php");

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contacto.php");
    exit();
}

$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$asunto = trim($_POST["asunto"] ?? "");
$comentario = trim($_POST["comentario"] ?? "");

if ($nombre == "" || $correo == "" || $asunto == "" || $comentario == "") {
    header("Location: contacto.php?error=1");
    exit();
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: contacto.php?error=2");
    exit();
}

$sql = "INSERT INTO contacto (correo, nombre, asunto, comentario)
        VALUES (:correo, :nombre, :asunto, :comentario)";

$consulta = $conexion->prepare($sql);

$consulta->bindParam(":correo", $correo);
$consulta->bindParam(":nombre", $nombre);
$consulta->bindParam(":asunto", $asunto);
$consulta->bindParam(":comentario", $comentario);

if ($consulta->execute()) {
    header("Location: contacto.php?ok=1");
    exit();
} else {
    header("Location: contacto.php?error=3");
    exit();
}
?>