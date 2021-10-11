<?php
error_reporting(0);

$Nombre = $_POST['name'];

echo "<h1 class=\"nombre_logo\">$Nombre</h1>";

include("./database.php");

$Pregunta_1 = $_POST['Pregunta_1'];

$Pregunta_2 = $_POST['Pregunta_2'];

$consulta = "INSERT INTO respuestas( respuesta1, respuesta2) VALUES ('$Pregunta_1','$Pregunta_2')";

$resultado = mysqli_query($conexion,$consulta);    


?>
<!DOCTYPE html>
<html lang="es" class="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTURE</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="http://fonts.cdnfonts.com/css/anurati" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>
<body class="body_home">
    <header class="header_home">
        <h1 class="nombre_bienvenida">¡Bievenido/a a FUTURE!</h1>
        <nav class="nav_home">
            <li class="btn_h1"><a href="./index.php" class="icon1">Cambiar Nombre</a></li>
            <li class="btn_h2"><a href="#Redes" class="icon2">Redes Sociales</a></li>
        </nav> 
    </header>
    <main class="main_home" id="arriba">
        <img loading="lazy" src="./img/tierra.png" class="tierra" alt="">
        <div class="texto_principal">
        <h1 class="tinicio">DIOS ES PASADO, <br>DIOS ES PRESENTE, <br>DIOS ES FUTURE</h1>
            <p class="pincio">Juan 1:1 TLA
            Antes de que todo comenzara, ya existía aquel que es la Palabra. La Palabra estaba con Dios, y la Palabra era Dios.</p>    
            <h2 class="t2inicio">¡Ven con Nosotros!</h2>
        </div>
        <section class="viaje">
        <img loading="lazy" src="./img/planeta 1.png" class="planeta planeta1" alt="">
            <div class="content con1 animado">
                <h1>Dios y la Ciencia se pueden conectar</h1>
                <p>Déjame explicarte un poco sobre el significado de la página, el título no es casualidad, casualmente quiero ser un científico que resulta que ya es Cristiano, y mucha gente dice que estás dos cosas no se pueden mezclar. <br> <br> Salmos 111:2 (Versión DHH) "Las obras del Señor son grandes,
                y quienes las aman, las estudian.", resulta que no es que contradigamos cosas más bien existen cristianos que resultan ser curiosos, uno de los hechos es que varios de los científicos son Cristianos y la ciencia se rige bajo descubrimentos suyos, científico como Nikola Tesla, Gregor Mendel, etc. <br> <br>
                La cuestión es que hasta existen hechos científicamente comprobados en los que Jesús y sus maravillas son expuestas al público, por lo que la duda de que la ciencia no se conecta con Dios debería de no atormentarnos, es cierto se tienen algunos límites, claro como en cualquier otra cosa, pero Dios está en todo lugar, y no debo de pedir conocimiento sino sabiduría para deducir al conocimiento.</p>
            </div>
            <div class="content con2">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1 class="element">¿Qué opina sobre Dios y su conexión y la Ciencia?</h1>
                    <input class="input" type="text" name="Pregunta_1" placeholder="Escriba Aquí">
                    <h1 class="element">¿Concuerda Usted con el artículo anterior? ¿Podría argumentar su respuesta a fondo?</h1>
                    <input class="input" type="text" name="Pregunta_2" placeholder="Escriba Aquí">
                    <<input type="submit" class="subir" placeholder="ENVIAR" name="enviar">
                </form>
            </div>
            <img loading="lazy" src="./img/sol.png" class="planeta sol" alt="">
        </section>
    </main>
    <footer class="footer_home">
        <a href="https://www.linkedin.com/in/angel-solval-0234a3213/" class="logo_principal">Angel Solval <i class="fas fa-smile-wink"></i></a>
        <h1>Derehos de autor reservados Copy&Right ©</h1>
        <div class="redes" id="Redes">
            <a href="https://www.linkedin.com/in/angel-solval-0234a3213/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/angel.solval.9"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/angel_solval/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/angelsolval/angelsolval"><i class="fab fa-github"></i></a>
            <a href="#arriba"><i class="fas fa-arrow-circle-up"></i></a>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/40abe1947c.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="./assets/index.js"></script>
</html>