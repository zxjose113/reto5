<?php
// Activar reporte de errores en PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

require("../conexion.php");

// Verificar que todos los datos han sido enviados por POST
if (!isset($_POST['dni'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['contraseña'], $_POST['contraseña2'], $_POST['cantidad'], $_POST['precio'], $_POST['tipo'])) {
    die("Error: Faltan datos en el formulario.");
}

// Capturar datos del formulario
$dni = trim($_POST['dni']);
$nombre = trim($_POST['nombre']);
$apellidos = trim($_POST['apellidos']);
$email = trim($_POST['email']);
$contraseña = $_POST['contraseña'];
$password_confirm = $_POST['contraseña2'];
$cantidad = (int) $_POST['cantidad'];
$precio = (float) $_POST['precio'];
$tipo = trim($_POST['tipo']);

// Verificar si la confirmación de la contraseña coincide
if ($contraseña !== $password_confirm) {
    echo "<script>alert('Las contraseñas no coinciden');
                window.location = '../solocarreras/solocarreras.html'</script>";
    exit();
}

// Encriptar la contraseña
$clavehash = password_hash($contraseña, PASSWORD_DEFAULT);

// Comprobar si la conexión fue exitosa
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta para no permitir usuarios repetidos
$consultaTodos = "SELECT dni FROM entradas WHERE dni = ?";
$stmt = $conexion->prepare($consultaTodos);
$stmt->bind_param("s", $dni);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<script>alert('Este usuario ya existe, prueba a acceder a él');
                window.location = '../solocarreras/solocarreras.html'</script>";
    $stmt->close();
    exit();
}
$stmt->close();

// Insertar los datos con consulta preparada
$consultaInsertar = "INSERT INTO entradas (dni, nombre, apellidos, email, contraseña, cantidad, precio, tipo) 
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($consultaInsertar);
$stmt->bind_param("sssssdss", $dni, $nombre, $apellidos, $email, $clavehash, $cantidad, $precio, $tipo);

if ($stmt->execute()) {
    echo "<script>alert('Se ha registrado el usuario con éxito');
                window.location='../index.php'</script>";
} else {
    echo "<script>alert('No se ha podido registrar el usuario: " . $stmt->error . "');
                window.location='../solocarreras/solocarreras.html'</script>";
}

$stmt->close();
mysqli_close($conexion);
?>
