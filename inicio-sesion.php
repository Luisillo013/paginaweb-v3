<?php

require_once("./conexion_bd.php");

$query = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";

$prepare = $conn->prepare($query);

$prepare->bind_param("ss", $_POST["correo"], $_POST["contrasena"]);

$prepare->execute();

$result = $prepare->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    session_start();
    $_SESSION["usuario"] = (object) $usuario;

    header('Location: ./nueva-dasboard.php');
} else {
    header('Location: ./error.html');
}

$prepare->close();
$conn->close();
?>