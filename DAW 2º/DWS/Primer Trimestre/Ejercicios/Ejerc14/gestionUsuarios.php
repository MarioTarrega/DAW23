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
    
    //Si hay una accion de un boton con in ID='submit' se ejecuta lo siguiente
    if(isset($_POST['submit'])){
        $user = $_POST['nombre'];
        $pass = $_POST['passw'];
        $tipo = $_POST['tipousu'];
        
        //limpiar caracteres para poder introducirlos en una sentencia SQL
        //Preguntar a Monica si siempre se tiene que limpiar 
        $user_cls = limpiarCaracteres($conex, $user);
        $pass_cls = limpiarCaracteres($conex, $pass);
        $pass_cif = password_hash($pass_cls, PASSWORD_DEFAULT);
        
        //sentencia que queremos insertar
        $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ('$user_cls', '$pass_cif', $tipo)";
        
        //si hay una conexion realiza la consulta SQL
        if($conex){
            $result = mysqli_query($conex, $sql);  
        }
                
    }elseif(isset($_POST['eliminar'])){
        $eliminar = $_POST['usuarios'];
        $sql = "DELETE FROM usuarios WHERE codigo = ?";
        $sentencia = mysqli_prepare($conex, $sql);
        mysqli_stmt_bind_param($sentencia,"i",$eliminar);
        if($correcto = mysqli_stmt_execute($sentencia)){
            echo "$nombre, el artista ha sido eliminado.";
        }else{
            echo "$nombre, el artista no ha sido eliminado";
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
    <title>Gestion Usuarios</title>
</head>
<body>

    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>

</body>
</html>