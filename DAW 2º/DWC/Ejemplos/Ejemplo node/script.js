const fs = require('fs')
fs.readFile('nombre_archivo', 'codificacion', (err,data) => {
    console.log(err)
    if(err){
        console.log(err)
    }else{
        console.log(data)
    }
})

filePath = 'rutaArchivo'
try{
    const data = fs.readFileSync(filePath, 'codificación')
    console.log(data)
}catch(err){
    console.log(err)
}

filePath = 'ruta/nombreArchivo'
fs = require('fs');
//ej1 CSV
fs.readFile(filePath,'codificacion', (err,data) => {
    if(err){
    console.log(err)
    }else{
        lineas = data.split('\n')
        linesa = lineas.trim().split(',')
    }
})
//Ej2 CSV
fs.readFile(filePath,'codificacion', (err,data) => {
    if(err){
    console.log(err)
    }else{
        lineas = data.split('\n')
        arr = lineas.map((el) => {
            return el.trim().split(',')
        })
    }
})

//Ej3 TSV
fs.readFile(filePath,'codificacion', (err,data) => {
    if(err){
    console.log(err)
    }else{
        lineas = data.split('\n')
        arr = lineas.map((el) => {
            return el.trim().split('\t')
        })
    }
})