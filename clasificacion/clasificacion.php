<!-- Pagina -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESO</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="../soloacceso/acceso.css">
    <link rel="stylesheet" href="clasificacion.css">
</head>
<body>
 <!--Caja de los menus-->
 <div class="head">
    <!--Contenido del logo principal-->
    <div class="logo">
        <a href="../index.php">
            <img id="logo1" src="../imagenes/Logo_Blanco_F1Bilbao_grupo5_Fondo_v2 (1).png" alt="Logo" width="110px" height="110px">
        </a>
    </div>
    <!--caja de los menus-->
    <div class="menu">
        <ul>
            <li>
                <a>La carrera</a>
                <ul class="submenu">
                    <li><a href="../clasificacion/clasificacion.php">Clasificacion</a></li>
                    <li><a href="#">Circuito</a></li>
                    <li><a href="#">Escuderías</a></li>
                    <li><a href="#">Horarios</a></li>
                </ul>
            </li>
            <li>
                <a>Bilbao</a>
                <ul class="submenu">
                    <li><a href="#">Visítanos</a></li>
                    <li><a href="#">Gastronomía</a></li>
                    <li><a href="#">Alojamiento</a></li>
                </ul>
            </li>
            <li>
            <a>Entradas</a>
                <ul class="submenu">
                    <li><a href="../solocarreras/solocarreras.html">Solo Carreras</a></li>
                    <li><a href="../soloacceso/acceso.php">Solo Acceso</a></li>
                    <li><a href="../anularentradas/anularentradas.php"> Anular Entrada</a> </li>
                </ul>
            </li>
            <li><a href="../sorteo/sorteo.html">Sorteos</a></li>
            <li><a href="../contacto/contacto.html">Contacto</a></li>
        </ul>
    </div> 
</div>

    <!--------------------------------------------------------------------------------->
 <?php

// Ruta completa del archivo
$rutaCompleta = "../csvclasificacion/clasificacion.csv";

// Abrimos el archivo para lectura
$archivoCSV = fopen($rutaCompleta, "r");

echo "<br><h1 class='text-center font-weight' style='font-weight: bold;'>DATOS DE LA CLASIFICACION: </h1><br>";

// Contenedor para la tabla
echo "<div class='container'>";
echo "<div class='row justify-content-center'>"; // Centrar la tabla horizontalmente
echo "<div class='col-md-8'>"; // Ajustar el ancho de la tabla en pantallas medianas y mayores
echo "<table class='table table-bordered table-striped mx-auto tabla-redondeada' style='width: 100%; border-collapse: separate; border-spacing: 0;'>"; // Ancho completo dentro del contenedor, con border-collapse y border-spacing

// Leer la primera fila (encabezado) y darle formato
$primeraFila = fgetcsv($archivoCSV, 1000, ";");
if ($primeraFila !== false) {
    echo "<tr style='font-weight: bold; text-transform: uppercase; font-size: 20px; text-align: center;'>";
    foreach ($primeraFila as $key => $value) {
        echo "<td>" . $value . "</td>"; // Imprimimos cada valor o campo del encabezado
    }
    echo "</tr>"; // Salto de línea después del encabezado
}

// Ahora, las siguientes filas (de datos) sin formato
while (($arrayLinea = fgetcsv($archivoCSV, 1000, ";")) != false) {
    echo "<tr>";
    foreach ($arrayLinea as $key => $value) {
        echo "<td>" . $value . "</td>"; // Imprimimos cada valor o campo
    }
    echo "</tr>"; // Salto de línea cada vez que pasamos a otra línea
}

echo "</table>";
echo "</div>"; // Cierra el div de la columna
echo "</div>"; // Cierra el div de la fila
echo "</div>"; // Cierra el contenedor

fclose($archivoCSV); // Cerramos el archivo

