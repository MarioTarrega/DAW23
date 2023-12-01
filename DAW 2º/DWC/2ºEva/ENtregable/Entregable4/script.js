//EJ1
class Empleado{

    constructor(nombre,edad,puesto){
        this.nombre = nombre;
        this.edad= edad;
        this.puesto = puesto;
    }
    mostrarInformacion(){
        return `Nombre: ${this.nombre}, Edad: ${this.edad}, Puesto: ${this.puesto}`;
    }
}



//EJ2
class Desarollador extends Empleado{

    constructor(nombre, edad, puesto, lenguaje){
        super(nombre, edad, puesto);
        this.lenguaje = lenguaje;
    }
    mostrarInformacion(){
        return super.mostrarInformacion().concat(` Lenguaje de programación: ${this.lenguaje}`);
    }
}

//EJ3
const fs = require('fs');
const ruta = "C:/Users/Mario/Documents/GitHub/DAW23/DAW 2º/DWC/2ºEva/ENtregable/Entregable4/empleados.json";

fs.readFile(ruta, 'utf-8', (err, data) => {

    if (err) throw err
    
    //console.log(data)
    const dataArray = JSON.parse(data);
    //console.log(dataArray)
    //const ej1 = new Empleado('Jose', 42, 'paleto');
    //const ej2 = new Desarollador('Monica', 34,'jefilla', 'php')
    //EJ4
    const empleados = [];
    dataArray.forEach((empleadoData) =>{
        if(empleadoData.lenguaje){
        empleados.push(new Desarollador(
            empleadoData.nombre,
            empleadoData.edad,
            empleadoData.puesto,
            empleadoData.lenguaje
        ));
        } else {
            empleados.push(new Empleado(
                empleadoData.nombre,
                empleadoData.edad,
                empleadoData.puesto
            ));
        }
    });
    empleados.forEach((empleado)=> console.log(empleado.mostrarInformacion()));
});




    
    
    
    