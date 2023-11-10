//Crea una función que tome un string como parámetro y devuelva la longitud de ese string.
var x = "Hola";
function longitudString (str){
    return str.length;
}
console.log(longitudString(x));

//Escribe una función que invierta un string.
function invertirString (X){
    return x.split('').reverse().join('');
}
console.log(invertirString(x));

//Dada una oración, escribe una función que cuente el número de palabras en ella.
var oracion = "Hola mundo cruel bienvenido infierno celestia";
function contarPalabras (oracion) {
  return oracion.trim().split(" ").length;
}
console.log(contarPalabras(oracion));

//Crea una función que tome dos conjuntos (sets) como parámetros y devuelva un nuevo
//conjunto con los elementos que son comunes a ambos conjuntos (intersección).

let set1 = new Set([1,2,3,4]);
let set2 = new Set([3,4,5,6]);
function elementosComunes(set1, set2){
    return new Set([...set1].filter(item => set2.has(item)));
}
console.log(elementosComunes(set1, set2));

//Implementa una función que verifique si un elemento específico está presente en un conjunto.
function comprobarElemento(set, elemento){
    return set.has(elemento);
}
console.log(comprobarElemento(set1, 3));
console.log(comprobarElemento(set1, 5));

//Crea un mapa que represente un diccionario de palabras en inglés y sus traducciones en
//español. Escribe una función que traduzca una oración de inglés a español utilizando el mapa.

let mapaTraduccicon = new Map([
    ['dog','perro'],
    ['cat','gato'],
    ['bird','pajaro'],
    ['car', 'coche'],
    ['house', 'casa']]);
function traducirEspañol(palabras){
    let palabra = palabras.split('');
    let palabraTraducida = palabra.map(palabra1 => {
        let traduccion = mapaTraduccicon.get(palabra1);
        if(traduccion == palabra1){
            return traduccion;
        }
        });
        return palabraTraducida.join('');
    }
    
    console.log(traducirEspañol('dog'))