?>
    <!--------------------------------------------------------------------------------->
    <br>
    <br>
    <!--Aqui son los logos de los sponsors-->
    <!--Primera linea-->
    <div class="footer" id="caja">
        <div class="sponsors">
            <a href="https://www.rolex.com"target="_blank"><img class="imagenes1" src="../imagenes/PrimeraLinea/rolex.png"  alt="Rolex"></a>
            <a href="https://www.pirelli.com"target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/pirelli.png" alt="Pirelli"></a>
            <a href="https://www.aramco.com"target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/aramco.png" alt="Aramco"></a>
            <a href="https://www.heineken.com" target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/Heineken - Outlined.png"alt="Heineken"></a>
            <a href="https://www.dhl.com" target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/dhl.png"alt="DHL"></a>
            <a href="https://www.qatarairways.com" target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/qatar.png"alt="Qatar"></a>
            <a href="https://aws.amazon.com" target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/AWS GLOBAL.png"alt="AWS"></a>
            <a href="https://www.crypto.com"target="_blank" ><img class="imagenes1" src="../imagenes/PrimeraLinea/crypto (1).png" alt="Crypto"></a>
            <a href="https://www.msc.com"target="_blank" alt="MSC"><img class="imagenes1" src="../imagenes/PrimeraLinea/msc.png" alt="MSC" ></a>
            <a href="https://www.salesforce.com"target="_blank"><img class="imagenes1" src="../imagenes/PrimeraLinea/salesforce.png"  alt="SalesForce"></a>
        </div>
        <hr>
        <!--Segunda linea -->
        <div class="sponsors">
            <a href="https://www.lasvegas.com"target="_blank"><img class="imagenes2" src="../imagenes/SegundaLinea/las vegas.png"  alt="Las Vegas"></a>
            <a href="https://www.paramount.com"target="_blank" ><img class="imagenes2" src="../imagenes/SegundaLinea/Paramount+.png" alt="Paramount"></a>
            <a href="https://www.lenovo.com"target="_blank" ><img class="imagenes2" src="../imagenes/SegundaLinea/lenovo.png" alt="Lenovo"></a>
            <a href="https://www.ferraritrento.it"target="_blank"><img class="imagenes2" src="../imagenes/SegundaLinea/ferrari-trento.png"  alt="Ferrari"></a>
            <a href="https://www.liqui-moly.com"target="_blank" ><img class="imagenes2" src="../imagenes/SegundaLinea/liqui-moly.png" alt="Liqui Moly"></a>
            <a href="https://www.globant.com"target="_blank"><img class="imagenes2" src="../imagenes/SegundaLinea/globant.png"  alt="Globant"></a>
        </div>
        <hr>
        <!--Tercera linea -->
        <div class="sponsors">
            <a href="https://www.americanexpress.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/Amex.png"  alt="American Express"></a>
            <a href="https://www.workday.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/Workday.png"  alt="Workday"></a>
            <a href="https://www.bbs.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/BBS.png"  alt="BBS"></a>
            <a href="https://www.tata.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/TATA.png"  alt="TATA"></a>
            <a href="https://www.aggreko.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/aggreko.png"  alt="Aggreko"></a>
            <a href="https://www.188bet.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/188.png"  alt="188bet"></a>
            <a href="https://www.puma.com"target="_blank" ><img class="imagenes3" src="../imagenes/TerceraLinea/puma.png" alt="Puma"></a>
            <a href="https://www.mcdonalds.com"target="_blank"><img class="imagenes3" src="../imagenes/TerceraLinea/mcdonalds.png"  alt="McDonald's"></a>
        </div>
        <hr>

        <!--Caja del contenido del pie de la pagina-->
        <div id="finalpagina">

            <!--caja de las politicas, terminos y condiciones-->    
            <div class="cajaPoliticas">
                <a href="https://account.formula1.com/#/en/privacy-policy" target="_blank">Políticas de privacidad</a>
            
                <a href="https://account.formula1.com/#/en/cookie-policy/" target="_blank">Políticas de cookies</a>
            </div>


            <!--caja de los logos con link a las redes sociales de la formula1-->
            <div id="cajaSociales">
                <a href="https://www.facebook.com/Formula1"target="_blank"><img src="../imagenes/redesSociales/facebook.png"  alt="facebook"></a>
                <a href="https://x.com/f1?mx=2"target="_blank"><img src="../imagenes/redesSociales/x.png"  alt="Twitter"></a>
                <a href="https://www.instagram.com/f1/"target="_blank"><img src="../imagenes/redesSociales/instagram.png"  alt="Instagram"></a>
                <a href="https://www.youtube.com/F1"target="_blank"><img src="../imagenes/redesSociales/youtube.png"  alt="YouTube"></a>
            </div>

            
            <!--logo principal en el centro-->
            <div id="logodebajo">
                <a href="/index.php"><img src="../imagenes/Logo_Blanco_F1Bilbao_grupo5_Fondo_v2 (1).png" alt="logo"> </a>
            </div>
            <div class="minifirma">
                <p>© 2003-2024 Formula One World Championship Limited</p>
            </div>
            
        </div>

    </div>
    <script src="../soloacceso/acceso.js"></script>
</body>
</html>