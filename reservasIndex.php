<?php 
session_start();

if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
}

require_once "reserva.model.php";
require_once "reserva.entidad.php";
require_once "habitacion.model.php";
require_once "habitacion.entidad.php";
require_once "tipoHabitacion.entidad.php";
require_once "tipoHabitacion.model.php";

$tipoModel = new TipoHabitacionModel();
$tipo = new TipoHabitacion();

$habitacionModel = new HabitacionModel();
$hab = new Habitacion();

$model = new ReservaModel();
$res = new Reserva();

if(isset($_POST['operacion'])){
    $res->setIdCliente($_POST['idCliente']);
    $res->setIdHabitacion($_POST['idHabitacion']); 
    $res->setCantPersonas($_POST['cantPersonas']);
    $res->setCheckIn($_POST['checkin']);
    $res->setCheckOut($_POST['checkout']);

    if($model->registrar($res)){
        ?>
        <script type="text/javascript">
            alert("Reserva realizada con éxito! Te esperamos!");
        </script>
        <?php
    } else {
        echo "Ha ocurrido un error al registrar la reserva.";
    }

    $res->reinicioCampos();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hostal - Reservas</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
    <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather+Sans&display=swap" rel="stylesheet">
    <style>
    body, h1, h2, li, a, input, select {
        font-family: 'Cairo', sans-serif;
        color: #000000; /* Color negro */
    }
    .title h1 {
        color: #000000; /* Color negro */
    }
    .central-image {
        display: flex;
        align-items: center; /* Centra verticalmente los elementos */
    }
    .central-image img {
        margin-right: 30px; /* Espacio entre la imagen y el texto */
        border: 2px solid black; /* Borde negro */
    }
    .text-container {
        flex: 1; /* El texto ocupa todo el espacio restante */
        margin-left: 10px; /* Espacio a la izquierda del texto */
        text-align: justify; /* Alineación justificada del texto */
        color: #000000; /* Color negro */
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
    <?php } ?>

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
        <form class="reserva" method="POST" action="reservasIndex.php">
            <ul>
                <input type="hidden" name="idCliente" value="<?php echo isset($_SESSION['idCliente']) ? $_SESSION['idCliente'] : ''; ?>">

                <input type="hidden" name="idReserva" value="<?php echo $res->getIdReserva() ?>" />
                <input type="hidden" name="operacion" value="<?php echo $res->getIdReserva() > 0 ? 'actualizar' : 'registrar' ?>" />

                <li><input required type="date" name="checkin" value="<?php echo isset($_POST['checkin']) ? $_POST['checkin'] : ''; ?>"></li>

                <li><input required type="date" name="checkout" value="<?php echo isset($_POST['checkout']) ? $_POST['checkout'] : ''; ?>"></li>

                <li><input required length="2" type="number" name="cantPersonas" value="<?php echo isset($_POST['cantPersonas']) ? $_POST['cantPersonas'] : ''; ?>"></li>

                <select required name="idHabitacion">
                    <option selected value="0">--Seleccione--</option>
                    <?php foreach($habitacionModel->listar() as $r){?>
                    <option value="<?php echo $r->getIdHabitacion();?>"> 
                        <?php echo "Habitacion N° ",$r->getNroHabitacion()," - ",$tipoModel->obtener($r->getIdTipoHabitacion())->getTipo(); ?>
                    </option>
                    <?php } ?>
                </select>
                <input type="hidden" name="status" value="<?php echo $r->getStatus(); ?>" >

                <?php if(isset($_SESSION['nombre']) || isset($_SESSION['usuario'])){ ?>
                <input style="display:"  type="submit" name="submit" value="Reservar">
                <?php }else{
                    echo '<div class="central-image">';
                    echo '<img src="img/h4.jpg" alt="Logo" height="160" width="160">';
                    echo '<div class="text-container">';
                    echo '<p style="font-size: 18px; font-weight: bold; color: black;">¡Reserva ahora y disfruta de nuestras increíbles ofertas!</p>';
                    echo '<p style="font-size: 14px; color: black;">¡Tu aventura comienza aquí en nuestro acogedor hostal!</p>';
                     echo '</div>';
                    echo '</div>';
                } ?>
            </ul>
        </form>
    </div>

    <div id="foot">
        HOSTAL TRAVEL-EQUIPO DE DESARROLLO "YIT" © <?php echo date("Y-m-d"); ?>
    </div>
</body>
</html>
