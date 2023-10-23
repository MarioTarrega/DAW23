<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>

<body>
	
<?php
	//ejemplo de string funcionando como array
	$string="Pedro";
	
	echo "La primera letra del string $string es: $string[0] y la última ". $string[strlen($string)-1]."<br>";	
	echo "El tamaño es: ".strlen($string)." <br> Y el string carácter a carácter es: <br>";
	for ($i=0;$i<strlen($string);$i++){
		echo $string[$i]."<br>";
	}
?>
	
</body>

</html>
