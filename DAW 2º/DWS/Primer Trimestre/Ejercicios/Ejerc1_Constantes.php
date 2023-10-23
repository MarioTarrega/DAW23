<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.38" />
</head>

<body>
	<?php
	echo "La versión del intérprete de PHP de nuestro servidor es:" . PHP_VERSION . "</br>";
    echo "La ruta en la que se almacenan las librerías es:" . PHP_LIBDIR . "</br>";
    echo "La ruta completa del archivo es:" . __FILE__ . "</br>";

    define ("Pulgada", 2.54);
    define ("Libras",0.45359237);
	
	echo"</br>";
	
	echo "7 pulgadas son" . (Pulgada*7) . "centimetros </br>";
	echo "5 libras son" . (Libras*5) . "Kilogramos";
?>
</body>