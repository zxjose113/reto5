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

///////////////////////////////////////////////////////////////////////////////////
/*cambiar la imagen del ojo y hacer visible la contraseña y viceversa*/
let password=document.getElementById("password")
let imagenojo=document.getElementById("imagen")
imagenojo.addEventListener("click",cambiarojo)
function cambiarojo(){
    if(password.type==="password"){
        password.type="text"
        imagenojo.src="contrasena/icono-ojo-rayado.png"
    }
    else{
        password.type="password"
        imagenojo.src="contrasena/icono-ojo.png"
    }
}
//////////////////////////////////////////////////////
function validar() {
    // Obtener los valores de los campos del formulario
    let dni = document.getElementById("dni").value;
    // Validar DNI
    let dniValidar = /^[0-9]{8}[A-Za-z]$/;

    if (!dniValidar.test(dni)) {
        alert("Por favor, introduce un DNI válido (8 números seguidos y una letra).");
        return false;
    }
    
}


// function validar(){
//     let usuario=document.getElementById("username").value;
//     let contrasena=document.getElementById("password").value;
//     if(usuario!="alumno" || contrasena!="sanluis"){
//         alert("Usuario y/o contraseña incorrecta");
//         return false;
//     }
//     else(alert("Todos los datos son correctos, enviando formulario"))
// }