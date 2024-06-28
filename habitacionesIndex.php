<?php 
	session_start();

    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostal - Habitaciones</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Cairo|Merriweather+Sans|Pacifico&display=swap" rel="stylesheet">
	<style>
	    .square-image {
	        border: 5px solid #ccc; /* Establece un borde gris por defecto */
	        border-radius: 10px; /* Redondea los bordes */
	        padding: 5px; /* Añade espacio entre la imagen y el borde */
	        max-width: 100%; /* Ajusta el tamaño máximo de la imagen al ancho disponible */
	        height: auto; /* Ajusta la altura automáticamente */
	    }
	    .title h1 {
	        font-family: 'Pacifico', cursive; /* Cambia la fuente a 'Pacifico' */
	        font-size: 2.5em; /* Tamaño reducido */
	    }
	    .carousel-item {
	    	display: none; /* Ocultar todas las imágenes inicialmente */
	    	width: 100%; /* Ocupar todo el ancho del contenedor */
	    }
	    .carousel-item.active {
	    	display: block; /* Mostrar la imagen activa */
	    }
	    .image-with-text {
	    	margin-bottom: 20px; /* Espacio entre imágenes */
	    }
	    .image-with-text img {
	    	max-width: 200px; /* Tamaño máximo de las imágenes */
	    	height: auto;
	    	border: 5px solid #808080; /* Borde color plomo */
	    	border-radius: 10px; /* Redondea los bordes */
	    }
	    .image-with-text p {
	    	font-family: 'Cairo', sans-serif;
	    	font-size: 1.2em;
	    	margin-top: 5px; /* Espacio entre la imagen y el texto */
	    	color: blue; /* Color del texto azul */
	    }
	    .image-row {
	    	display: flex;
	    	justify-content: center;
	    	align-items: center;
	    	margin-bottom: 20px; /* Espacio entre filas de imágenes */
	    }
	    .image-row .image-with-text {
	    	margin: 0 10px;
	    }
	</style>
</head>
<body>
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

	<a class="title" href="index.php"><h1 style="font-family: 'Arial', sans-serif;">HOSTAL TRAVEL</h1></a>
    
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
		
	<div>
		<form class="habitacion" action="habitacionesIndex.php" method="post">

			<input onchange="this.form.submit();" name="floor" type="radio" value="1" id="floor1" <?php if (isset($_POST['floor']) && $_POST['floor'] == '1'){echo 'checked="checked"';} ?>><label for="floor1">Piso 1</label>
			<input onchange="this.form.submit();" name="floor" type="radio" value="2" id="floor2" <?php if (isset($_POST['floor']) && $_POST['floor'] == '2'){echo 'checked="checked"';} ?>><label for="floor2">Piso 2</label>
		</form>
		<div class="carousel-item <?php echo isset($_POST['floor']) ? 'active' : ''; ?>" style="display: inline-block; margin-right: 100px;">
			<?php if (isset($_POST['floor']) && $_POST['floor'] == '1') : ?>
				<div class="image-row">
					<div class="image-with-text">
          				<img src="img/ha2.jpg" alt="Imagen 1">
          				<p style="color: blue;">Habitación 1</p>
        			</div>
        			<div class="image-with-text">
          				<img src="img/ha2.jpg" alt="Imagen 2">
          				<p style="color: blue;">Habitación 2</p>
        			</div>
					<div class="image-with-text">
          				<img src="img/ha2.jpg" alt="Imagen 3">
          				<p style="color: blue;">Habitación 3</p>
        			</div>
				</div>
				<div class="image-row">
					<div class="image-with-text">
          				<img src="img/ha2.jpg" alt="Imagen 4">
          				<p style="color: blue;">Habitación 4</p>
        			</div>
        			<div class="image-with-text">
          				<img src="img/ha2.jpg" alt="Imagen 5">
          				<p style="color: blue;">Habitación 5</p>
        			</div>
				</div>
        	<?php elseif (isset($_POST['floor']) && $_POST['floor'] == '2') : ?>
				<div class="image-row">
					<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 1">
          				<p style="color: blue;">Habitación 6</p>
        			</div>
        			<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 2">
          				<p style="color: blue;">Habitación 7</p>
        			</div>
					<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 3">
          				<p style="color: blue;">Habitación 8</p>
        			</div>
				</div>
				<div class="image-row">
					<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 4">
          				<p style="color: blue;">Habitación 9</p>
        			</div>
        			<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 5">
          				<p style="color: blue;">Habitación 10</p>
        			</div>
					<div class="image-with-text">
          				<img src="img/ha3.jpg" alt="Imagen 6">
          				<p style="color: blue;">Habitación 11</p>
        			</div>
				</div>
        	<?php endif; ?>
        </div>
	</div>
		
	</div>

	<div id="foot">
		Juan Carlos Chavez Fuentes
	</div>
</body>
</html>
