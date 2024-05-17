<!DOCTYPE html>
<html>
<head>
    <title>Hostal Travel</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-container {
            width: 100%;
            height: 50vh;
            margin: 0 auto;
            position: relative;
        }
        .carousel-inner {
            height: 100%;
        }
        .carousel-item {
            position: relative;
            height: 100vh;
        }
        .carousel-item img {
            width: 100;
            height: 50%;
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
    </style>
</head>
<body>
    <?php 
    session_start();

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

    <a class="title" href="index.php"><h1>HOSTAL TRAVEL</h1></a>
    
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
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/hotel2.jpg" class="d-block w-100" alt="Hotel 1">
                        <div class="carousel-caption">
                            <h3>Bienvenido a Hostal Travel</h3>
                            <p>Disfruta de una estancia inolvidable</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/hotel3.jpg" class="d-block w-100" alt="Hotel 2">
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
            </div>
        </div>
        <p> 
            En nuestro hostal, cada momento es una experiencia única. Desde el momento en que entras por nuestras puertas, te envolvemos en un mundo de lujo y serenidad. Nuestras habitaciones son un santuario de confort, donde cada detalle ha sido cuidadosamente seleccionado para tu placer.
        </p>
    </div>

    <div id="foot">
<<<<<<< HEAD
         Juan Carlos Chavez Fuentes
=======
      Juan Carlos Chavez Fuentes
>>>>>>> 44b2104db4bb6b6b4c05ddc829798b08ffcfbfb9
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
