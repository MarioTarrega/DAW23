<?php
session_start();
require_once('conectar.php');

if(isset($_SESSIO['nombre'])){ 
    $usuario = $_SESSION['nombre'];
    echo "$usuario, introduce el usuario a eliminar";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
    <!--<form action="" method="post">
    se
</form> -->
    
</body>
</html>