<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header('Location: ./index.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
 
    $nombres = htmlspecialchars($_POST["nombres"]);
    $apellidos = htmlspecialchars($_POST["apellidos"]);

    $_SESSION["usuario"]->nombres = $nombres;
    $_SESSION["usuario"]->apellidos = $apellidos;

    header('Location: ./perfil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./assets/CSS/estilosregistro.css">
    <link href="https://fonts.googleapis.com/css?family=roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<style>
    .perfil {
        text-align: center;
    }

    .perfil img {
        width: 100px; 
        height: 100px; 
        border-radius: 50%; 
        margin-bottom: 10px; 
    }

    .perfil h1 {
        margin-bottom: 20px; 
    }

    .boton-retroceder {
        text-decoration: none;
        background-color: #3498db; 
        color: #fff; 
        padding: 10px 20px; 
        border-radius: 5px; 
        display: inline-block; 
        margin-top: 10px; 
    }

    .boton-retroceder:hover {
        background-color: #2980b9; 
    }
</style>
<body>
    <div class="perfil">
       
        <img src="<?php echo $_SESSION["usuario"]->imagen; ?>" alt="Imagen de perfil">

        <h1><?php echo $_SESSION["usuario"]->nombres . ' ' . $_SESSION["usuario"]->apellidos; ?></h1>

        <a href="./editar-perfil.php" class="boton-retroceder">Editar perfil</a> <br>

        <a href="./nueva-dasboard.php" class="boton-retroceder">Atras</a>

        <br>

        <a href="./cerrar-sesion.php" class="boton-retroceder">Cerrar sesión</a>
    </div>
</body>
</html>
