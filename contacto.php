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
	<link href="https://fonts.googleapis.com/css?family=Cairo|Merriweather+Sans|Lobster&display=swap" rel="stylesheet">
    <style>
        .card-img-top {
            border: 3px solid #4A4A4A; /* Plomo oscuro */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra opcional */
        }
        .title h1 {
            font-family: 'Lobster', cursive;
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
		<div style="display: flex; align-items: center;">
          <h3 style="margin: 0;">Nuestro e-mail</h3>
            <img src="img/gmail.png" alt="Icono de correo electrónico" height="16" width="16" style="vertical-align: middle; margin-left: 5px;">
        </div>
             <p style="margin-top: 5px;">hostaltravel@.com</p>

		<div style="display: flex; align-items: center;">
            <h3 style="margin: 0;">Telefono:</h3>
            <img src="img/telefono.png" alt="Icono de teléfono" height="16" width="16" style="vertical-align: middle; margin-left: 5px;">
        </div>
              <p style="margin-top: 5px;">917915214</p>

	    <div style="display: flex; align-items: center;">
            <h3 style="margin: 0;">Dirección:</h3>
             <img src="img/direccion.png" alt="Icono de dirección" height="16" width="16" style="vertical-align: middle; margin-left: 5px;">
        </div>
            <p style="margin-top: 5px;">jr Dos de Mayo 673</p>

			<div class="card border border-secondary mb-3">
			    <img src="img/ha3.jpg" class="card-img-top border border-secondary" alt="Descripción de la imagen" style="height: 300px; object-fit: cover;">
			    <div class="card-body">
			        <!-- Contenido adicional de la tarjeta aquí -->
			    </div>
			</div>
	        <form id="comentario">
	            <legend>Deja un comentario</legend>
	            <textarea rows="10" cols="70" name="comentario" maxlength="500"></textarea>
	            <input type="submit" value="Subir"/>
	        </form>
		</div>

		<div id="foot">
			Juan Carlos Chavez Fuentes © 2020
		</div>
	</div>
</body>
</html>
