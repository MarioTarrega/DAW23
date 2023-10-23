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
        $numero = 1;
        $operando = 1;

        echo "Tablas de Multiplicar del 1 al10 :";
        echo "</br>";
       
        while ($numero <=10){
            echo "</br>";
            echo "Tabla del $numero";
            echo "</br>";
            while($operando <= 10){
           
                echo "$numero * $operando =" . $numero * $operando . "</br>";

                $operando++;
            }
            $operando = 1;
            $numero++;
        }
?>
</body>