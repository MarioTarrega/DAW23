<?php
    session_start();
    require_once('conectar.php');

    $conex = conectarBBDD();

    if (isset($_SESSION['nombre'])) {
        $usuario = $_SESSION['nombre'];
        echo "$usuario vamos a crear un disco";

        $sql = "SELECT * FROM grupos";
        $grupos = mysqli_query($conex,$sql);

       $sqlS = "SELECT * FROM sellos";
       $sellos = mysqli_query($conex, $sqlS);
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
    
    <form action="gestionDiscos.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombreDisco" id="nombreDisco">
        <label for="año">Año:</label>
        <input type="text" name="anyoSalida" id="anyoSalida">
        <label for="Sello">Sello:</label>
        <select name="Sello" id="sello">
        <option value="Grupo">Selecciona Sello</option>
                <?php
                    while($arr = mysqli_fetch_array($sellos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        <br><br>
        <label for="Grupo">Grupo:</label>
        <select name="grupoMost" id="grupo-mostrar">
            <option value="Grupo">Selecciona Grupo</option>
                <?php
                    while($arr = mysqli_fetch_array($grupos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        <label for="Cubierta">Cubierta:</label>
        <input type="file" name="cubierta" id="cubierta-disco">
        <label for="Cantidad_Canciones">Cantidad de Canciones</label>
        <input type="number" min="1" name="canciones" id="numero">
        <br>
        <label for="Descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion-disco" cols="30" rows="10"></textarea>
    </form>
</body>
</html>