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
	<title>Hostal Travel</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<link rel ="icon" type="image/png" href="img/icono-hotel.ico">
	<link href="https://fonts.googleapis.com/css?family=Cairo|Merriweather+Sans&display=swap" rel="stylesheet">
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

	<a class="title" href="index.php"><h1>HOTEL</h1></a>
    
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
		<img src="img/hotel1.jpg" height="240" width="320" />
		<p> 
			Con más de 35 años de experiencia en el rubro, nuestro hotel se posiciona como "el tradicional hotel del centro" que fundado sobre las bases del servicio ofrece a sus pasajeros todos las comodidades para un buen descanso y disfrute de su estadía.
			Ubicado en una privilegiada zona residencial de la ciudad de Neuquén, en la intersección de las calles Carlos H. Rodriguez y Antártida Argentina, y a metros de los principales puntos comerciales de la ciudad, nuestro hotel ofrece 15 habitaciones distribuidas en 3 pisos, entre las cuales puede encontrar departamentos y habitaciones singles, matrimoniales y familiares. 
		</p>
	</div>

	<div id="foot">
		Joel Jeckeln © 2020
	</div>
</body>
</html>