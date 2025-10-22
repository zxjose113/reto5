<?php
// Con este comando guardamos el inicio de sesion del usuario 
// para al acceder a otra pestaña, no le devuelva al inicio
// session_start(); // Iniciar la sesión


$carpetaDestino = "csvclasificacion/";

// Verificar si el archivo fue enviado
if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] !== UPLOAD_ERR_OK) {
    die("Error en la subida: " . $_FILES['archivo']['error']);
}

$nombreArchivo = $_FILES['archivo']['name'];
$tipoArchivo = $_FILES['archivo']['type'];
$tamanoArchivo = $_FILES['archivo']['size'];
$nombreTemporal = $_FILES['archivo']['tmp_name'];

// Validar que el archivo sea CSV
$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
if (strtolower($extension) !== 'csv') {
    die("Error: Solo se permiten archivos CSV.");
}

// Verificar si el archivo temporal existe
if (!file_exists($nombreTemporal)) {
    die("Error: No se encontró el archivo temporal.");
}

// Crear la carpeta si no existe
if (!file_exists($carpetaDestino)) {
    if (!mkdir($carpetaDestino, 0777, true)) {
        die("Error: No se pudo crear la carpeta de destino.");
    }
}

// Definir la ruta de destino
$rutaDestino = $carpetaDestino . basename($nombreArchivo);

// Mover el archivo al directorio de destino
if (move_uploaded_file($nombreTemporal, $rutaDestino)) {
    echo "<script>
    alert('Archivo subido con éxito.');
    window.location= 'subidadatosclasificacion.html';
    </script>";
} else {
    die("Error al mover el archivo. Verifica permisos.");
}
?>
