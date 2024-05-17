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
		
	<div>
		<form class="habitacion" action="habitacionesIndex.php" method="post">

			<input onchange="this.form.submit();" name="floor" type="radio" value="1" id="floor1" <?php if (isset($_POST['floor']) && $_POST['floor'] == '1'){echo 'checked="checked"';} ?>><label for="floor1">Piso 1</label>
			<input onchange="this.form.submit();" name="floor" type="radio" value="2" id="floor2" <?php if (isset($_POST['floor']) && $_POST['floor'] == '2'){echo 'checked="checked"';} ?>><label for="floor2">Piso 2</label>
			<input onchange="this.form.submit();" name="floor" type="radio" value="3" id="floor3" <?php if (isset($_POST['floor']) && $_POST['floor'] == '3'){echo 'checked="checked"';} ?>><label for="floor3">Piso 3</label>
		</form>
		<div class="carousel-item active" style="display: inline-block; margin-right: 100px;">
          <img src="img/ha2.jpg" class="d-block w-100 square-image" style="width: 200px; height: auto;" alt="50">
        </div>
        <div class="carousel-item active" style="display: inline-block; margin-right: 100px;">
            <img src="img/ha3.jpg" class="d-block w-100 square-image" style="width: 270px; height: auto;" alt="50">
        </div>
        <div class="carousel-item active" style="display: inline-block;">
             <img src="img/h4.jpg" class="d-block w-100 square-image" style="width: 152px; height: auto;" alt="50">
        </div>
		

		<?php

			if(isset($_POST['floor'])){
				$floor = $_POST['floor'];
				$route = "";
				switch ($floor) {
					case '1':
						$route="piso1.svg";
						break;
					case '2':
						$route="piso2.svg";
						break;
					case '3':
						$route="piso3.svg";
					break;
				}
			}
		?>
	</div>
	<?php
		if(isset($_POST['floor'])){

	?>
		
		<?php 

		}
		?>
	</div>

	<div id="foot">
	 Juan Carlos Chavez Fuentes
	</div>
</body>
</html>