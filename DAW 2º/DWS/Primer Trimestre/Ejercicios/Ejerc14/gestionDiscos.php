<?php
    session_start();
    require_once('conectar.php');

    //Realizamos la conexion a la base de datos para cualquier uso que
    //vayamos a realizar
    $conex = conectarBBDD();
    $nombre = $_SESSION['nombre'];

    if(isset($_POST['mostrar'])){
        $grupoSelec = $_POST['grupo'];
        $discoSelec = $_POST['disco'];
    }

    function obtenerDiscoG($conex, $grupoSelec){
        $sql="SELECT * FROM disco WHERE idgrupo='$grupoSelec'";
        $consulta = mysqli_query($conex, $sql);

        $discoG = array();
        while ($fila=mysqli_fetch_array($consulta)) {
            $discoG[]=$fila;
        }
        return $discoG;
    }

    function obtenerDiscoD($conex, $discoSelec){
        $sql="SELECT * FROM discos WHERE iddisco = $discoSelec";
    }

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Discos</title>
</head>
<body>
    <?php
        
            $sql = "SELECT * FROM discos WHERE 1 + 1 ";
            if($grupoSelec){
                $sql .= "AND idgrupo='$grupoSelec'";
            }
            if($discoSelec){
                $sql .= "AND iddisco='$discoSelec'";
            }
            
            $consulta = mysqli_query($conex, $sql);
            $datos = mysqli_fetch_array($consulta);
        
    ?>


</body>
</html>