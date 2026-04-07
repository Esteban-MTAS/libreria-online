<?php
$host = "sql202.infinityfree.com";
$dbname = "if0_41597473_biblioteca";
$user = "if0_41597473";
$pass = "Acosta2004456";

try {
    $conexion = new PDO("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>