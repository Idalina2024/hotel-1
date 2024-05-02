<!DOCTYPE html>
<html>
<head>
    <title>Hostal Travel</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="icon" type="image/png" href="img/icono-hotel.ico">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .square-image {
            max-width: 50%;
            height: auto;
            max-height: 200px; /* Este es el tamaño máximo que puedes ajustar según tus necesidades */
        }
        .carousel-container {
            max-width: 800px; /* Por ejemplo, establece el ancho máximo según tus necesidades */
            margin: 0 auto; /* Esto centrará el contenedor en la página */
        }
        /* Cambiar el color de las flechas del carrusel a verde */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: green;
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

    <a class="title" href="index.php"><h1>HOTEL TRAVEL</h1></a>
    
    <div id="header">
        <div id="nav">
            <ul><li><a href="habitacionesIndex.php">Habitaciones</a></li>
                <li><a href="reservasIndex.php">Reservas</a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
    <div id="body">
        <h2>Acerca de: </h2>
        <div class="carousel-container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/hotel1.jpg" class="d-block w-100 square-image" alt="50">
                    </div>
                    <div class="carousel-item">
                        <img src="img/hotel2.jpg" class="d-block w-100 square-image" alt="50">
                    </div>
                    <!-- Agrega más imágenes aquí si es necesario -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <p> 
            En nuestro hotel, cada momento es una experiencia única. Desde el momento en que entras por nuestras puertas, te envolvemos en un mundo de lujo y serenidad. Nuestras habitaciones son un santuario de confort, donde cada detalle ha sido cuidadosamente seleccionado para tu placer.
        </p>
    </div>

    <div id="foot">
        Carlos Chavez Fuentes
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
