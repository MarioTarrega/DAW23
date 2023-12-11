<?php
    session_start();
    require_once('conectar.php');

    if(isset($_SESSION['nombre'])){
        $usuario = $_SESSION['nombre'];
        echo "$usuario, introduce la informacion del usuario</br>";
    }

    // if(isset($_POST['submit'])){
    //     $user = $_POST['nombre'];
    //     $pass = $_POST['passw'];
    //     $tipo = $_POST['tipo'];

    //     $pass_cif = password_hash($pass, PASSWORD_DEFAULT);

    //     $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ('$user', '$pass_cif', $tipo)";
    //     $cnc = conectarBBDD();
    //     $result = mysqli_query($cnc, $sql);  
        
    // }

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
    <form action="gestionUsuarios.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="paswd">Contraseña: </label>
        <input type="password" id="passw" name="passw"><br><br>
        <label for="tipo">Tipo</label>
        <select name="tipousu" id="tipousu">
            <option value="1">Administrador</option>
            <option value="0">Normal</option>
        </select><br><br>
        <input type="submit" name="submit" value="Aceptar">
    </form>
    <!-- <?php

        

        // $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ($user, $pass, $tipo)";
        // $cnc = conectarBBDD();

        // if($cnc){
        //     $result = mysqli_query($cnc, $sql);  
        // }
        
    ?> -->
</body>
</html>