<?php
require("../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dni = $_POST['username'];
    $contraseña = $_POST['password'];

    // Consulta para verificar el usuario
    $consultaUsuario = "SELECT * FROM entradas WHERE dni = '$dni'";
    $resultado = mysqli_query($conexion, $consultaUsuario);

    if ($usuario = mysqli_fetch_array($resultado)) {
        // Verificar la contraseña
        if (password_verify($contraseña, $usuario['contraseña'])) {
            // Mostrar una confirmación antes de eliminar el usuario completo, por seguridad se hace una nueva
            // pregunta al usuario
            echo "<script>
                    if (confirm('¿Estás seguro de que quieres eliminar el usuario?')) {
                        window.location.href = 'eliminarusuario.php?dni=$dni';
                    } else {
                        window.location.href = 'anularentradas.php';
                    }
                  </script>";
        } else {
            echo "<script>
                    alert('Contraseña incorrecta');
                    window.location = 'anularentradas.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Usuario no encontrado');
                window.location = 'anularentradas.php';
              </script>";
    }
}
?>
