let logo = document.getElementById("logo1");
logo.addEventListener("mouseover", agrandar);
function agrandar(){
    logo.style.width="140px";
    logo.style.height="140px";
    
}
logo.addEventListener("mouseout",noagrandar);
function noagrandar(){
    logo.style.width="110px";
    logo.style.height="110px";  
}
// Establecer la transición de manera independiente para el tamaño
logo.style.transition = "width 0.4s, height 0.4s";  // Transición de ancho y alto

//////////////////////////////////////////////////////////////
// Seleccionamos todos los elementos de menú con submenú
let menuItems = document.querySelectorAll(".head .menu > ul > li");

// Recorremos los elementos de menú con un ciclo for
for (let i = 0; i < menuItems.length; i++) {
    let item = menuItems[i];
    
    // Obtener el submenú relacionado con el item
    let submenu = item.querySelector(".submenu");
    
    // Asegurarse de que solo se agregue el comportamiento si hay un submenú
    if (submenu) {
        // Mostrar el submenú cuando el puntero esté sobre el item
        item.addEventListener("mouseover", desglose)
            function desglose () {
            submenu.style.display = "block";
            }
        };

        // Ocultar el submenú cuando el puntero salga del item
        item.addEventListener("mouseout", nodesglose)
        function nodesglose() {
            submenu.style.display = "none";
        };
}


//CARRUSEL DE IMAGENES
// Repetimos la función "cambiarFoto" cada 2 segundos
setInterval("cambiarFoto()", 2000);  

function cambiarFoto() {
    let arraytitulo=["Red Bull en la pista", "Desafio bajo la lluvia", "Celebración en el podio", "Mercedes en acción","Duelo en el circuito"
        ,"Museo Guggenheim","Parque Etxebarri", "Paseo del Arenal", "Plaza Moyúa","Puente Zubizuri"]
    let arrayimagenes = ["/reto5/imagenes/carrusel/1.jpg", "/reto5/imagenes/carrusel/2.jpg","/reto5/imagenes/carrusel/3.jpg", "/reto5/imagenes/carrusel/4.jpg","/reto5/imagenes/carrusel/5.jpg","/reto5/imagenes/carrusel/6.jpg","/reto5/imagenes/carrusel/7.jpg","/reto5/imagenes/carrusel/8.jpg","/reto5/imagenes/carrusel/9.jpg","/reto5/imagenes/carrusel/10.jpg"]
    
    // Calculo de un número aleatorio entre 0 y 10 (inclusive)
    let numAleatorio = Math.floor(Math.random() * 10);  // Usamos .length para mayor flexibilidad
    
    // Seleccionamos la imagen con su id y actualizamos el src
    let titulos = document.getElementById("Titulos");
    let imagen = document.getElementById("imagenescarrusel");
    titulos.innerHTML=arraytitulo[numAleatorio];
    imagen.src = arrayimagenes[numAleatorio];
}


