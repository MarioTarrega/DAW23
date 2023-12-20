<?php
    session_start();
    require_once('conectar.php');
    $conex = conectarBBDD();

    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        echo "$nombre, introduce el artista a modificar";
    }

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

            $sql = "SELECT * FROM artistas";
            $artistas = mysqli_query($conex, $sql);
        
    ?>
    <form action="modificarArtistas.php" method="post"></form>
        <select name="usuario" id="Nombre-Usuarios">
            <option value="selecciona">Selecciona un artista</option>
                <?php
                    while ( $arr = mysqli_fetch_array($artistas)){
                        echo '<option value='.$arr[0].'>'.$arr[1]."</option>";
                    }
                    mysqli_close(conectarBBDD());
                ?>
        </select>
        <input type="submit" name="modificar" value="Modificar">
    </form>
    <?php
        }elseif(isset($_POST['modificar'])){
            $modificar = $_POST['usuario'];
            $sql = "UPDATE artistas 
                SET nombre = '$nombre',
                instrumento = '$instrumento',
                nacionalidad = '$nacionalidad',
                website = '$website',
                biografia = '$biografia'
                WHERE id_artista = $id_artista";
        }
    ?>
    <br></br>
    <form action="gestionArtistas.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" label="<?php $nombre ?>">
        <br><br>
        <label for="instrumento">Instrumento:</label>
        <input type="text" name="instrumento" id="instrumento" label="<?php $isntrumento ?>">
        <br><br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" id="nacionalidad" label="<?php $nacionalidad ?>">
        <br><br>
        <label for="website">Website:</label>
        <input type="url" name="website" id="website">
        <br><br>
        <label for="biografia">Biografia</label>
        <textarea name="biografia" id="biografia" cols="30" rows="1"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Aceptar">
    </form>
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
</body>
</html>