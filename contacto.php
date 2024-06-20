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
	<title>Hotel - Contacto</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
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
	<a class="title" href="index.php"><h1>HOSTAL TRAVEL</h1></a>
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
		<h2>Contacto </h2>
		<div id="contacto">
            <h3>Nuestro e-mail</h3>
            <p>hostaltravel@.com</p>
            <h3>Telefono:</h3>
            <p>917915214</p>
            <h3>Dirección:</h3>
            <p>jr Dos de Mayo 673</p>
			<div class="card border border-secondary mb-3">
    <img src="img/ha3.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 300px; object-fit: cover;">
    <div class="card-body">
        <!-- Contenido adicional de la tarjeta aquí -->
    </div>
        </div>
        <form id="comentario">
            <legend>Deja un comentario</legend>
            <textarea rows="10" cols="70" name="comentario" maxlength="500">

            </textarea>
            <input type="submit" value="Subir"/>
        </form>
	</div>

	<div id="foot">
		Juan Carlos Chavez Fuentes © 2020
	</div>
</body>
</html>