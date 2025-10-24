<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: entradas/paginaentradas.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web Fórmula 1 grupo5</title>
    <link rel="stylesheet" href="../reto5/index.css">
</head>
<body>

    <!--Caja de los menús-->
    <div class="head">
        <!--Contenido del logo principal-->
        <div class="logo">
            <a href="index.php">
                <img id="logo1" src="../reto5/imagenes/Logo_Blanco_F1Bilbao_grupo5_Fondo_v2 (1).png" alt="Logo" width="110px" height="110px">
            </a>
        </div>
        <!--Caja de los menús-->
        <div class="menu">
            <ul>
                <li>
                    <a>La carrera</a>
                    <ul class="submenu">
                        <li><a href="clasificacion/clasificacion.php">Clasificacion</a></li>
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
                    <li><a href="solocarreras/solocarreras.html">Solo Carreras</a></li>
                    <li><a href="soloacceso/acceso.php">Solo Acceso</a></li>
                    <li><a href="anularentradas/anularentradas.php"> Anular Entrada</a> </li>
                </ul>
                </li>
                <li><a href="sorteo/sorteo.html">Sorteos</a></li>
                <li><a href="contacto/contacto.html">Contacto</a></li>
            </ul>
        </div> 
    </div>

</body>
</html>

</body>
</html>



    <!--dos cajas de apartados en diferente pocisionamientos-->
    <div class="content">


        <div class="left-content">
            <!-- Aquí irá el contenido que agregarás más tarde -->
            <!--imagen de top alargada-->
            <div class="imagentop1">
                <img src="../reto5/imagenes/carrera/carrera_formula1.jpg" alt="formula1">
            </div>
            <!--contenedor de resumentexto y pista-->
            <div class="contenedor-resumen-pista">
                
                <!--caja de texto resumen-->
                <div class="resumentexto">
                    <p class="texto1">La ciudad de Bilbao se llena de la emoción y adrenalina de la Fórmula 1, 
                        el deporte motor más espectacular del mundo. Aquí, los aficionados podrán sumergirse 
                        en el fascinante universo de la competición, donde velocidad, tecnología, estrategia y 
                        talento se fusionan en cada vuelta. En esta página, encontrarás toda la información sobre 
                        la temporada, desde los resultados de las carreras hasta las noticias más recientes sobre 
                        los pilotos, equipos y los grandes premios que definen el destino del campeonato mundial.
                        <br><br>
                        Si eres un apasionado de la velocidad, el ingenio y la emoción de la Fórmula 1, este es tu lugar. 
                        Acompáñanos en este viaje lleno de emoción y descubre cada detalle del campeonato, la historia detrás 
                        de cada equipo y piloto, y lo que está en juego en cada gran premio.</p>
                </div>

                <!--caja del gif de la pista-->
                <div class="pista">
                    <img src="../reto5/imagenes/carrera/Carrera_F1_GIF.gif" alt="pistacarrera">
                </div>

            </div>
            <!--caja del coche f1-->
            <div class="coche_f1">
                <img src="../reto5/imagenes/carrera/coche_f1 (1).jpg" alt="coche1">
            </div>
            <!--MENSAJE DE MR ROBOT-->
            <div class="mensaje">
                <p class="texto2">"LA F1 SE COMPROMETE A COLABORAR CON EL GRUPO 'MR-ROBOT' PARA COMPROMETERNOS A QUE EN UN FUTURO 
                    PRÓXIMO, ELIMINE LAS CARRERAS CON EL MOTOR DE COMBUSTIÓN EN FAVOR DE LOS MOTORES HÍBRIDOS Y 
                    POSTERIORMENTE MOTORES ELÉCTRICOS"
                    </p>
            </div>
        </div>

        <!--Caja de la derecha-->
        <div class="right-content">
            <!--caja de los titulos de las imagenes-->
            <div class="titulos-imagen">
                <h1 id="Titulos">Red Bull en la pista</h1>
            </div>
            <!-- Aquí irá el bloque para el evento de pasar imágenes -->
            <div id="carrusel">
                <img id="imagenescarrusel" src="../reto5/imagenes/carrusel/1.jpg" alt="carrusel_imagenes">
            </div>
            <!--caja de los link a la pagina oficial y link de descarga-->  
              <div class="oficial-descarga">
                    <div class="paginaoficial">
                        <a class="oficial" href="https://www.formula1.com/" target="_blank">Pagina oficial</a>
                    </div>
                    <div class="descarganormativas">
                        <a href="../reto5/imagenes/Norvativas/Norvativas_Formula1.pdf" download="Norvativas.pdf">Normativas de formula1</a>
                        <p class="sha">sha256: D543DF19E4A12B9407500BF19A1850FAA<br>F70A067C9B0CAE4FD93D45EC65C49FF</p>
                    </div>
              </div> 
        </div>

    </div>

    <!--Aqui son los logos de los sponsors-->
    <!--Primera linea-->
    <div class="footer" id="caja">
        <div class="sponsors">
            <a href="https://www.rolex.com"target="_blank"><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/rolex.png"  alt="Rolex"></a>
            <a href="https://www.pirelli.com"target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/pirelli.png" alt="Pirelli"></a>
            <a href="https://www.aramco.com"target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/aramco.png" alt="Aramco"></a>
            <a href="https://www.heineken.com" target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/Heineken - Outlined.png"alt="Heineken"></a>
            <a href="https://www.dhl.com" target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/dhl.png"alt="DHL"></a>
            <a href="https://www.qatarairways.com" target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/qatar.png"alt="Qatar"></a>
            <a href="https://aws.amazon.com" target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/AWS GLOBAL.png"alt="AWS"></a>
            <a href="https://www.crypto.com"target="_blank" ><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/crypto (1).png" alt="Crypto"></a>
            <a href="https://www.msc.com"target="_blank" alt="MSC"><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/msc.png" ></a>
            <a href="https://www.salesforce.com"target="_blank"><img class="imagenes1" src="../reto5/imagenes/PrimeraLinea/salesforce.png"  alt="SalesForce"></a>
        </div>
        <hr>
        <!--Segunda linea -->
        <div class="sponsors">
            <a href="https://www.lasvegas.com"target="_blank"><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/las vegas.png"  alt="Las Vegas"></a>
            <a href="https://www.paramount.com"target="_blank" ><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/Paramount+.png" alt="Paramount"></a>
            <a href="https://www.lenovo.com"target="_blank" ><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/lenovo.png" alt="Lenovo"></a>
            <a href="https://www.ferraritrento.it"target="_blank"><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/ferrari-trento.png"  alt="Ferrari"></a>
            <a href="https://www.liqui-moly.com"target="_blank" ><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/liqui-moly.png" alt="Liqui Moly"></a>
            <a href="https://www.globant.com"target="_blank"><img class="imagenes2" src="../reto5/imagenes/SegundaLinea/globant.png"  alt="Globant"></a>
        </div>
        <hr>
        <!--Tercera linea -->
        <div class="sponsors">
            <a href="https://www.americanexpress.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/Amex.png"  alt="American Express"></a>
            <a href="https://www.workday.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/Workday.png"  alt="Workday"></a>
            <a href="https://www.bbs.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/BBS.png"  alt="BBS"></a>
            <a href="https://www.tata.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/TATA.png"  alt="TATA"></a>
            <a href="https://www.aggreko.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/aggreko.png"  alt="Aggreko"></a>
            <a href="https://www.188bet.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/188.png"  alt="188bet"></a>
            <a href="https://www.puma.com"target="_blank" ><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/puma.png" alt="Puma"></a>
            <a href="https://www.mcdonalds.com"target="_blank"><img class="imagenes3" src="../reto5/imagenes/TerceraLinea/mcdonalds.png"  alt="McDonald's"></a>
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
                <a href="https://www.facebook.com/Formula1"target="_blank"><img src="../reto5/imagenes/redesSociales/facebook.png"  alt="facebook"></a>
                <a href="https://x.com/f1?mx=2"target="_blank"><img src="../reto5/imagenes/redesSociales/x.png"  alt="Twitter"></a>
                <a href="https://www.instagram.com/f1/"target="_blank"><img src="../reto5/imagenes/redesSociales/instagram.png"  alt="Instagram"></a>
                <a href="https://www.youtube.com/F1"target="_blank"><img src="../reto5/imagenes/redesSociales/youtube.png"  alt="YouTube"></a>
            </div>

            
            <!--logo principal en el centro-->
            <div id="logodebajo">
                <a href="index.php"><img src="../reto5/imagenes/Logo_Blanco_F1Bilbao_grupo5_Fondo_v2 (1).png" alt="logo"> </a>
            </div>
            <div class="minifirma">
                <p>© 2003-2024 Formula One World Championship Limited</p>
            </div>
            
        </div>

    </div>
    <script src="/reto5/index.js"></script>
 
</body>
</html>