<?php
session_start();
require_once('conectar.php');

    if(isset($_POST['submit'])){
        $user = $_POST['nombre'];
        $pass = $_POST['passw'];
        $tipo = $_POST['tipo'];

        $pass_cif = password_hash($pass, PASSWORD_DEFAULT);

        $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ($user, $pass_cif, $tipo)";
        $cnc = conectarBBDD();
    
        if($cnc){
            $result = mysqli_query($cnc, $sql);  
        }
            
    }

    $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ($user, $pass, $tipo)";
    $cnc = conectarBBDD();

    if($cnc){
        $result = mysqli_query($cnc, $sql);  
    }
    mysqli_close(conectarBBDD());
    
    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $usuario = $_POST['nombre'];
        echo "$nombre, El usuario $usuario ha sido introducido.";
    }
    
    $NUsuario = limpiarCaracteres($conex,$usuario);
    $pasw = limpiarCaracteres($conex,$_POST['passw']);
?>