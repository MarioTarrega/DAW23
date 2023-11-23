var frase = " ¡APRENDE JAVASCRIPT PARA MEJORAR TUS HABILIDADES EN JAVASCRIPT! ";
//1 Elinima los espacios en blanco al inicio y al final del texto
console.log(frase.trim());
//2 Cambia todo el texto a minuscula.
var minuscula = frase.toLowerCase();
console.log(minuscula)
//3 Reemplaza todas las ocurrencias de la palabra "javascript" por "JavaScript".
console.log(frase.replace("JAVASCRIPT", "JavaScript"))
//4 Encuentra las posiciones en las que se encuentra la palabra "JavaScript".
console.log(frase.indexOf("JAVASCRIPT") +" "+ frase.lastIndexOf("JAVASCRIPT"));
//5 Filtra el texto desde la posición del primer “JavaScript” hasta la última posición
console.log(frase.slice(frase.indexOf("JAVASCRIPT")));
//6 Divide el texto en un array de palabras individuales.
console.log(frase.split(" "));
//7 Pon la primera letra de cada palabra en mayúsculas
var palabra = minuscula.split(" ");
for(var i = 0 ; i < palabra.length; i++){
    palabra[i] = palabra[i].charAt(0).toUpperCase()+ palabra[i].slice(1)
}
var modificado = palabra.join(" ")
console.log(modificado)
//8 Junta el array en formato texto, separando cada palabra por un espacio en blanco
var array = frase.split(" ")
console.log(array.join(" "))
//9 Rellena el texto resultante para que tenga una longitud total de al menos 70
// caracteres, agregando puntos al final.
while(frase.length < 70){
    frase += "."
}
console.log(frase)