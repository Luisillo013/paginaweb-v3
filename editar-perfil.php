<?php
session_start();


if (!isset($_SESSION["usuario"])) {
    header('Location: ./index.php');
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
    require_once("./conexion_bd.php");  

    
    $nombres = htmlspecialchars($_POST["nombres"]);
    $apellidos = htmlspecialchars($_POST["apellidos"]);

    
    $imagen_dir = "./img-uploads/";  
    $imagen_nombre = $_FILES["imagen"]["name"];
    $imagen_temp = $_FILES["imagen"]["tmp_name"];
    $imagen_ruta = $imagen_dir . $imagen_nombre;

    
    move_uploaded_file($imagen_temp, $imagen_ruta);

    
    $query = "UPDATE usuarios SET nombres = ?, apellidos = ?, imagen = ? WHERE id = ?";
    $prepare = $conn->prepare($query);

    
    $prepare->bind_param("sssi", $nombres, $apellidos, $imagen_ruta, $_SESSION["usuario"]->id);

    if ($prepare->execute()) {
        $_SESSION["usuario"]->nombres = $nombres;
        $_SESSION["usuario"]->apellidos = $apellidos;
        $_SESSION["usuario"]->imagen = $imagen_ruta;

        
        header('Location: ./perfil.php');
        exit();
    } else {
        
        header('Location: ./error.html');
        exit();
    }

    $prepare->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="./assets/CSS/estilosregistro.css">
    <link href="https://fonts.googleapis.com/css?family=roboto:300,400,500,700&display=swap" rel="stylesheet">

    <style>
        .form {
            text-align: center;
        }

        .form img {
            width: 100px; 
            height: 100px; 
            border-radius: 50%; 
            margin-bottom: 10px; 
        }

    </style>
</head>
<body>
    <form action="./editar-perfil.php" method="POST" id="form" enctype="multipart/form-data">
        <div class="form">
            <h1>Editar perfil</h1>
            <img src="<?php echo isset($_SESSION["usuario"]->imagen) ? $_SESSION["usuario"]->imagen : ''; ?>" alt="Imagen de perfil actual">

            <div class="grupo">
                <input type="file" name="imagen" id="imagen">
                <label for="imagen">Nueva imagen de perfil</label>
            </div>

            <div class="grupo">
                <input type="text" name="nombres" id="name_1" required value="<?php echo isset($_SESSION["usuario"]->nombres) ? $_SESSION["usuario"]->nombres : ''; ?>"><span class="barra"></span>
                <label for="">Nombre</label>
            </div>  
            <div class="grupo">
                <input type="text" name="apellidos" id="name_2" required value="<?php echo isset($_SESSION["usuario"]->apellidos) ? $_SESSION["usuario"]->apellidos : ''; ?>"><span class="barra"></span>
                <label for="">Apellidos</label>
            </div>  
                <button type="button" onclick="confirmarEliminar()">Eliminar imagen</button> 
            
            <button type="submit" name="registrar">Actualizar</button>
            <p class="warnings" id="warnings"></p>

            
    <script>
        function confirmarEliminar() {
            if (confirm("¿Estás seguro que deseas eliminar tu imagen de perfil?")) {
                window.location.href = "./eliminar-imagen.php";
            }
        }
    </script>
            <a href="nueva-dasboard.php
            " style="text-decoration: none;"><button type="button">Volver</button></a>
        </div>
    </form>
</body>
</html>
