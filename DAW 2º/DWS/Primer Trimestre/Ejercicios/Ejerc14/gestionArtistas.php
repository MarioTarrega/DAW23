<?php
    session_start();
    require_once('conectar.php');

    //Realizamnos la conexion a la base de datos con la funcion que hemos creado
    $conex = conectarBBDD();
    

    if(isset($_POST['crearArt'])){
        $nombre = $_SESSION['nombre'];
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
        
        echo "$nombre, El usuario $name ha sido introducido.";
                
    }
    if(isset($_POST['eliminarArt'])){
        $nombre = $_SESSION['nombre'];
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
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Artistas</title>
</head>
<body>
    <?php
        if(isset($_POST['modificarArt'])){
            $artista = $_POST['usuarioMod'];
            $sql = "SELECT * FROM artistas WHERE idartista = $artista[0]";
            $artistas = mysqli_query($conex, $sql);
            $datos = mysqli_fetch_array($artistas);
        


    ?>
    <form action="gestionArtistas.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value='<?php echo "$datos[1]"; ?>'>
        <br><br>
        <label for="instrumento">Instrumento:</label>
        <input type="text" name="instrumento" id="instrumento" value='<?php echo "$datos[3]"; ?>'>
        <br><br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" id="nacionalidad" value='<?php echo "$datos[2]"; ?>'>
        <br><br>
        <label for="website">Website:</label>
        <input type="url" name="website" id="website">
        <br><br>
        <label for="biografia">Biografia</label>
        <textarea name="biografia" id="biografia" cols="30" rows="1"></textarea>
        <br><br>
        <input type="submit" name="change" value="Aceptar">
    </form>
    <?php
        }
        if(isset($_POST['change'])){
            $nombre = $_SESSION['nombre'];
            $name = $_POST['nombre'];
            $instrumento = $_POST['instrumento'];
            $nacionalidad = $_POST['nacionalidad'];
            $website = $_POST['website'];
            $biografia = $_POST['biografia'];
            
            //sentencia que queremos insertar, al utilizar interrogantes no tenemos porque limpiar caracteres
            $sql = " UPDATE artistas SET nombre = ?, nacionalida = ?, instrumento = ?, biografia = ?, website = ? WHERE idartista = $datos[0]";
            
            //si hay una conexion realiza la consulta SQL
            if($conex){
                //Preparamos la consulta
                $consulta = mysqli_prepare($conex, $sql);
                //Enlazamos los parametros a las variables
                mysqli_stmt_bind_param($consulta, 'sssss', $name, $nacionalidad, $instrumento, $biografia, $website);
                $result = mysqli_stmt_execute($consulta);  
            }
            
            echo "$nombre, El usuario $name ha sido actualizado.";
        }
        //cerramos la conexion a la base de datos
        desconectarBBDD($conex);
    ?>
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>

</body>
</html>