<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        $user = $_SESSION['usuario'];
        echo"<p>Bienvenido/a/e '${user}. Seleccione la opción deseada</p>";
        echo"<input type= >";
    }



?>