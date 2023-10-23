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
	    $libro = array(
             
            "Libro 1"=> array(
                "Titulo"=>"Cien años de Soledad",
                "Autor"=>"Gabriel Garcia Marquez",
                "Año"=>"1967"
            ),

            "Libro 2"=> array(
                "Titulo"=>"1984",
                "Autor"=>"George Orwell",
                "Año"=>"1949"
            ),

            "Libro 3"=> array(
                "Titulo"=>"Triologia El señor de los Anillos: ",
                "Autor"=>"J.R.R.Tolkien",
                "Año"=>"1954"
            ),

        );

        echo "Muestra todo el array con print_r: </br>";
        print_r($libro);
        print "</br>";
        echo "</br> Informacion de ". $libro["Libro 2"]["Titulo"].": </br> Autor: ". $libro["Libro 2"]["Autor"]."</br> Año: " . $libro["Libro 2"]["Año"]."</br>";
        echo "</br> Añadimos un libro mas: </br>";
        
        $libro ["Libro 4"] = array(
                "Titulo"=>"Un Mundo Feliz",
                "Autor"=>"Aldous Huxley",
                "Año"=>"1932"
        );

        echo "Informacion de ". $libro["Libro 4"]["Titulo"]." </br> Autor: ". $libro["Libro 4"]["Autor"]. "</br> Año: ". $libro["Libro 4"]["Año"]."</br>";
       
        echo "</br>Muestra todo el array con print_r: </br>";
        print_r($libro);
    ?>
</body>