<?php
session_start();
require_once("conectar.php");
$conex = conectarBBDD();




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
        <input type="submit" name="seleccionGrp" value="Seleccionar">
    </form>
    <?php
        if(isset($_POST['seleccionGrp'])){
            $disco = $_POST['seleccionGrp'];
            $sql2 = "SELECT * FROM discos WHERE idgrupo = $disco[0]";
            $discos = mysqli_query($conex, $sql2);
        }
    ?>
    <form>
        <select name="discosMost" id="discos-mostrar"></select>
            <option value="Selecciona">Selecciona Disco</option>
            <?php
                while($arr2 = mysqli_fetch_array($discos)){
                    echo '<option value='.$arr2[0].'>'.$arr2[1].'</option>';
                }

            ?>
    </form>
</body>
</html>