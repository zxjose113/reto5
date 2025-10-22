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
