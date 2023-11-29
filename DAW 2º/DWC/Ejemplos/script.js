class Vehiculo{
    #id_vehiculo
    constructor(marca, modelo, color, precio, id_vehiculo){
        this.marca = marca;
        this.modelo = modelo;
        this.color = color;
        this.precio = precio;
        this.#id_vehiculo= id_vehiculo;
    }


    presentar(){
        return(`Marca: ${this.marca}, Modelo: ${this.modelo}, Color: ${this.color}, Precio: ${this.precio}`)
    }
}

class Coche extends Vehiculo {
    constructor (marca, modelo, color, precio, numPuertas, presentar){
        super(marca, modelo, color, precio, presentar);
        this.numPuertas = numPuertas;

    }
}

class Moto extends Vehiculo{
    constructor(marca, modelo, color, precio, cilindrada, presentar){
        super(marca, modelo, color, precio, presentar);
        this.cilindrada = cilindrada;
        }
}

const coche = new Coche('Seat','Leon','rojo', 10000, 5);
const moto = new Moto('Yamaha', 'MT-07',7000, 0);
const vehiculo = new Vehiculo('vehiculo', 'vehiculo', 'vehiculo', 0, 0);


console.log(coche.presentar())
console.log(moto.presentar())
console.log(vehiculo.presentar())


