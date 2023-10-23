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
        $habilidad = 58;

        
        if($habilidad > 0 AND $habilidad < 100 ){
            echo "Estas en los valores establecidos. </br>";
        
            if($habilidad < 25){
                
                echo "Nivel Principiante.";
            }else if($habilidad > 26 AND $habilidad < 50){
                
                echo "Nivel Intermedio.";
            }else if($habilidad > 51 AND $habilidad < 75){
                
                echo "Nivel Avanzado.";
            }else if($habilidad > 76 AND $habilidad < 100){
                
                echo "Nivel Experto.";
            }else if($habilidad > 100){
                echo "Te estas pasando de nivel Chacho.";
            }
    
        }else{

            echo "</br> El valor esta fuera de los rangos establecidos.";
        
        }

       

        
    ?>
</body>