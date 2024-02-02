const contenedor = document.getElementById('dragg');
const archivo = document.getElementById('fileInput');

archivo.addEventListener('change', function(e) { 
    console.log( archivo.files);
});

contenedor.addEventListener('drop' , (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    console.log(files);
    window.alert("Conseguido!")
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