<?php
session_start();
require_once('conectar.php');
//print_r("Hola");
if(isset($_SESSION['nombre'])){
    //print_r($_SESSION['tipo']);
    
    $nombre = $_SESSION['nombre'];
    $admin = "SELECT tipo FROM usuarios WHERE nombre = '$nombre'";
    $resultado = mysqli_query(conectarBBDD(), $admin);
    $tipo = mysqli_fetch_assoc($resultado);
    $_SESSION['tipo'] = $tipo["tipo"];

    if($_SESSION['tipo']==1){
        echo "Bienvenido/a/e ".$nombre.". Selecccione la opcion deseada.";
    }else{
        echo "Bienvenido/a/e ". $nombre . ". No eres administrador";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuarios</title>
</head>
<body>
    <?php 
        if($_SESSION['tipo']){
            
            $sql = ""
    ?>
    <select name="usuarios" id="Nombre-Usuarios">


    </select>
    <?php 
        }else{
            echo "Habla con los administradores.";
        }
        mysqli_close(conectarBBDD());
    ?>
</body>
</html>