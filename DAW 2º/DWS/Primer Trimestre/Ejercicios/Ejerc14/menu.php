<?php
session_start();
require_once('conectar.php');

if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    echo "Bienvenido/a/e ".$nombre.". Selecccione la opcion deseada.";
}

$admin = "SELECT tipo FROM usuarios WHERE nombre = '$nombre'";
$resultado = mysqli_query(conectarBBDD(), $admin);
$tipo = mysqli_fetch_assoc($resultado);
$_SESSION['tipo'] = $tipo["tipo"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <?php if($_SESSION['tipo']){ ?>
        <h2>Usuarios:</h2>
        <button onclick='location.href="crearUsuario.php"'>Crear</button>
        <button onclick='location.href="mostrarUsuario.php"'>Mostrar</button>
        <button onclick='location.href="eliminarUsuario.php"'>Eliminar</button>

    <?php }else{ ?>

    <?php } ?>
    
</body>
</html>

