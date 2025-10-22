<?php
/* Con el siguiente código PHP conseguimos que si un usuario
ha iniciado sesión en otra pestaña y carga esta página en otra
pestaña que se cargue la página privada1.php */
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ../entradas/paginaentradas.php');
    exit;
}
?>
