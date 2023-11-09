class Rectangulo{
    constructor(base, altura){
        this.base = base;
        this.altura = altura;
    }
   
}
rec1 = new Rectangulo();
rec2 = new Rectangulo();
Object.assign(rec1, {base: 2, altura: 3});
Object.prototype.altura = 4;

 
rec1.getArea = function(){
    return (this.base * this.altura);
}
rec2.getPerimetro = function(){
    return ((this.base + this.base) * 2);
}
 
rec2.getPerimetro = function(){
    return ((2*this.base) + (2*this.altura));
}
