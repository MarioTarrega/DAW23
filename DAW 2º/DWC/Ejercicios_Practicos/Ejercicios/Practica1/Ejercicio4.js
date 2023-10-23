const vecA = [1,2];
const vecB = [3,4];

function escalarProd(vecA, vecB){
    if(vecA.length != vecB.length){
        alert ("Los vectores tiene distinta longitud");
    }

    result = vecA.reduce((acum,el,idx) => acum + (el * vecB))
    return result;
}

function magnitudesProd(vecA, vecB){
    let result = 0;
    result = Math.sqrt()
}