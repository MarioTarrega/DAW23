<?php
    session_start();
    require_once('conectar.php');

    //Realizamos la conexion a la base de datos para cualquier uso que
    //vayamos a realizar
    $conex = conectarBBDD();
    $nombre = $_SESSION['nombre'];

    if(isset($_POST['mostrar'])){
        $grupoSelec = $_POST['seleccionaG'];
        $discoSelec = $_POST['seleccionaD']
    }