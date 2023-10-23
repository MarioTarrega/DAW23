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

     $paises_capitales = array(
        "España" => "Madrid",
        "Francia" => "Paris",
        "Luxemburgo" => "Luxenburgo",
        "Italia" => "Roma",
        "Rusia" => "Moscu",
     );

     foreach($paises_capitales as $pais => $capital){
        echo "País: $pais - Capital: $capital. </br>";
     };
?>
</body>