function calcularPromedios(calificaciones) {
    const promedios = new Map();

    calificaciones.forEach((notas, estudiante) => {
        const promedio = notas.reduce((a, b) => a + b) / notas.length;
        promedios.set(estudiante, promedio);
    });

    
    let sumaTotal = 0;
    let totalEstudiantes = 0;

    calificaciones.forEach((notas) => {
        sumaTotal += notas.reduce((a, b) => a + b);
        totalEstudiantes += notas.length;
    });

    const promedioClase = sumaTotal / totalEstudiantes;

    console.log('Promedio de calificaciones de toda la clase:', promedioClase);

    return promedios;
}


const calificacionesEstudiantes = new Map();

calificacionesEstudiantes.set('Estudiante1', [85, 90, 92]);
calificacionesEstudiantes.set('Estudiante2', [78, 88, 95]);
calificacionesEstudiantes.set('Estudiante3', [92, 91, 89]);

const promediosEstudiantes = calcularPromedios(calificacionesEstudiantes);

console.log('Promedios de calificaciones por estudiante:');
promediosEstudiantes.forEach((promedio, estudiante) => {
    console.log(`${estudiante}: ${promedio}`);
});