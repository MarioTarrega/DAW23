<?php
    session_start();
    require_once('conectar.php');


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
    <title>Menu</title>
</head>
<body>
    <?php 
        if($_SESSION['tipo']){ 
    ?>
    <h2>Usuarios:</h2>
    <button onclick='location.href="crearUsuario.php"'>Crear</button>
    <button onclick='location.href="mostrarUsuario.php"'>Mostrar</button>
    <button onclick='location.href="eliminarUsuario.php"'>Eliminar</button>


     <h2>Artistas:</h2>
    <button onclick='location.href="crearUsuario.php"'>Crear</button>
    <button onclick='location.href="eliminarArtistas.php"'>Eliminar</button>

    <?php 
        }else{
            echo "Habla con los administradores.";
            echo "<br>";
            echo "<h2>Artistas:</h2>";
        }
        mysqli_close(conectarBBDD());
    ?>
    <button onclick='location.href="mostrarUsuario.php"'>Mostrar</button>
    <button onclick='location.href="modificarArtistas.php"'>Modificar</button>
</body>
</html>

