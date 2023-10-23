let jugador = 0;
let maquina = 0;
let resultado
function jugar(opcionJ){
    const opcion = ['piedra', 'papel', 'tijera'];
    const opcionM = opcion[Math.floor(Math.random()*3)];
    resultado = determinarGanador(opcionJ, opcionM);

    if(resultado == "Jugador"){
        jugador++;
    }else if(resultado == "Maquina"){
        maquina++;
    }

    if(jugador === 3 || maquina === 3){
        if(jugador === 3){
            alert ("¡El jugador a ganado!");
            document.getElementById("id_parrafo").style.visibility = "hidden";
            document.querySelectorAll("button").forEach(function(button) {
                button.remove();
            });
        }else{
            alert("¡La máquina gana!");
            document.getElementById("id_parrafo").style.visibility = "hidden";
            document.querySelectorAll("button").forEach(function(button) {
                button.remove();
            });
        }
    }else{
        alert("Jugador: "+ jugador +" - Máquina: "+ maquina);
    }
    }

function determinarGanador(opcionJ, opcionM){
    switch(opcionJ){
        case "piedra":
            switch(opcionM){
                case "piedra": 
                    return "Empate!";
                    break;
                case "papel":
                    return "Maquina";
                    break;
                case "tijera":
                    return "Jugador";
                    break;
            }
            break;
        case "papel":
            switch(opcionM){
                case "piedra":
                    return "Juagdor";
                    break;
                case "papel":
                    return "Empate!";
                    break;
                case "tijera":
                    return "Maquina";
                    break;
            }
            break;
        case "tijera":
            switch(opcionM){
                case "piedra":
                    return "Maquina";
                    break;
                case "papel":
                    return "Jugador";
                    break;
                case "tijera":
                    return "Empate!";
                    break;
            }
            break;
    }
}

