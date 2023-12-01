<?php
session_start();
require_once('conectar.php');

if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    $usuario = $_POST['nombre'];
    echo "$nombre, El usuario $usuario ha sido introducido.";
}
$conex = conectarBBDD();
$NUsuario = limpiarCaracteres($conex,$usuario);
$pasw = limpiarCaracteres($conex,$_POST['passw']);
?>