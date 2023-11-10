//Crea una función que tome un string como parámetro y devuelva la longitud de ese string.
var x = "Hola";
const longitudString = (x) => x.length;
console.log(longitudString);

//Escribe una función que invierta un string.
const invertirString = (x) => x.split('').reverse().join('');
console.log(invertirString(x));

//Dada una oración, escribe una función que cuente el número de palabras en ella.
var oracion = "Hola mundo cruel bienvenido infierno celestia";
const contarPalabras = (oracion) => oracion.trim().split(" ").length;
console.log(contarPalabras(oracion));

//Recursivo
const invertir = function(oracion){ 
    if(oracion.length == 0){
        return "";
    }else{
        return invertir(oracion.slice(1) + oracion[0]);
    }

}

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

let mapaTraduccion = new Map([
    ['dog','perro'],
    ['cat','gato'],
    ['bird','pajaro'],
    ['car', 'coche'],
    ['house', 'casa']]);
function traducirEspañol(palabras){
    let palabra = palabras.split(' ');
    let palabraTraducida = palabra.map( (palabra1) => {
        let traduccion = mapaTraduccion.get(palabra1);
        return traduccion; 
    });
        return palabraTraducida.join(' ');
    }
console.log(mapaTraduccion)
console.log(traducirEspañol('dog cat car'));

//Crea un objeto que represente un estudiante con propiedades como nombre, edad y grado.
//Imprime en la consola la información del estudiante.

class Estudiante{
    constructor(nombre, edad, grado){
        this.nombre = nombre;
        this.edad = edad;
        this.grado = grado;
    }
    toString() {
        return `Nombre:${this.nombre} Edad:${this.edad} Grado:${this.grado}. `;
    }
}
let estudiante = new Estudiante("Juan", 12, "1º");
console.log(estudiante.toString())

//Escribe una función que tome un objeto como parámetro y devuelva un array con los valores
//de todas las propiedades del objeto.

function objetoToArray(obj){
    return Object.values(obj);
}
let obj = {nombre:"Juan", edad:12, grado:"1º"}
console.log(objetoToArray(obj));