<!DOCTYPE html>
<html>
<head>
    <title>Hotel - Registro</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <link rel="icon" type="image/jpeg" href="img/logohostaultimo1.jpg">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Merriweather+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    session_start();

    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
    }

    require_once "cliente.model.php";
    require_once "cliente.entidad.php";
    require_once "pais.entidad.php";
    require_once "pais.model.php";

    $model = new ClienteModel();
    $cli = new Cliente();

    $p = new Pais;
    $pModel = new PaisModel;

    if(isset($_POST['idCliente'])){
        $cli->setIdCliente($_POST['idCliente']);
        $cli->setNombre($_POST['nombre']);
        $cli->setApellido($_POST['apellido']);
        $cli->setEmail($_POST['email']);
        $cli->setDni($_POST['dni']);
        $cli->setContrasena($_POST['contrasena']);
        $cli->setPais($_POST['pais']);
        $cli->setDireccion($_POST['direccion']);
        $cli->setTelefono($_POST['telefono']);

        $model->registrar($cli);

        $cli->reinicioCampos();
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
        
        <h2>Registro Clientes</h2>

        <form action="registro.php" method="POST">

            <input type="hidden" name="idCliente" value="<?php echo $cli->getIdCliente() ?>" />
            <input type="hidden" name="operacion" value="<?php echo $cli->getIdCliente() > 0 ? 'actualizar' : 'registrar' ?>" />
            
            
            <label>Nombre</label> <input type="text" name="nombre" class="custom-input" length="25" value="<?php echo $cli->getNombre(); ?>" />
            <label>Apellido</label> <input type="text" name="apellido" class="custom-input" length="25" value="<?php echo $cli->getApellido(); ?>" />
            <label>Email</label> <input type="text" name="email" class="custom-input" length="35" value="<?php echo $cli->getEmail(); ?>" />
            <label>Contraseña</label> <input type="password" name="contrasena" class="custom-input" length="25" />
            <label>DNI</label> <input type="number" name="dni" class="custom-input" length="8" value="<?php echo $cli->getDni(); ?>" />
            <label>Pais</label>
            
            <!-- Lista desplegable auto-completable Paises -->
            <select name="pais">
                <option selected value="0">--Seleccione--</option>
                <?php foreach($pModel->listar() as $r){?>
                <option value="<?php echo $r->getAbrev(); ?>">
                    <?php echo $r->getNombrePais(); ?>
                </option>
                <?php } ?>
            </select>

            <label>Direccion</label><input type="text" name="direccion" class="custom-input" length="25" value="<?php echo $cli->getDireccion(); ?>" />
            <label>Telefono</label><input type="text" name="telefono" class="custom-input" length="15" value="<?php echo $cli->getTelefono(); ?>" />

            <input type="submit" value="Guardar">

        </form>
    </div>

    <div id="foot">
       Juan Carlos Chavez Fuentes
    </div>

    <style>
        .custom-input {
            background-color: #c2e8c6; /* Color verde pastel */
            border: 1px solid #b4e3b2; /* Borde con un tono más oscuro */
            color: #000; /* Color de texto negro */
            padding: 5px;
            margin-bottom: 10px;
            width: 100%;
        }
    </style>
</body>
</html>
