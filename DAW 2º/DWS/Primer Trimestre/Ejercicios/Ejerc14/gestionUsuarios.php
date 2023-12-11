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
        // Preguntar a Monica si siempre se tiene que limpiar 
        $user_cls = limpiarCaracteres($conex, $user);
        $pass_cls = limpiarCaracteres($conex, $pass);
        $pass_cif = password_hash($pass_cls, PASSWORD_DEFAULT);
        
        //sentencia que queremos insertar
        $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ('$user_cls', '$pass_cif', $tipo)";
        
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
    <title>Gestion Usuarios</title>
</head>
<body>

    <!-- Boton para volver al menu principal -->
    <form action="menu.php">
        <input type="button" value="Atras">
    </form>
</body>
</html>