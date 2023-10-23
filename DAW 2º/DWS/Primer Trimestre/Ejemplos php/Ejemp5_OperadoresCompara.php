<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>

<body>
	
<?php

	$x=5;
	$y="5";
	$z=5;
	echo "x = $x como integer <br> y = '$y' como string <br> z = $z como integer <br> ";
	echo " Comprobación x==y :<br> ";
	if($x==$y)
		echo " son iguales";	
	echo "<br>";
	
	echo " Comprobación x===y :<br> ";
	if($x===$y)
		echo " son del mismo tipo";	
	else
		echo " no son del mismo tipo";	
	echo "<br>";
	
	echo " Comprobación x==z :<br> ";
	if($x==$z)
		echo " son iguales";
	else
		echo " no son iguales";
	echo "<br>";
	
	echo " Comprobación x===z :<br> ";
	if($x===$z)
		echo " son del mismo tipo";
?>
</body>

</html>
