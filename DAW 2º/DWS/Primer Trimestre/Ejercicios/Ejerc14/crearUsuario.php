<?php
session_start();
require_once('conectar.php');

if(isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "$usuario, introduce la informacion del usuario</br>";
}
mysqli_close(conectarBBDD());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gestionUsuarios.php">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="paswd">Contraseña: </label>
        <input type="password" id="passw" name="passw"><br><br>
        <label for="tipo">Tipo</label>
        <select name="tipousu" id="tipousu">
            <option value="1">Administrador</option>
            <option value="0">Normal</option>
        </select><br><br>
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>