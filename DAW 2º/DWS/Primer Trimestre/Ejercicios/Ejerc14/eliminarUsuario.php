<?php
session_start();
require_once('conectar.php');
$conex = conectarBBDD();
//print_r("Hola");
if(isset($_SESSION['nombre'])){
    //print_r($_SESSION['tipo']);
    
    $nombre = $_SESSION['nombre'];
    $admin = "SELECT tipo FROM usuarios WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conex, $admin);
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
            
            $sql = "SELECT codigo, nombre from usuarios";
            $usuarios = mysqli_query($conex, $sql)
    ?>
    <form action="gestionUsuarios.php" method="post">
        <select name="usuarios" id="Nombre-Usuarios">
            <option value="selecciona">Selecciona un Usuario</option>
                <?php
                    while( $arr = mysqli_fetch_array($usuarios)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        <input type="submit" name="eliminarUsr" value="Eliminar">
    </form>
    <?php 
        }else{
            echo "Habla con los administradores.";
        }
        mysqli_close(conectarBBDD());
    ?>
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
</body>
</html>