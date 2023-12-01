<?php
session_start();
require_once('conectar.php');

if(isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "$usuario, los usuarios dados de alta son:";
}

$sql ="SELECT nombre FROM usuarios";
$resultado=mysqli_query(conectarBBDD(),$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($resultado){
        echo"<ul>";
        while ($row = mysqli_fetch_array($resultado)) {
            echo "<li>" . $row["nombre"]."</li>";  //muestra el nombre del usuario
        }
        echo "</ul>";
    }else{
        echo "No hay resultados";
    }
    mysqli_close(conectarBBDD());
    ?>
</body>
</html>