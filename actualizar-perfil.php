<?php

require_once("./conexion_bd.php");

session_start();

$query = "UPDATE usuarios SET nombres = ?, apellidos = ? WHERE id = ?";

$prepare = $conn->prepare($query);

$prepare->bind_param("ssi", $_POST["nombres"], $_POST["apellidos"], $_SESSION["usuario"]->id);

if ($prepare->execute()) {
    $_SESSION["usuario"]->nombres = $_POST["nombres"];
    $_SESSION["usuario"]->apellidos = $_POST["apellidos"];

    header('Location: ./perfil.php');
} else {
    header('Location: ./error.html');
}

$prepare->close();
$conn->close();
?>