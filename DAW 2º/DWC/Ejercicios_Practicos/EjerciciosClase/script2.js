//Añadir valores a constantes
const persona ={
    'nombre':'juan',
    'apellido':'martinez',
    'edad': 42,
    'nombre_completo': function() {return this.nombre + " " + this.apellido}
}

Object.defineProperty(persona, "ciudad", {value:"Alicante"})
//persona.ciudad = 'alicante'
console.log(persona.nombre_completo())


