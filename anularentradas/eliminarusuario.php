<?php
require("../conexion.php");

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];

    // Consulta para eliminar el usuario
    $borrarUsuario = "DELETE FROM entradas WHERE dni = '$dni'";
    $resultadoBorrarUsuario = mysqli_query($conexion, $borrarUsuario);

    if ($resultadoBorrarUsuario) {
        echo "<script>
                alert('El usuario ha sido anulado exitosamente');
                window.location = '../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al anular el usuario');
                window.location = 'anularentradas.php';
              </script>";
    }
}
?>
