<?php
session_start();
include '../conexion.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM entradas WHERE dni = ?";
$preparoConsulta = $conexion->prepare($sql);
$preparoConsulta->bind_param("s", $username);
$preparoConsulta->execute();
$resultado = $preparoConsulta->get_result();

if ($resultado->num_rows === 1) { 
    $row = $resultado->fetch_assoc();
    // Cogemos de la bbdd, el hash del usuario y lo guardamos
    $hashAlmacenado = $row['contraseña'];
    if (password_verify($password, $hashAlmacenado)) {
        $_SESSION['sessionId'] = session_id();
        $_SESSION['username'] = $username;
        $_SESSION['dni'] = $row['dni'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['cantidad'] = $row['cantidad'];
        $_SESSION['tipo'] = $row['tipo']; // Tipo, si es Adulto o Infantil
        header("Location: ../entradas/paginaentradas.php");
        exit; 
    } else { // Contraseña incorrecta
        echo "<script>
            alert('Contraseña incorrecta');
            window.location = '../soloacceso/acceso.php';
        </script>";
        exit;
    }
} else { // Usuario no encontrado
    echo "<script>
        alert('Usuario incorrecto');
        window.location = '../soloacceso/acceso.php';
    </script>";
    exit;
}

// Cerrar la consulta y la conexión
$preparoConsulta->close();
$conexion->close();
?>
