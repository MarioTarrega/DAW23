<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>

<body>
	
<?php
//Array multidimensional y asociativo	
$frutas = array(
				"manzana" => array(
							"color" => "rojo",
							"sabor" => "dulce",
							"forma" => "redondeada"
							),
				"naranja" => array(
 							"color" => "naranja",
 							"sabor" => "ácido",
 							"forma" => "redondeada"
 							),
				"plátano" => array(
 							"color" => "amarillo",
 							"forma" => "aplatanada" 
 							)
				);
print_r($frutas);
print "<br>********************************************************<br>";
echo "Acceso a un valor concreto: ". $frutas["manzana"]["sabor"];
print "<br>********************************************************<br>";
echo "Añadimos la fruta pera: <br>";
$frutas["pera"] = array(
						"color" => "verde",
						"sabor" => "dulce",
						"forma" => "de pera"
					);
print_r($frutas);
print "<br>********************************************************<br>";
echo "Añadimos al plátano su sabor: <br>";
$frutas["platano"]["sabor"] = "dulce"; 
print_r($frutas);
?>	
</body>

</html>
