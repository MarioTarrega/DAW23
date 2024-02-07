var DataFrame = dfjs.DataFrame;
const contenedor = document.getElementById('dragg');
const archivo = document.getElementById('fileInput');
const contenidos = document.getElementById('section');

// archivo.addEventListener('change', function(e) { 
//     console.log( archivo.files);
// });

contenedor.addEventListener('drop' , (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    // console.log(files);
    // window.alert("Conseguido!")

    if(files.length > 0){
        processarArchivo(files[0]);
    }

    // Restaurar estado inicial
    // contenedor.style.transition = 'height ease-in-out';
    // contenedor.style.scale = "1";
    // contenedor.style.backgroundColor = "#723e4e"; 
    // contenedor.style.color = "white";
});
contenedor.addEventListener('dragover', (e) => {
    e.preventDefault();
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1.2";
    contenedor.style.backgroundColor = "white";
    contenedor.style.color = "#723e4e"; 
});

contenedor.addEventListener('dragleave', (e) => {
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1";
    contenedor.style.backgroundColor = "#723e4e"; 
    contenedor.style.color = "white";
    
});
contenedor.addEventListener('mouseover', (e) => {
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1.2";
    contenedor.style.backgroundColor = "white";
    contenedor.style.color = "#723e4e";
});

contenedor.addEventListener('mouseout', (e) => {
    contenedor.style.transition = 'height ease-in-out';
    contenedor.style.scale = "1";
    contenedor.style.backgroundColor = "#723e4e"; 
    contenedor.style.color = "white";
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
 HEAD


    const leer = new FileReader();
    leer.onload = function(e){
        const contenido = e.target.result;
        console.log(contenido);
    };
    leer.onerror = function(e){
        console.log(e);
    }
    leer.readAsDataURL(file);

    DataFrame.fromCSV(file)
        .then(df => {
            
            preprocessDF(df);  
            roundDigitsDF(df);
        

    })

    document.querySelector(".container2").style.display = "grid";
    document.querySelector(".contenedor2").style.display = "grid";
    document.querySelector(".contenedor3").style.display = "block";
    
    var opcionG = document.getElementById('menu-graficas');
    var opcionT = document.getElementById('menu-tablas');

    opcionG.style.display = "block";
    opcionT.style.display = "block";
   
}

function preprocessDF(df) { 
    const df2 = df.cast('Year', Number)
            .cast('Month', String)
            .cast('VentasA', parseFloat)
            .cast('VentasB', parseFloat)
            .cast('VentasC', parseFloat)
            .cast('VentasD', parseFloat);

    // Calculate the mean of each column
    const columnMeans = df2.reduce((acc, col) => {
        const mean = col.mean();
        acc[col.name] = mean;
        return acc;
    }, {});

    // Fill missing values with the mean of each column
    const df3 = df2.fillMissing(columnMeans);

    return df3; 
}

function roundDigitsDF(df) {
    const df2 = df.mapColumns((col) => {
        return col.map((value) => {
            return Math.round(value * 100) / 100;
        });
    });

    return df2;
}

// function groupedDF(df) {



document.addEventListener('DOMContentLoaded', function() {
    const container2 = document.querySelectorAll('.container2 .section');
    
    container2.forEach(element => {
        element.addEventListener('mouseover', () => {
            element.style.transition = 'height ease-in-out';
            element.style.backgroundColor = "#9f494c";
        });

        element.addEventListener('mouseout', () => {
            element.style.transition = 'height ease-in-out';
            element.style.backgroundColor = "#723e4e"; 
            element.style.color = "white";
        });
    });
});

