<?php
session_start();
require_once("conectar.php");
$conex = conectarBBDD();

    if(isset($_SESSION['nombre'])){
        $usuario = $_SESSION['nombre'];
        echo "$usuario selecciona un disco o un grupo.";

        $sql = "SELECT * FROM grupos";
        $grupos = mysqli_query($conex, $sql);

        $sql2 = "SELECT * FROM discos";
        $discos = mysqli_query($conex, $sql2);
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
   
    ?>
    <!-- Boton para volver al menu principal -->
    <button onclick='location.href="menu.php"'>Menu</button>
    
    </br></br>

    <form action="gestionDiscos.php" method="post">
        <select name="grupoMost" id="grupo-mostrar">
            <option value="">Selecciona un Grupo</option>
                <?php
                    while($arr = mysqli_fetch_array($grupos)){
                        echo '<option value='.$arr[0].'>'.$arr[1].'</option>';
                    }
                ?>
        </select>
        
        <select name="discosMost" id="discos-mostrar">
            <option value="">Selecciona Disco</option>
            <?php
                while($arr2 = mysqli_fetch_array($discos)){
                   echo '<option value='.$arr2[0].'>'.$arr2[1].'</option>';
                }
            ?> 
           
        </select>
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