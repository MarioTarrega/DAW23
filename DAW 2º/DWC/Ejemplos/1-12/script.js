const fs = require('fs');
const ruta = "C:/Users/Mario/Documents/GitHub/DAW23/DAW 2º/DWC/Ejemplos/1-12/mi_fichero.txt";

fs.readFile(ruta, 'utf8', (err, data)=>{
    if(err){
        console.log("Error al leer el fichero");
        return;
    }
    const lineas = data.split('\n').map(linea => linea.trim());
    lineas.sort();
    console.log("Datos ordenados:");
    console.log(lineas.join('\n'));
});