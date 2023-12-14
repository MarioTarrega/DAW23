<?php
session_start();
require_once('conectar.php');

if(isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "$usuario, los usuarios dados de alta son:";
}
$conex = conectarBBDD();

function obtenerArtistas($conex){
    $sql = "SELECT * FROM artistas";
    $resultado = mysqli_query($conex, $sql);

    $artistas = array();
    while ( $fila = mysqli_fetch_assoc($resultado)){
        $artistas[] = $fila;
    }
    return $artistas;
}

function obtenerGrupos($conex, $idArtista){
    $sql = "SELECT * FROM grupos INNER JOIN integrantes ON grupos.idgrupo = integrantes.idgrupo
            WHERE idartista = $idArtista";
    $resultado = mysqli_query($conex,$sql);

    $grupos = array();
    while( $fila = mysqli_fetch_assoc($resultado)){
        $grupos[] = $fila;
    }
    return $grupos;
}

function obtenerDiscos($conex, $idGrupo){
    $sql = "SELECT * FROM discos WHERE idgrupo = $idGrupo";
    $resultado = mysqli_query($conex, $sql);

    $discos = array();
    while( $fila = mysqli_fetch_assoc($resultado)){
        $discos[] = $fila;
    }
    return $discos;
}
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
    $artistas = obtenerArtistas($conex);
    foreach($artistas as $artista){
        echo "Nombre: " . $artista['nombre'] ." <br>";
        echo "Nacionalidad: " . $artista['nacionalida'] . "<br>";
        echo "Instrumento: " . $artista['instrumento'] . "<br>";
        echo "Biografia: " . $artista['biografia'] . "<br>";
        echo "Sitio Web: " . $artista['website'] . "<br>";
        
        $grupos = obtenerGrupos($conex, $artista['idartista']);
        
        foreach ($grupos as $grupo){
            echo "<br>Grupo: " . $grupo['Nombre'] . "<br>";
            
            $discos = obtenerDiscos($conex, $grupo['idgrupo']);

            foreach ($discos as $disco){
                echo "Discos: " . $disco['nombre'] . "<br>";
            }
        }

        echo "<hr>";
    }
    mysqli_close(conectarBBDD());
    ?>
</body>
</html>