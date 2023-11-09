class Rectangulo{
    constructor(alto,ancho){
        this._alto = alto;
        this._ancho = ancho;
    }

    #calcularArea(){
        return this._alto * this._ancho;
    }

    #calcularPerimetro(){
        return 2*(this._alto + this._ancho);
    }

    obtenerArea(){
        return this.#calcularArea();
    }

    obtenerPerimetro(){
        return this.#calcularPerimetro();
    }
}

rec1 = new Rectangulo(4,7);
rec2 = new Rectangulo(8,19);
console.log("Rec1: "+ rec1.obtenerArea());
console.log("Rec2: "+ rec2.obtenerArea());
console.log("Rec1: "+ rec1.obtenerPerimetro());
console.log("Rec2: "+ rec2.obtenerPerimetro());