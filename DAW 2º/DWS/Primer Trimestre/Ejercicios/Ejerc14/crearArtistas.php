<?php
    session_start();
    require_once('conectar.php');

    if(isset($_SESSION['nombre'])){
        $usuario = $_SESSION['nombre'];
        echo "$usuario, introduce la informacion del Artista</br>";
    }
    //mysqli_close(conectarBBDD());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Artistas</title>
</head>
<body>

    <!-- Formulario para crear el Artista -->
    <form action="gestionArtistas.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="instrumento">Instrumento:</label>
        <input type="text" name="instrumento" id="instrumento"><br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" id="nacionalidad"><br>
        <label for="website">Website:</label>
        <input type="url" name="website" id="website"><br>
        <label for="biografia">Biografia</label>
        <textarea name="biografia" id="biografia" cols="30" rows="1"></textarea>
        <input type="submit" name="submit" value="Aceptar">
    </form>
</body>
</html>