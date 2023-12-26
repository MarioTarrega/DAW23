<?php
session_start();
require_once("conectar.php");
$conex = conectarBBDD();

function obtenerGrupos($conex){
    $sql = "SELECT * FROM grupos";
    $resultado = mysqli_query($conex, $sql);

    $grupos = array();
    while($fila = mysqli_fetch_assoc($resultado)){
        $grupos[] = $fila;
    }
    return $grupos;
}

function obtenerDiscos($conex, $idGrupo){
    $sql = "SELECT * FROM discos WHERE idgrupo = $idGrupo";
    $resultado = mysqli_query($conex, $sql);

    $discos = array();
    while($fila = mysqli_fetch_assoc($resultado)){
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
    if(isset($_SESSION['nombre'])){
        $usuario = $_SESSION['nombre'];
        echo "$usuario estas en la seccion de mostrar Discos.";

        $sql = "SELECT * FROM grupos";
        $grupos = mysqli_query($conex, $sql);

        $sql2 = "SELECT * FROM discos";
        $discos = mysqli_query($conex, $sql2);
    }
    ?>
    <form action="mostrarDiscos.php" method="post">
        <select name="grupoMost" id="grupo-mostrar">
            <option value="Selecciona">Selecciona un Grupo</option>
                <?php
                    while($arr = mysqli_fetch_array($grupos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        
        <select name="discosMost" id="discos-mostrar">
            <option value="Selecciona">Selecciona Disco</option>
            <?php
                while($arr2 = mysqli_fetch_array($discos)){
                    echo '<option value='.$arr2[0].'>'.$arr2[1].'</option>';
                }
            ?>
           
        </select>
        <label for="mostrarCanciones">Incluir Canciones</label>
        <input type="checkbox" name="mostrarCanciones" id="mostrar">
        <br>
        <input type="submit" name="seleccionGrp" value="Seleccionar Grupo">
        <br>
        <input type="submit" name="seleccionDsc" value="Seleccionar Discos">
        <br>

        
    </form>
    
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
    <?php
       /* $grupos = obtenerGrupos($conex);
        foreach($grupos as $grupos){
            echo "<br>";
            echo "Nombre: ".$grupos['nombre']."<br>";

            $discos=obtenerDiscos($conex, $grupos['idgrupos']);

            foreach ($discos as $discos){
                echo "Titulo: " .$discos['titulo']. "<br>";
                echo "Año: ". $discos['anyo']. "<br>";
            }
        }*/
    ?>
    <form>
        
        
    </form>
</body>
</html>