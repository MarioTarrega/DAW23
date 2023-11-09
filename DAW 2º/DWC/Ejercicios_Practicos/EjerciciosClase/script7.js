class Sumatorio{

    constructor(...args){
        this.num = args;
    }

    Sumar(){
        return  this.num.reduce((a, b) => a + b, 0);
    }

    toString(){
        return `Suma [${this.num.join(",")} = ${this.Sumar()}]`;
    }
    
}

let suma = new Sumatorio(1,2,3);
console.log(suma.Sumar());
console.log(suma);
console.log(suma.toString()) 

