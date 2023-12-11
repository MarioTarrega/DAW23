<?php
    session_start();
    require_once('conectar.php');

    //Si hay una sesion sale el mensaje de que ha introducido el usuario
    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $usuario = $_POST['nombre'];
        echo "$nombre, El usuario $usuario ha sido introducido.";
    }

    //Realizamnos la conexion a la base de datos con la funcion que hemos creado
    $conex = conectarBBDD();
    

    if(isset($_POST['submit'])){
        $name = $_POST['nombre'];
        $instrumento = $_POST['instrumento'];
        $nacionalidad = $_POST['nacionalidad'];
        $website = $_POST['website'];
        $biografia = $_POST['biografia'];
       
        //limpiar caracteres para poder introducirlos en una sentencia SQL
        $name_cls = limpiarCaracteres($conex, $name);
        $instrumento_cls = limpiarCaracteres($conex, $instrumento);
        $nacionalidad_cls = limpiarCaracteres($conex, $nacionalidad);
        $webseite_cls = limpiarCaracteres($conex, $website);
        $biografia_cls = limpiarCaracteres($conex, $biografia);
        
        //sentencia que queremos insertar
        $sql = " INSERT into artistas (nombre, nacionalidad, instrumento, biografia, website
                        VALUES ('$name_cls', '$nacionalidad_cls', '$isntrumento_cls', '$biografia_cls', '$website_cls')";
        
        //si hay una conexion realiza la consulta SQL
        if($conex){
            $result = mysqli_query($conex, $sql);  
        }
                
    }
    //cerramos la conexion a la base de datos
    mysqli_close(conectarBBDD());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Artistas</title>
</head>
<body>

    <!-- Boton para volver al menu principal -->
    <form action="menu.php">
        <input type="button" value="Atras">
    </form>
</body>
</html>