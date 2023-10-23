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
	function ctes (){
		echo CTE_DEF."<br>"; //uso constantes que estan fuera sin tener que pasarlas
		echo CTE_CONST."<br>";
		echo "<br>Defino una constante dentro de la función (debe ser con DEFINE) <br>";
		define('PAGOS_DEF', array(123, 1233.67, 2333));
		print_r(PAGOS_DEF);
	};
	
	define ("CTE_DEF","Constante DEFINE");
	const CTE_CONST = "Constante CONST";
	
	echo "Las utilizo después de definirlas: <br>";
	echo CTE_DEF."<br>";
	echo CTE_CONST."<br>";
	
	echo "<br>¿Existe la constante creada dentro de la función: ";
	if (defined ('PAGOS_DEF'))
		echo "SI<br>";
	else
		echo "NO, porque aún no se ha llamado a la función.<br>";
		
	echo "Las utilizo dentro de una función: <br>";	
	ctes();
	
	echo "<br>Defino una constante con CONST y la muestro (esto no se puede hacer dentro de la funcion):<br>";
	const PAGOS_CONST = [123, 56.7, 1234.33];
	print_r(PAGOS_CONST);
	
	echo "<br>Puedo utilizar desde fuera la constante definida dentro de la función:<br>";
	print_r(PAGOS_DEF);
	
	echo "<br>¿Existe la constante creada dentro de la función: ";
	if (defined ('PAGOS_DEF'))
		echo "SI";
	else
		echo "NO";
?>
</body>

</html>
