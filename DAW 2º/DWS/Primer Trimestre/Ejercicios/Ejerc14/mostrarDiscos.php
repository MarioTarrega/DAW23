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
    $sql = "SELECT * FROM discos WHERE idgrupo == $idGrupo";
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
    <title>Mostrar Discos</title>
</head>
<body>
    <?php
        if(isset($_SESSION['nombre'])){
            $usuario = $_SESSION['nombre'];
            echo "$usuario estas en la seccion de mostrar Discos.";

            $sql = "SELECT * FROM grupos";
            $grupos = mysqli_query($conex, $sql);

        // $sql2 = "SELECT * FROM discos";
        // $discos = mysqli_query($conex, $sql2);
        }
    ?>
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
    
    </br></br>

    <form action="gestionDiscos.php" method="post">
        <select name="grupoMost" id="grupo-mostrar">
            <option value="Grupo">Selecciona un Grupo</option>
                <?php
                    while($arr = mysqli_fetch_array($grupos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        
        <!-- <select name="discosMost" id="discos-mostrar">
            <option value="seleccionaD">Selecciona Disco</option>
            <?php
            //   while($arr2 = mysqli_fetch_array($discos)){
            //       echo '<option value='.$arr2[0].'>'.$arr2[1].'</option>';
            //    }
            ?> 
           
        </select> -->
        <label for="mostrarCanciones">Incluir Canciones</label>
        <input type="checkbox" name="incluirCanciones" id="incluir">
        </br>
        </br>
        <input type="submit" name="mostrar" value="Mostrar">
    </form>

    </br>

    <form action="mostrarDiscos.php" method="post">
        <input type="button" value="Cancelar">
    </form>
</body>
</html>