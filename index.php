<?php
    session_start();

    $tieneSesion = isset($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institucion Educativa</title>
    
    <link rel="stylesheet" href="./assets/CSS/style.css"> 
</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">Institucion</h2>
            </div>
        <ul class="nav_link nav_link--menu">
        <li class="nav_items">
            <a href="index.php" class="nav_links">Inicio</a>
        </li>   
        <li class="nav_items">
            <a href="Acerca.html" class="nav_links">Acerca de</a>   
        </li>  
        <li class="nav_items">
            <a href="Contacto.html" class="nav_links">Contacto</a>   
        </li>  
        
        <img src="./imagenes/close.svg" alt="cerrar" class="nav_close">

        </li>    
        </ul>
        <div class="nav_menu">
            <img src="./imagenes/menu.svg" alt="Menu" class="nav_img">
        </div>

        </nav>

        <section class="hero_container container">
            <h1 class="hero_title">Bienvenido</h1>
            <p class="hero_paragrahp">Tus talentos y habilidades irán mejorando con el tiempo, pero para eso has de empezar (Martin Luther King)</p>
        </section>
    </header>
<main>
    <section class="container about">
        <h2 class="subtitle">¿Ya te registraste?</h2>
        <p class="about_paragraph">Aca podras registrarte a nuestra pagina y poder ingresar a todo nuestro contenido</p>

        <div class="about_main">
            <article class="about_icons">
                <img src="./imagenes/registrarusuario.svg" class="about_icon">
                <h3 class="about_title">Registrarte</h3>
                <p class="about_paragraph">Registrarte como ususario nuevo</p>
                <a href="Registro.html" class="cta">Registrarte</a>

            </article>

            <article class="about_icons">
                <img src="./imagenes/iniciosesion.svg" class="about_icon">
                <h3 class="about_title">Inicio Sesion </h3>
                <p class="about_paragraph">Inicia sesion si ya te encuentras registrado</p>
                <a href="./inicio-sesion.html" class="cta">Inicio Sesion</a>

            </article>
        </div>
    </section>

<section class="knowledge">
    <div class="knowledge_container container">
        <div class="knowledge_texts">
            <h2 class="subtitle">Estrategias para el éxito </h2>
            <p class="knowledge_paragrahp">Somos una comunidad educativa formada por estudiantes, docentes, egresados, padres de familia y miembros del personal administrativo. Nuestra rica historia es la base de nuestros valores. Somos diversos, acogedores, receptivos y apasionados con la academia. Únete a nosotros para que tu experiencia educativa sea inolvidable.</p>

         </div>
         <figure class="knowledge_picture">
            <img src="./imagenes/Cuaderno.jpg" class="knowledge_img">
        </figure>
        </div>
<section class="testimony">
    <div class="testimony_container container">
        <img src="./imagenes/leftarrow.svg" alt="left" class="testimony_arrow" id="before">
        <section class="testimony_body testimony_body--show" data-id="1">
            <div class="testimony_texts">
                <h2 class="subtitle">Donde empieza todo , <span class="testimony_course">Tu futuro te espera</span></h2>
                <p class="testimony_review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sunt adipisci, molestias praesentium reiciendis nesciunt quas minus labore sapiente, consequuntur quaerat harum officiis aut illo nisi, distinctio accusantium nam totam.</p>
            </div>
            <figure class="testimony_picture">
                <img src="./imagenes/donde todo empieza.jpg" class="testimony_img">
            </figure>
        </section>
        <section class="testimony_body" data-id="2">
            <div class="testimony_texts">
                <h2 class="subtitle">Tu formacion es importante , <span class="testimony_course">estamos para guiarte en este camino</span></h2>
                <p class="testimony_review">Lorem ipsum  Dolor sunt adipisci, molestias praesentium reiciendis nesciunt quas minus labore sapiente, consequuntur quaerat harum officiis aut illo nisi, distinctio accusantium nam totam.</p>
            </div>
            <figure class="testimony_picture">
                <img src="./imagenes/Estudiante con exito.jpg" class="testimony_img">
            </figure>
        </section>
        <img src="./imagenes/rightarrow.svg" alt="right" class="testimony_arrow" id="next">

    </div>
</section>

<section class="questions container">
    <h2 class="subtitle">Preguntas frecuentes</h2>
    <p class="questions_paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, molestias eius asperiores enim, doloribus autem</p>
    <section class="questions_container">
        <article class="questions_padding">
            <div class="questions_answer">
                <h3 class="questions_title">¿Quienes Somos? 
                    <span class="questions_arrow">
                        <img src="./imagenes/arrow.svg" class="questions_img">
                    </span>
                </h3>

                <p class="questions_show">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, qui dolor? Fuga, 
                    provident nesciunt quis, consequatur rerum mollitia eaque ipsam, totam possimus cupiditate consequuntur? 
                    Dolores odio culpa aut possimus quae.</p>
            </div>
        </article>
        <article class="questions_padding">
            <div class="questions_answer">
                <h3 class="questions_title">Misión y Visión 
                    <span class="questions_arrow">
                        <img src="./imagenes/arrow.svg" class="questions_img">
                    </span>
                </h3>
                <p class="questions_show">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, qui dolor? Fuga, 
                    provident nesciunt quis, consequatur rerum mollitia eaque ipsam, totam possimus cupiditate consequuntur? 
                    Dolores odio culpa aut possimus quae.</p>
            </div>
        </article>
        <article class="questions_padding">
            <div class="questions_answer">
                <h3 class="questions_title">¿Eres estudiante? 
                    <span class="questions_arrow">
                        <img src="./imagenes/arrow.svg" class="questions_img">
                    </span>
                </h3>

                <p class="questions_show">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, qui dolor? Fuga, 
                    provident nesciunt quis, consequatur rerum mollitia eaque ipsam, totam possimus cupiditate consequuntur? 
                    Dolores odio culpa aut possimus quae.</p>
            </div>
        </article>
    </section>
</section>

</main>
<footer class="footer">
    <section class="footer_container container">
        <nav class="nav nav--footer">
            <h2 class="footer_title">Institucion</h2>
            <ul class="nav_link nav_link--footer">
                <li class="nav_items">
                    <a href="#" class="nav_links">Inicio</a>
                </li>  
                <li class="nav_items">
                    <a href="#" class="nav_links">Acerca de</a>   
                </li>   
                <li class="nav_items">
                    <a href="#" class="nav_links">Contacto</a>   
                </li> 

            </ul>
        </nav>

        <form class="footer_form">
            <h2 class="footer_newsletter">Suscribete a nuestra Institucion</h2>
            <div class="footer_inputs">
                <input type ="e-mail" placeholder="Email" class="footer_input">
                <input type ="submit" value="Registrate" class="footer_submit">

            </div>
        </form>
    </section>
    <section class="footer_copy container">
        <div class="footer_social">
            <a href="#" class="footer_icons"><img src="./imagenes/facebook.svg" class=" footer_img"></a>
            <a href="#" class="footer_icons"><img src="./imagenes/youtube.svg" class=" footer_img"></a>
            <a href="#" class="footer_icons"><img src="./imagenes/twiter.svg" class=" footer_img"></a>
        </div>

        <h3 class="footer_copyright">Derechos Reservados &copy;Sena Ficha:2521980</h3>
    </section>
</footer>



<script src="./JS/slider.js"></script>
<script src="./JS/questions.js"></script>    
</body>
</html>