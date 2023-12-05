<?php
    session_start();
    require_once('conectar.php');

    $cnc = conectarBBDD();
        
    if(isset($_POST['submit'])){
        $user = $_POST['nombre'];
        $pass = $_POST['passw'];
        $tipo = $_POST['tipo'];
        
        $user_cls = limpiarCaracteres($cnc, $user);
        $pass_cls = limpiarCaracteres($cnc, $pass);
        $pass_cif = password_hash($pass_cls, PASSWORD_DEFAULT);
            print_r($user_cls);
        $sql = " INSERT into usuarios (nombre, pwd, tipo) VALUES ($user_cls, $pass_cif, $tipo)";
        
        if($cnc){
            $result = mysqli_query($cnc, $sql);  
        }
                
    }

    
   //$NUsuario = limpiarCaracteres($conex,$usuario);
    //$pasw = limpiarCaracteres($conex,$_POST['passw']);
    mysqli_close(conectarBBDD());
?>