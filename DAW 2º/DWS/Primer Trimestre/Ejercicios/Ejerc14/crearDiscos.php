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
    <title>Crear Discos</title>
</head>
<body>
    
    <form action="crearDiscos.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombreDisco" id="nombreDisco">
        <label for="año">Año:</label>
        <input type="text" name="anyoSalida" id="anyoSalida">
        <label for=""></label>
    </form>
</body>
</html>