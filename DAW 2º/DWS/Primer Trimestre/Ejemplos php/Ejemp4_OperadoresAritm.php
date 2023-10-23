<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>

<body>
	
<?php

	$x=5;
	$y=3;
	echo "Realizaremos las operaciones directamente en el echo: <br>";         
	echo "$x+$y=". ($x+$y) ."<br>";          	  
	echo "$x-$y=". $x-$y."<br>";          
	echo "$x*$y=". ($x*$y)."<br>";          
	echo "$x/$y=". ($x/$y)." Aunque sea entero, el resultado es decimal.<br>";   
	echo "$x/$y=". (int)($x/$y)." Pero lo podemos forzar a que sea a entero.<br>";   
	echo "$x%$y=". ($x%$y)." No es necesario el último ';' ya que la siguiente instrucción es el cierre."   
?>
	
</body>

</html>
