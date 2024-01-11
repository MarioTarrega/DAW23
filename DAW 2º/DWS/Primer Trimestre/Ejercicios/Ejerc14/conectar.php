<?php
function conectarBBDD (){
    //$conector = mysqli_connect("db4free.net:3306","mariotarrega","M4r10T4rr3g4","discografia");
    $conector = mysqli_connect("localhost","root","","discografia");
    return $conector;
}

function desconectarBBDD($con){
    mysqli_close($con);
}

function limpiarCaracteres($conexion, $valorL) {
    //$valorL es el valor que se quiere limpiar de los caracteres no permitidos.
    return mysqli_real_escape_string($conexion, $valorL);
    //a la hora de utilizarlo en las paginas la conexion es la funcion conectarBBDD.
}




?>