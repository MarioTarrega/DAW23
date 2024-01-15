<?php
    session_start();
    require_once('conectar.php');

    $conex = conectarBBDD();

    if (isset($_POST['nombre'])) {
        $usuario = $_SESSION['nombre'];
        echo "$usuario vamos a crear un disco";

        $sql = "SELECT * FROM grupos";
        $grupos = mysqli_query($conex,$sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Discos</title>
</head>
<body>
    
    <form action="crearDiscos.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombreDisco" id="nombreDisco">
        <label for="año">Año:</label>
        <input type="text" name="anyoSalida" id="anyoSalida">
        <label for="Sello">Sello:</label>
        <select name="Sello" id="sello">
            <option value="Mute Record">Mute Record</option>
            <option value="Warner Bros">Warner Bros</option>
            <option value="Independiente">Independiente</option>
        </select>
        <br><br>
        <select name="CrearG" id="crear-disco">
            <option value="Grupo">Selecciona grupo</option>
                <?php
                    while($arr = mysqli_fetch_array($grupos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
    </form>
</body>
</html>