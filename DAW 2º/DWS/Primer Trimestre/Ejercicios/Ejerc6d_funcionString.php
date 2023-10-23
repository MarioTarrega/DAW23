<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejerc6d</title>
</head>
<body>
    <?php

        $nombreProd = " mesa_de_madera ";

        echo "Producto original: " . $nombreProd . ". <br>";
        echo "<br>";
        echo "Eliminar cualquier espacio en blanco adicional al principio y al final: " . trim($nombreProd) . ". <br>";
        echo"<br>";
        echo "Convertimos todo el nombre a minúsculas: ". strtolower($nombreProd). ". <br>";
        echo "<br>";
        echo "Eliminamos caracteres especiales: " . str_replace("_", " ", $nombreProd) . ". <br>";
        echo"<br>";
        echo "Capitalizamos la primera letra de cada palabra: " . ucwords($nombreProd). ". <br>";
    ?>
</body>
</html>