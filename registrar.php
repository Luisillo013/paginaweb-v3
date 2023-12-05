<?php

require_once("./conexion_bd.php");

$query = "INSERT INTO usuarios (nombres, apellidos, correo, contrasena) VALUES (?, ?, ?, ?)";

$prepare = $conn->prepare($query);

$prepare->bind_param("ssss", $_POST["nombres"], $_POST["apellidos"], $_POST["correo"], $_POST["contrasena"]);

if ($prepare->execute()) {
    header('Location: ./inicio-sesion.html');
} else {
    header('Location: ./error.html');
}

$prepare->close();
$conn->close();
?>