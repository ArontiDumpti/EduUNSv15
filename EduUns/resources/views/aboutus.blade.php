<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>EduUNS</title>
</head>

<body>

    <nav>
        <a href="#" class="logo">EduUNS</a>
        <div class="links">
            <a href="#">Inicio</a>
            <a href="#">Características</a>
            <a href="#">Blog</a>
            <a href="#">Acerca de nosotros</a>
        </div>
        <div class="login">
            <button class="signup">Registrate</button>
            <button>Inicia Sesión</button>
        </div>
    </nav>

    <header style="gap: 20px;">
        <div class="left">
            <h1>Contacto <span2>Hunti</span2></h1>
            <p>Si tienes cualquier pregunta o simplemente quieres saludarnos, 
                la mejor manera de contactarnos es a través de nuestro formulario. 
                Hacemos todo lo posible para responder en menos de 48 horas, pero si 
                tardamos un poquito más, ¡perdónanos! Leemos cada mensaje y los distribuimos 
                internamente para garantizar que terminas hablando con la persona adecuada.
            </p>
            <a href="#">
                <i class='bx bx-basket'></i>
                <span>Enviar Ticket</span>
            </a>
        </div>
        <img class="contact-image" src="{{ asset('assets/huntiing.jpg') }}" alt="Contacto Hunti" style="max-width: 400px; max-height: 400px; object-fit: cover; border-radius: 10px; margin-left: -100px;">
    </header>



    <footer>
        <h3>Innova y enriquece los conocimientos</h3>
        <div class="right">
            <div class="links">
                <a href="#">Política de Privacidad</a>
                <a href="#">Cooperación</a>
                <a href="#">Patrocinio</a>
                <a href="#">Contáctenos</a>
            </div>
            <div class="social">
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxl-github'></i>
            </div>
            <p>Copyright © 2024 EduUNS, Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>
