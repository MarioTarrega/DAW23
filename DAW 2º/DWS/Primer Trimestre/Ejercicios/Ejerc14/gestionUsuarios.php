<?php
    session_start();
    require_once('conectar.php');

    //Realizamnos la conexion a la base de datos con la funcion que hemos creado
    $conex = conectarBBDD();
    
    //Si hay una accion de un boton con in ID='submit' se ejecuta lo siguiente
    if(isset($_POST['submit'])){
        $user = $_POST['nombre'];
        $pass = $_POST['passw'];
        $tipo = $_POST['tipousu'];
        $nombre = $_SESSION['nombre'];
        
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
        
        echo "$nombre, El usuario $user ha sido introducido.";
                
    }
    if(isset($_POST['eliminarUsr'])){
        $nombre = $_SESSION['nombre'];
        $eliminar = $_POST['usuarios'];
        $sql = "DELETE FROM usuarios WHERE codigo = ?";
        $sentencia = mysqli_prepare($conex, $sql);
        mysqli_stmt_bind_param($sentencia,"i",$eliminar);
        if($correcto = mysqli_stmt_execute($sentencia)){
            echo "$nombre, el Usuario ha sido eliminado.";
        }else{
            echo "$nombre, el Usuario no ha sido eliminado";
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