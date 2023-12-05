<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header('Location: ./index.php');
    exit();
}

require_once("./conexion_bd.php"); 


$usuario_id = $_SESSION["usuario"]->id;
$imagen_actual = $_SESSION["usuario"]->imagen;

if (!empty($imagen_actual) && file_exists($imagen_actual)) {
    unlink($imagen_actual);
}

$query = "UPDATE usuarios SET imagen = NULL WHERE id = ?";
$prepare = $conn->prepare($query);
$prepare->bind_param("i", $usuario_id);

if ($prepare->execute()) {
    $_SESSION["usuario"]->imagen = NULL;
    header('Location: ./perfil.php');
    exit();
} else {
    header('Location: ./error.html');
    exit();
}

$prepare->close();
$conn->close();
?>
