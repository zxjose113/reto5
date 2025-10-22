//Parte del codigo que hace que el logo principal se agrande
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
///////////////////////////////////////////////////////////////////////////////////

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

/////////////////////////////////////CALCULAR LA ENTRADA////////////////////////////////////////////////

//Calcular el precio de entrada
let calcularEntrada = document.getElementById("calcular-entrada");
calcularEntrada.addEventListener("click", precioEntrada);

function precioEntrada() {
    // Precio fijo por entrada
    let precioFijoPorEntrada = 60;
    
    // Obtener la cantidad de entradas
    let cantidadEntradas = parseInt(document.getElementById("cantidad").value);
    let tipoEntrada = document.getElementById("tipo").value;

        // Verificar que la cantidad de entradas sea mayor que 1
        if(cantidadEntradas > 10){
            alert("Superaste la 10 entradas máximas.")
            window.location = "../solocarreras/solocarreras.html";
            
        }
        else if (cantidadEntradas < 1) {
            alert("La cantidad de entradas debe ser al menos 1.");
            window.location = "../solocarreras/solocarreras.html";
            
        }
        
    // Determinar el precio por entrada según el tipo
    if (tipoEntrada === "adulto") {
        precioFijoPorEntrada = 60;
    } else if (tipoEntrada === "infantil") {
        precioFijoPorEntrada = 30;
    }
    
    // Calcular el precio total
    let precioTotal = cantidadEntradas * precioFijoPorEntrada;
    
    // Asignar el precio total al campo de precio
    document.getElementById('precio').value = precioTotal + '€';
}




///////////////////////////////////////////////////////////////////////////////////

// Obtenemos el checkbox y el botón
let checkbox = document.getElementById('terminos');
let boton = document.getElementById('comprarEntrada');

// Función para habilitar el botón cuando el checkbox se marca
checkbox.addEventListener('change', check);

// Habilitamos el botón si el checkbox está marcado
function check(){
    // Si está marcado, habilitamos el botón
    if (checkbox.checked) {
        boton.disabled = false;  // Habilitamos el botón
        boton.style.backgroundColor = "#c00000";  // Cambiamos el color del botón
    } else {
        boton.disabled = true;  // Deshabilitamos el botón
        boton.style.backgroundColor = "#500000";  // Cambiamos el color del botón
    }
}
// Verificar el estado del checkbox al cargar la página
window.addEventListener('load', check);

///////////////////////////////////////////////////////////////////////////////////
// Cambiar el fondo de todos los campos del formulario
let allinput=document.getElementsByClassName("inputs");
for (let index = 0; index < allinput.length; index++) {
    allinput[index].addEventListener("focus",cambiarcolor)
    function cambiarcolor(){
        allinput[index].style.backgroundColor="pink"
    };
    allinput[index].addEventListener("blur",nocambiarcolor)
    function nocambiarcolor(){
        allinput[index].style.backgroundColor="white"
    };
};
///////////////////////////////////////////////////////////////////////////////////

// Obtenemos el botón de compra
let botonCompra = document.getElementById('comprarEntrada');

botonCompra.addEventListener("click", function(event) {
    // Obtener el valor de la contraseña
    let password = document.getElementById('password').value;

    // Comprobar si la contraseña está vacía
    if (password === '') {
        alert("Por favor, ingresa una contraseña antes de proceder.");
        event.preventDefault();  // Evita el envío del formulario o la acción del botón
        return;
    }
    // Si la contraseña está llena, se puede proceder con la compra
    // Aquí puedes agregar el resto de la lógica para procesar la compra
});


///////////////////////////////////////////////////////////////////////////////////
function validar() {
    // Obtener los valores de los campos del formulario
    let dni = document.getElementById("dni").value;
    let Email=document.getElementById("email").value;
    // Validar DNI
    let dniValidar = /^[0-9]{8}[A-Za-z]$/;
    let EmailValidar= /^[a-z]([\w\.]*)@[a-z]([\w\.]*)\.[a-z]{2,3}$/
    if (!dniValidar.test(dni)) {
        alert("Por favor, introduce un DNI válido (8 números seguidos y una letra).");
        return false;
    }
    else if(!EmailValidar.test(Email)){
        alert("Por favor, Intoduce un Email valido");
        return false;
    }
    
}
///////////////////////////////////////////////////////////////////////////////////
