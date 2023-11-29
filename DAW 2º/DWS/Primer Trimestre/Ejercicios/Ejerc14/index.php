<?php
session_start();
require_once "conectar.php";


if(isset($_POST['submit'])){
    $_SESSION["nombre"] = $_POST['username'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$user' AND pwd = '$pass'";
    $cnc = conectarBBDD();
    if($cnc){
        $result = mysqli_query($cnc, $sql);
        //print_r($result);
        $filas = mysqli_fetch_assoc($result);
        //print_r($filas);
        if(mysqli_num_rows($result) == 1){
           header('Location: menu.php');

        }
    }
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>