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

        $numero = 0;
        echo "La suma de los 10 primeros numeros es: ";

        for($i = 1; $i <= 10 ; $i++){

            if ($i < 10 ){
                echo "$i +";
                $numero = $numero + $i;
            }

            if($i == 10){
                $numero = $numero + $i;
                echo "$i=". $numero;
            }  

        }
?>
</body>