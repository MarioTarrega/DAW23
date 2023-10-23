function estandarizarDatos(datos) {
    
    const media = calcularMedia(datos);
    console.log(media)
    const desviacionEstandar = calcularDesviacionEstandar(datos, media);
    const datosEstandarizados = datos.map((x) => (x - media) / desviacionEstandar);
    return datosEstandarizados;
}

function calcularMedia(datos) {
    const suma = datos.reduce((acumulador, valor) => acumulador + valor, 0);
    return suma / datos.length;
}

function calcularDesviacionEstandar(datos, media) {
    const sumaCuadrados = datos.reduce((acumulador, valor) => acumulador + (valor - media)**2, 0);
    return Math.sqrt(sumaCuadrados / datos.length);
}

function generarVariableAleatoria(cantidad) {
    var numeros = [];
    const param1 = Math.random()*10
    const param2 = Math.random()*10+1
    for (var i = 0; i < cantidad; i++) {
        var u1 = Math.random()
        var u2 = Math.random()
        var z = Math.sqrt(-2 * Math.log(u1)) * Math.cos(2 * Math.PI * u2)
        var numeroNormal = param1 + z * Math.sqrt(param2)
        numeros.push(numeroNormal)
    }
    return numeros
 }

var randomVariable = generarVariableAleatoria(1000);

const datosEstandarizados = estandarizarDatos(randomVariable);

console.log('Datos estandarizados:', datosEstandarizados);
console.log('Datos variables: ', randomVariable)