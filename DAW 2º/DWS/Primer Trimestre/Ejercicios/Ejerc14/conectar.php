<?php
function conectarBBDD (){
    $conector = mysqli_connect("localhost","root","","discografia");
    return $conector;
}


?>