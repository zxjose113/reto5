// Parte del código que hace que el logo principal se agrande
let logo = document.getElementById("logo1"); 


logo.addEventListener("mouseover", agrandar);  // Evento para detectar cuando el mouse entra en el logo

// Función que agranda el logo cuando el mouse pasa sobre él
function agrandar(){
    logo.style.width = "140px";  // Cambia el ancho del logo a 140px
    logo.style.height = "140px";  // Cambia la altura del logo a 140px
}


logo.addEventListener("mouseout", noagrandar);  // Evento para detectar cuando el mouse sale del logo

// Función que reduce el tamaño del logo cuando el mouse sale de él
function noagrandar(){
    logo.style.width = "110px";  // Cambia el ancho del logo
    logo.style.height = "110px";  // Cambia la altura del logo
}

// Establecer la transición de manera independiente para el tamaño del logo
logo.style.transition = "width 0.4s, height 0.4s";  // Agrega una transición suave de 0.4 segundos para cambiar el ancho y la altura del logo

///////////////////////////////////////////////////////////////////////////////////

// Parte que hace el despliegue de los submenús cuando se pasa el mouse sobre los elementos del menú

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

// Función principal para realizar el sorteo de pilotos
function sortearPilotos() {
    // Obtener las selecciones de los menús desplegables para los tres primeros puestos
    let first = document.getElementById("first").value;  
    let second = document.getElementById("second").value;  
    let third = document.getElementById("third").value; 

    // Validar que todos los campos están seleccionados
    if (!first || !second || !third) {  // Si alguno de los campos no tiene valor (es decir, está vacío)
        alert("Por favor, selecciona los tres pilotos.");  // Muestra una alerta pidiendo que selecciones tres pilotos
        return;  // Sale de la función si no se han seleccionado los tres pilotos
    }

    // Validar que los pilotos seleccionados no sean los mismos
    if (first === second || first === third || second === third) {  // Si alguno de los pilotos seleccionados es el mismo
        alert("No puedes elegir el mismo piloto para más de un puesto.");  // Muestra una alerta pidiendo que no repitas pilotos
        return;  // Sale de la función si hay pilotos repetidos
    }

    // Array con las imágenes y nombres de los pilotos
    let imagenesPilotos = [
        "/sorteo/pilotos/lando-norris.jpg", // Imagen de Lando Norris
        "/sorteo/pilotos/lewis-hamilton.jpg", // Imagen Lewis Hamilton
        "/sorteo/pilotos/M-Verstappen.jpg", // Imagen Max Verstappen
        "/sorteo/pilotos/george-russell.jpg", // Imagen George Russell
        "/sorteo/pilotos/charles-leclerc.jpg"  // Imagen de Charles Leclerc
    ];

    let nombresPilotos = [
        "Lando Norris",  
        "Lewis Hamilton",  
        "M. Verstappen",  
        "George Russell",  
        "Charles Leclerc"  
    ];

    // Función para hacer el sorteo aleatorio de pilotos sin repetir
    function obtenerPilotosAleatorios() {
        let pilotosSorteados = [];  // Array para guardar los pilotos sorteados
        while (pilotosSorteados.length < 3) {  // Mientras no tengamos 3 pilotos sorteados
            let aleatorio = Math.floor(Math.random() * 5); // Genera un número aleatorio entre 0 y 4 (para 5 pilotos)
            if (!pilotosSorteados.includes(aleatorio)) {  // Si el piloto no ha sido sorteado antes
                pilotosSorteados.push(aleatorio);  // Lo agrega al array de pilotos sorteados
            }
        }
        return pilotosSorteados;  // Devuelve el array con los 3 pilotos sorteados
    }

    // Obtener los tres pilotos sorteados aleatoriamente
    let pilotosSorteados = obtenerPilotosAleatorios();  // Llama a la función para obtener los pilotos sorteados

    let resultadoDiv = document.getElementById("pilotos-sorteados");  // Selecciona el contenedor donde se mostrarán los pilotos sorteados
    resultadoDiv.innerHTML = '';  // Limpia cualquier contenido previo en el contenedor

    // Mostrar imágenes y nombres de los pilotos sorteados
    for (let i = 0; i < pilotosSorteados.length; i++) {  
        let pilotoIndex = pilotosSorteados[i];  // Obtiene el índice del piloto sorteado
        let imgElement = document.createElement("img");  // Crea un nuevo elemento de imagen
        imgElement.src = imagenesPilotos[pilotoIndex];  // Establece la fuente de la imagen usando el índice del piloto sorteado
        imgElement.alt = nombresPilotos[pilotoIndex];  // Establece el texto alternativo de la imagen con el nombre del piloto
        resultadoDiv.appendChild(imgElement);  // Agrega la imagen al contenedor de resultados

        // Mostrar la posición real del piloto sorteado
        let posElement = document.createElement("p");  // Crea un nuevo párrafo para mostrar la posición
        posElement.style.color = "white"; 
        posElement.style.backgroundColor = "#a00000";  
        posElement.style.height = "30px";  
        posElement.style.padding = "8px 4px 0px 4px";  // Agrega un poco de espacio interno en el párrafo
        posElement.style.borderRadius = "4px";  // Establece bordes redondeados en el párrafo
        posElement.innerHTML = nombresPilotos[pilotoIndex] + ": Puesto " + (i + 1);  // Establece el texto del párrafo con el nombre y la posición del piloto
        resultadoDiv.appendChild(posElement);  // Agrega el párrafo al contenedor de resultados
    }

    // Verificar aciertos
    let aciertos = 0;  // Inicializa la variable que contará los aciertos
    if (first == pilotosSorteados[0] + 1) aciertos++;  // Verifica si el primer piloto seleccionado coincide con el primero sorteado
    if (second == pilotosSorteados[1] + 1) aciertos++;  // Verifica si el segundo piloto seleccionado coincide con el segundo sorteado
    if (third == pilotosSorteados[2] + 1) aciertos++;  // Verifica si el tercer piloto seleccionado coincide con el tercero sorteado

    // Calcular la cantidad ganada
    let cantidadGanada = aciertos * 100;  // La cantidad ganada es igual a los aciertos multiplicados por 100

    // Mostrar los aciertos y la cantidad ganada
    let aciertosDiv = document.getElementById("aciertos");  // Selecciona el contenedor de aciertos
    
    aciertosDiv.innerHTML = "Has acertado " + aciertos + " piloto" + (aciertos != 1 ? "s" : ""/*Verifica si hay más de 1 acierto y coloca la S*/) + ".";  // Muestra los aciertos en el contenedor

    // Mostrar los fallos
    let fallosDiv = document.getElementById("fallos");  // Selecciona el contenedor de fallos
    let fallos = 3 - aciertos;  // Los fallos son 3 menos los aciertos
    fallosDiv.innerHTML = "Has fallado " + fallos + " piloto" + (fallos != 1 ? "s" : ""/*Verifica si hay más de 1 fallo y coloca la S*/) + ".";  // Muestra los fallos en el contenedor

    // Mostrar el premio
    let premioDiv = document.getElementById("premio");  // Selecciona el contenedor de premio
    premioDiv.innerHTML = "Has ganado " + cantidadGanada + "€";  // Muestra el premio ganado en el contenedor

    // Mostrar los resultados
    document.getElementById("resultados-info").style.display = "flex";  // Muestra la sección con los resultados
}
