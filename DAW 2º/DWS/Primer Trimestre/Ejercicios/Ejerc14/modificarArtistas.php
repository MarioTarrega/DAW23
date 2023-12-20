<?php
    session_start();
    require_once('conectar.php');
    $conex = conectarBBDD();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Artistas</title>
</head>
<body>
    <?php
        if($_SESSION['tipo']){
            $nombre = $_SESSION['nombre'];
            echo "$nombre, introduce el artista a modificar";

            $sql = "SELECT * FROM artistas";
            $artistas = mysqli_query($conex, $sql);
        }
    ?>
    <form action="gestionArtistas.php" method="post">
        <select name="usuarioMod" id="Nombre-Usuarios">
            <option value="selecciona">Selecciona un artista</option>
                <?php
                    while ( $arr = mysqli_fetch_array($artistas)){
                        echo '<option value='.$arr[0].'>'.$arr[1]."</option>";
                    }
                    mysqli_close(conectarBBDD());
                ?>
        </select>
        <input type="submit" name="modificarArt" value="Modificar">
    </form>  
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
</body>
</html>