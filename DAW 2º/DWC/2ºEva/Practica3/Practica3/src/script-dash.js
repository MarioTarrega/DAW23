const contenedor = document.getElementById('dragg');
const archivo = document.getElementById('fileInput');

// archivo.addEventListener('change', function(e) { 
//     console.log( archivo.files);
// });

contenedor.addEventListener('drop' , (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    console.log(files);
    window.alert("Conseguido!")

    if(files.length > 0){
        processarArchivo(files[0]);
    }
});
contenedor.addEventListener('dragover', (e) => {
    e.preventDefault();
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1.2";
    contenedor.style.backgroundColor = "white";
    contenedor.style.color = "#723e4e"; // Cambia el valor de altura deseado
});

contenedor.addEventListener('dragleave', (e) => {
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1";
    contenedor.style.backgroundColor = "#723e4e"; 
    contenedor.style.color = "white";
    // Cambia el valor de altura original
});

contenedor.addEventListener('dragover' , (e) => {
    e.preventDefault();
});

function updateSliderValueGraficas(){
    var slider = document.getElementById("sliderAnoG");
    var output = document.getElementById("sliderValueG");
    output.innerHTML = "Año seleccionado: " + slider.value;
}
function updateSliderValueTablas(){
    var slider = document.getElementById("sliderAnoT");
    var output = document.getElementById("sliderValueT");
    output.innerHTML = "Año seleccionado: " + slider.value;
}

function processarArchivo(file){
    document.querySelector(".container2").style.display = "block";
    document.querySelector(".contenedor2").style.display = "grid";
    document.querySelector(".contenedor3").style.display = "block";
    
    var opcionG = document.querySelectorAll('.menu a[href="#graficas"], .pie a[href="#graficas"]');
    var opcionT = document.querySelectorAll('.menu a[href="#tablas"], .pie a[href="#tablas"]');

    opcionG.forEach(function(opcion){
        opcionG.classList.remove("oculto");
    });

    opcionT.forEach(function(opcion){
        opcionT.style.display = "block";
    });
}

