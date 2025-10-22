let tiempoInactividad; // Creamos la variable para el temporizador

// Escuchadores de eventos para reiniciar el contador
document.addEventListener('click', reiniciarTemporizador);
document.addEventListener('keypress', reiniciarTemporizador);
// document.addEventListener('mousemove', actualizarTiempoAcceso);

// Llamamos a una función para iniciar el temporizador al cargar la página
reiniciarTemporizador();

function reiniciarTemporizador() {
    clearTimeout(tiempoInactividad); // Limpia el temporizador
    // Si pasan 60 sg sin hacer nada llamamos a la función cerrarSesionPorInactividad
    tiempoInactividad = setTimeout(cerrarSesionPorInactividad, 60000); // Aquí configurado a 60 segundos para prueba
    actualizarTiempoAcceso(); // Llama a la función para notificar al servidor
}

// Si expira el tiempo se redirige automáticamente al usuario a index.php
function cerrarSesionPorInactividad() {
    console.log('La sesión ha expirado por inactividad.'); // Depuración
    alert('Se ha cerrado la sesión por inactividad.');
    window.location.href = '../index.php'; // Cambia a la ruta de tu login
}

// Esta función se ejecuta una vez al principio y luego cada vez que se pique el ratón o se teclee
function actualizarTiempoAcceso() {
    fetch('../entradas/paginaentradas.php', {
        method: 'POST',
        body: JSON.stringify({ actualizar_tiempo: true })
    })
    .then(response => response.text())
    .then(data => { // Mostrar la respuesta del servidor (depuración)
        console.log(data);
    })
    .catch(error => { // Mostrar error en el servidor (depuración)
        console.error('Error:', error);
    });
}
