const nDiferenteDias = (fecha) =>{
    fecha_Actual = new Date();
    const difTiempo = Math.abs(fecha_Actual - fecha);
    const difDia = Math.floor(difTiempo / (1000 * 60 * 60 * 24));
    return difDia;
}

const sumDias = (fecha, dias)=>{
    fecha.setFecha(fecha.getFecha()+dias);
    return fecha.toLocateDateString();
}
