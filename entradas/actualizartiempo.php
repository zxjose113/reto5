<?php
/* Con el siguiente código PHP hacemos que actualice de la ultima actividad de acceso */
session_start();
$_SESSION['ultimo_acceso'] = time();

?>
