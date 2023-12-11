<?php
    session_start();
    require_once('conectar.php');

    if(isset($_SESSION['nombre'])){
        $nombre = $_SESSION['nombre'];
        $usuario = $_POST['nombre'];
        echo "$nombre, El usuario $usuario ha sido introducido.";
    }
    $conex = conectarBBDD();
    

    if(isset($_POST['submit'])){
        $user = $_POST['nombre'];
        $pass = $_POST['passw'];
        $tipo = $_POST['tipousu'];
        
        $user_cls = limpiarCaracteres($conex, $user);
        $pass_cls = limpiarCaracteres($conex, $pass);
        $pass_cif = password_hash($pass_cls, PASSWORD_DEFAULT);
            
        $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ('$user_cls', '$pass_cif', $tipo)";
        
        if($conex){
            $result = mysqli_query($conex, $sql);  
        }
                
    }
    mysqli_close(conectarBBDD());
?>