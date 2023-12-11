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

     $estudiantes_notas = array(
        "Juan" => array(8,9,10),
        "Manolo" => array(0,3,1) ,
        "Josefa" => array(9,10,10),
        "Eustaquio" => array(4,5,5),
        "Fulgencio" => array(10,7,4),
     );

     foreach($estudiantes_notas as $nombre => $notas){         
         $promedio = array_sum($notas) / count($notas);

         echo "Estudiante: $nombre - Promedio de notas: $promedio .</br>";
     };
?>
</body>