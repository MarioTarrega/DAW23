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
        // $name_cls = limpiarCaracteres($conex, $name);
        // $instrumento_cls = limpiarCaracteres($conex, $instrumento);
        // $nacionalidad_cls = limpiarCaracteres($conex, $nacionalidad);
        // $webseite_cls = limpiarCaracteres($conex, $website);
        // $biografia_cls = limpiarCaracteres($conex, $biografia);
        
        //sentencia que queremos insertar, al utilizar interrogantes no tenemos porque limpiar caracteres
        $sql = " INSERT into artistas (nombre, nacionalidad, instrumento, biografia, website)
                        VALUES (?,?,?,?,?)";
        
        //si hay una conexion realiza la consulta SQL
        if($conex){
            //Preparamos la consulta
            $consulta = mysqli_prepare($conex, $sql);
            //Enlazamos los parametros a las variables
            mysqli_stmt_bind_param($consulta, 'sssss', $name, $nacionalidad, $instrumento, $biografia, $website);
            $result = mysqli_stmt_execute($consulta);  
        }
                
    }
    //cerramos la conexion a la base de datos
    desconectarBBDD($conex);
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
    <button onclick='location.href="menu.php"'>Menu</button>

</body>
</html>