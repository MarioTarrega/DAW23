<?php
    session_start();
    require_once('conectar.php');

    $conex = conectarBBDD();

    if(isset($_SESSION['nombre'])){
        //print_r($_SESSION['tipo']);
        
        $nombre = $_SESSION['nombre'];
        $admin = "SELECT tipo FROM usuarios WHERE nombre = '$nombre'";
        $resultado = mysqli_query($conex, $admin);
        $tipo = mysqli_fetch_assoc($resultado);
        $_SESSION['tipo'] = $tipo["tipo"];

        if($_SESSION['tipo']==1){
            echo "Bienvenido/a/e ".$nombre.", selecccione la opcion deseada.";
        }else{
            echo "Bienvenido/a/e ". $nombre . ", No eres administrador ";
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
    <h2>Usuarios:
        <button onclick='location.href="crearUsuario.php"'>Crear</button>
        <button onclick='location.href="mostrarUsuario.php"'>Mostrar</button>
        <button onclick='location.href="eliminarUsuario.php"'>Eliminar</button>
    </h2>

    <h2>Artistas:
        <button onclick='location.href="modificarArtistas.php"'>Modificar</button>
        <button onclick='location.href="eliminarArtistas.php"'>Eliminar</button>
    

        <?php 
            }else{
                echo "habla con los administradores.";
                echo "<br>";
                echo "<h2>Artistas:</h2>";
            }
            desconectarBBDD($conex);
        ?>
        <button onclick='location.href="crearArtistas.php"'>Crear</button>
        <button onclick='location.href="mostrarArtistas.php"'>Mostrar</button>
    </h2>
    
    <h2>Discos:
        <button onclick='location.href="mostrarDiscos.php"'>Mostrar</button>
        <button onclick='location.href="crearDiscos.php"'>Crear</button>
        <button onclick='location.href ="modificarDiscos.php"'>Modificar</button>
        <button onclick='location.href="eliminarDiscos.php"'>Eliminar</button>
    </h2>
    
    <h3>Cerra Sesión:
        <button onclick='location.href="index.php"'>Cerrar Sesión</button>
    </h3>
    <!-- <button onclick='location.href="crearArtistas.php"'>Crear</button> -->

</body>
</html>

