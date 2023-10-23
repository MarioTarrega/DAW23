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

        $numeros = array(5,10,15,20,25);
        $suma = 0;

        foreach($numeros as $numero){
            
            $suma += $numero;

        }

        echo "La suma de los numeros del array es: ". $suma;
?>
</body>