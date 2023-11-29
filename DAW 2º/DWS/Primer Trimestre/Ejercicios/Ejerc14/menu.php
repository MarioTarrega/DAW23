<?php
session_start();
if(isset($_SESSION['nombre'])){
    $nombre = $_SESSION['nombre'];
    echo "Bienvenido/a/e ".$nombre.". Selecccione la opcion deseada.";
}
?>