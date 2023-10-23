var contador = 0;

var boton = document.getElementById("boton");
var contadorE = document.getElementById("contador");

function contar (){
    contador++;
    contadorE.textContent = contador;
}

boton.addEventListener('click', contar);