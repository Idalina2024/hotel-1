<!DOCTYPE html>
<html>
<head>
    <title>Hostal Travel</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Añade las fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FFFFFF; /* Celeste pastel */
            font-family: 'Roboto', sans-serif; /* Fuente para el cuerpo del texto */
            margin: 0;
            padding: 0;
            position: relative; /* Añadido para que el posicionamiento absoluto sea relativo al cuerpo */
        }
        html, body {
            height: 100%;
        }
        .container {
            background-color: #FFFFFF; /* Celeste pastel */
            min-height: 100%;
            position: relative; /* Añadido para que el posicionamiento absoluto sea relativo al contenedor */
        }
        .header-title {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
            background-color: transparent; /* Fondo transparente */
        }
        .header-title img {
            height: 50px;
            margin-right: 10px;
        }
        .carousel-container {
            width: 110%;
            height: 80vh;
            margin: 0 auto;
            position: relative;
            overflow: hidden; /* Añadido para evitar que las imágenes del carrusel desplacen el contenido */
        }
        .carousel-inner {
            height: 100%;
        }
        .carousel-item {
            position: relative;
            height: 100%;
        }
        .carousel-item img {
            width: 100%;
            height: auto; /* Ajuste para mantener la proporción de las imágenes */
            object-fit: cover;
        }
        .carousel-caption {
            position: absolute;
            bottom: 20%;
            left: 10%;
            z-index: 10;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 1s ease-in-out;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 15px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .carousel-indicators {
            bottom: 20px;
        }
        .carousel-indicators li {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 12px;
            height: 12px;
        }
        .carousel-indicators .active {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .facebook-logo {
            position: fixed; /* Fija el icono en la esquina superior derecha */
            top: 10px; /* Ajusta la posición desde arriba */
            right: 10px; /* Ajusta la posición desde la derecha */
            z-index: 20;
            transform: translateX(0); /* Añadido para mejorar la animación */
            transition: transform 0.3s ease; /* Añadido para una animación suave */
        }
        .facebook-logo:hover {
            transform: translateX(5px); /* Añadido para un efecto de desplazamiento al hacer hover */
        }
        .facebook-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%; /* Añadido para hacer el icono circular */
            background-color: #3b5998; /* Añadido para el color de fondo de Facebook */
            padding: 5px; /* Añadido para dar espacio al icono dentro del círculo */
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                transform: none;
            }
        }
        /* Estilo para el título con la nueva fuente */
        .title h1 {
            font-family: 'Lobster', cursive; /* Aplica la fuente Lobster al título */
            color: #01579B; /* Azul más claro */
            margin: 0;
            background-color: transparent; /* Fondo transparente */
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #f8f9fa;
            color: #6c757d;
            padding: 20px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_SESSION['nombre'])){
            $nombre = $_SESSION['nombre'];
            $apellido = $_SESSION['apellido'];
        }
        ?>
        <?php 
        if(isset($_SESSION['nombre'])){ ?>
            <ul class="dropdown">
                <li>
                    <a><img style="display:inline;margin-right:1%;" height="16" width="16" src="img/user.png"><?php echo "$nombre $apellido" ?></a>
                    <ul>
                        <li><a href="reservasCliente.php">Mis reservas</a></li>
                        <li><a href="perfil.php">Mi perfil</a></li>
                        <li><a href="logout.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
            <?php
        }
        ?>
        <a class="engranaje" style="display: <?php if(isset($_SESSION['nombre'])){ echo "none"; } ?> " href="loginEmpleados.php"><img src="img/engranaje.png" height="25" width="25" /></a>
        <a class="icono-login" style="display: <?php if(isset($_SESSION['nombre']) || isset($_SESSION['usuario'])){ echo "none"; } ?> " href="loginClientes.php"><img src="img/login.jfif" height="25" width="25" /></a>
        <div class="header-title">
            <img src="img/logohostaultimo1.jpg" alt="Logo">
            <a class="title" href="index.php"><h1>HOSTAL TRAVEL</h1></a>
        </div>
        <div id="header">
            <div id="nav">
                <ul>
                    <li><a href="habitacionesIndex.php">Habitaciones</a></li>
                    <li><a href="reservasIndex.php">Reservas</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div id="body">
            <h2>Acerca de: </h2>
            <div class="carousel-container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/PRIN.JPEG" class="d-block w-80" alt="Hotel 1">
                            <img src="img/PNH.JPEG" class="d-block w-80" alt="Hotel 1">
                            <div class="carousel-caption">
                                
                                <h3>Bienvenido a Hostal Travel</h3>
                                <p>Disfruta de una estancia inolvidable</p>
                            </div>
                            
                            
                        </div>
                        <div class="carousel-item">
                            <img src="img/PNH.JPEG" class="d-block w-80" alt="Hotel 2">
                           
                            <div class="carousel-caption">
                                <h3>Confort y lujo</h3>
                                <p>Nuestras habitaciones están diseñadas para tu comodidad</p>
                            </div>
                            
                        </div>
                        
                        <div class="carousel-item">
                            <img src="img/PIN.JPEG" class="d-block w-80" alt="Hotel 2">
                           
                            <div class="carousel-caption">
                                <h3>Confort y lujo</h3>
                                <p>Nuestras habitaciones están diseñadas para tu comodidad</p>
                            </div>
                            
                        </div>
                        <!-- Agrega más imágenes aquí si es necesario -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="facebook-logo">
                        <a href="https://www.facebook.com/profile.php?id=100086536038643" target="_blank">
                            <img src="img/fack.png" alt="Facebook Logo">
                        </a>
                    </div>
                </div>
            </div>
            <p> 
                En nuestro hostal, cada momento es una experiencia única. Desde el momento en que entras por nuestras puertas, te envolvemos en un mundo de lujo y serenidad. Nuestras habitaciones son un santuario de confort, donde cada detalle ha sido cuidadosamente seleccionado para tu placer.
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/ha2.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Explora la belleza y el confort que ofrecemos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/ha3.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Relájate en nuestras cómodas habitaciones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/h4.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Disfruta de nuestras instalaciones modernas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/sala.jpeg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Disfuta de la comodidad de la sala.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/recreo.jpeg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Descubre nuestras zonas recreativas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border border-secondary mb-3">
                            <img src="img/jacuzzi.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">Relájate en el jacuzzi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
    #map {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Ajusta el margen según sea necesario */
    }

    #map iframe {
        max-width: 100%; /* Ajusta el ancho máximo del iframe */
    }
