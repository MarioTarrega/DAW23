//Ejercicio de Clases.

class Animal{
    #id_animal
    constructor(nombre, edad, id_animal){
        this.nombre = nombre
        this.edad = edad
        this.#id_animal = id_animal
    }

    presentar(){
        return `Nombre: ${this.nombre}, Edad: ${this.edad}`
    }
}

class Mamifero extends Animal{
    constructor(nombre, edad, tipoPelaje){
        super(nombre, edad)
        this.tipoPelaje = tipoPelaje
    }
    
}

class Ave extends Animal{
    constructor(nombre, edad, tipoPlumaje){
        super(nombre, edad)
        this.tipoPlumaje = tipoPlumaje
    }
}


const mamifero = new Mamifero("Vaca", 7, "corto")
const ave = new Ave("Gorrion", 12, "largo")

const aMamifero = Object.keys(mamifero)
const aAve = Object.keys(ave)

console.log(mamifero.presentar())
console.log(ave.presentar())
console.log(aMamifero)
console.log(aAve)