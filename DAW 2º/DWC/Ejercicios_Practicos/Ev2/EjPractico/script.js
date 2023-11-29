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
    constructor(nombre, edad, tipoPelaje, presentar){
        super(nombre, edad, presentar)
        this.tipoPelaje = tipoPelaje
    }
}

class Ave extends Animal{
    constructor(nombre, edad, tipoPlumaje, presentar){
        super(nombre, edad, presentar)
        this.tipoPlumaje = tipoPlumaje
    }
}


const mamifero = new Mamifero("Vaca", 7, "corto")
const ave = new Ave("Gorrion", 12, "largo")

console.log(mamifero.presentar())
console.log(ave.presentar())