</style>

<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3110.784040678345!2dTU_LONGITUD!3dTU_LATITUD!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sUbicaci%C3%B3n!5e0!3m2!1ses!2sus!4v1624842622206!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<style>
    .container {
        background-color: #aed6f1; /* Color celeste pastel */
        padding: 20px; /* Ajusta el padding según sea necesario para separar el contenido del borde */
    }

    .section-background {
        background-color: #ffc0cb; /* Color rosa pastel (ejemplo) */
        padding: 20px; /* Ajusta el padding según sea necesario */
        margin-top: 20px; /* Ajusta el margen superior según sea necesario */
    }
</style>
<div class="container">
    <div class="row justify-content-center section-background">
        <div class="col-md-6 text-center">
            <p>© 2024 Hostal Travel.</p>
            <p>CONTACTO: 917915214.</p>
            <p>FACEBOOK: Travel Hostal.</p>
        </div>
      
        <div class="col-md-6 text-center">
            <p>Descubre la magia de una.</p>
            <p>estancia inolvidable en.</p>
            <p>Hostal Travel.</p>
            <p>lujo, confort y serenidad en cada rincón.</p>
        </div>
    </div>
</div>

<style>
    .container {
        background-color: #aed6f1; /* Color celeste pastel */
        padding: 20px; /* Ajusta el padding según sea necesario para separar el contenido del borde */
    }

    .section-background {
        background-color: #ffc0cb; /* Color rosa pastel (ejemplo) */
        padding: 20px; /* Ajusta el padding según sea necesario */
        margin-top: 20px; /* Ajusta el margen superior según sea necesario */
    }
</style>

    
</div>
    </div>
</div>

>
        </div>
    </div>

    
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>