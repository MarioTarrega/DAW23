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
                
    }elseif(isset($_POST['eliminar'])){
        $eliminar = $_POST['usuarios'];
        $sql = "DELETE FROM artistas WHERE idartista = ?";
        $sentencia = mysqli_prepare($conex, $sql);
        mysqli_stmt_bind_param($sentencia,"i",$eliminar);
        if($correcto = mysqli_stmt_execute($sentencia)){
            echo "$nombre, el artista ha sido eliminado.";
        }else{
            echo "$nombre, el artista no ha sido eliminado";
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
<form action="gestionArtistas.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        <label for="instrumento">Instrumento:</label>
        <input type="text" name="instrumento" id="instrumento">
        <br><br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" id="nacionalidad">
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