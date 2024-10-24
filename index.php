<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar noticias (solo las 4 más recientes)
$sql = "SELECT id_noticia, nombre, contenido, imagen FROM noticias ORDER BY fecha_noticia DESC LIMIT 4";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biblioteca UNFV-FISS</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="css/estilos-footer.css">
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/estilo-inicio.css">
</head>

<body bgcolor="white">

    <header>
        <div class="div-header">
            <img class="icono" src="img/logo.png" alt="logo" />
            <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>

            <div class="sesion">
                <a href="auth/login.php">Iniciar Sesion</a>
            </div>
        </div>

        <div class="div-header menu">
            <nav class="navbar">
                <div class="enlaces">
                    <ul class="nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a>
                            <ul>
                                <li><a href="nosotros.php">Mision-Vision</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Servicios en Linea</a>
                            <ul>
                                <li><a href="servicios/catalogo.php" target="_self">Catalogo en Linea</a></li>
                                <li><a href="servicios/database.php" target="_self">Base de Datos</a></li>
                            </ul>
                        </li>
                        <li><a href="servicios/repositorio.php">Repositorio Institucional</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="hero dibujo">
            <div class="mando-anterior diseño">
                <input type="button" id="anterior" value="<<">
            </div>
            <div class="mando-siguiente diseño">
                <input type="button" id="siguiente" value=">>">
            </div>
            <img id="imagen" src="img/libro1.jpg" />
        </div>

        <div class="div-header letra">
            <p>| BIBLIOTECA |</p>
        </div>

        <script type="text/javascript">
            var arrayimg = ["libro1.jpg", "unfvdibujo2_.jpg", "unfv2.jpg", "bibliotecavirtual.jpg"];
            var imgactual = 0;

            document.getElementById("anterior").addEventListener("click", cambiarImagen);
            document.getElementById("siguiente").addEventListener("click", cambiarImagen);

            function cambiarImagen() {
                var boton = this.id;

                if (boton === 'anterior') {
                    imgactual--;
                    if (imgactual < 0) {
                        imgactual = arrayimg.length - 1;
                    }
                } else {
                    imgactual++;
                    if (imgactual === arrayimg.length) {
                        imgactual = 0;
                    }
                }

                var imgMostrar = arrayimg[imgactual];
                document.getElementById('imagen').src = 'img/' + imgMostrar;
            }
        </script>
    </header>

    <div class="noticias">
        <section class="contenido">
            <p><b>| NOTICIAS</b></p>

            <div class="lista-noticias">
                <?php
                if ($result->num_rows > 0) {
                    // Mostrar cada noticia
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="noti">';
                        echo '<div>';
                        echo '<img src="' . htmlspecialchars($row["imagen"]) . '" alt="noticia" />';
                        echo '</div>';
                        echo '<div class="nom-noticia">';
                        echo '<a href="detalle_noticia.php?id_noticia=' . htmlspecialchars($row["id_noticia"]) . '">' . htmlspecialchars($row["nombre"]) . '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No hay noticias disponibles.";
                }
                $conn->close();
                ?>
            </div>
        </section>

        <aside class="aside-apa">
            <div class="apa">
                <p>Citas y Referencias en APA</p>
            </div>
            <div class="dibujoapa">
                <a href="libros-pdf/apa.pdf" target="_blank"><img src="img/apa.jpg" alt="APA"></a>
            </div>
            <br><br>

            <div class="tutorial-titulo">
                <p>Tutorial</p>
            </div>
            <div class="tutorial-dibujo">
                <a href="manual/manual.pdf" target="_blank"> <img src="img/manual.png" alt="Manual"></a>
            </div>
        </aside>
    </div>

    <footer>
        <div class="container-footer-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Mas informacion de la biblioteca</h1>
                    <p>La Universidad Nacional Federico Villarreal (UNFV) se creó
                        como Universidad Autónoma el 30 de octubre de 1963,
                        mediante ley número 14692, promulgada por el gobierno
                        constitucional del presidente Fernando Belaunde Terry.</p></br>
                    <p>Reclamos</p>
                    <center><a href="reclamaciones/reclamos.php"><img src="../img/reclamo.png"></a></center>
                </div>

                <div class="colum2">
                    <h1>Redes Sociales</h1>
                    <div class="row">
                        <a href="https://www.facebook.com/UNFV.EDU" target="0">
                            <img src="../img/facebook.png">
                        </a>
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <a href="https://twitter.com/unfvoficial?lang=es" target="0">
                            <img src="../img/twitter.png">
                        </a>
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <a href="https://www.instagram.com/unfvoficial/?hl=es" target="0">
                            <img src="../img/instagram.png">
                        </a>
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
                        <a href="http://www.unfv.edu.pe/idiomas/" target="0">
                            <img src="../img/google-plus.png">
                        </a>
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="row">
                        <a href="https://www.pinterest.es/pin/649855421200234434/" target="0">
                            <img src="../img/pinterest.png">
                        </a>
                        <label>Siguenos en Pinteres</label>
                    </div>
                </div>

                <div class="colum3">
                    <h1>Informacion Contactos</h1>
                    <div class="row2">
                        <img src="../img/house.png">
                        <label>Jr. Carlos Gonzáles 285 Urb. Maranga - San Miguel</label>
                    </div>

                    <div class="row2">
                        <img src="../img/smartphone.png">
                        <label>(+51) 748 0888</label>
                    </div>

                    <div class="row2">
                        <img src="../img/contact.png">
                        <label>occii@unfv.edu.pe</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-footer">
            <div class="footer">
                <div class="copyright">
                    © 2021 Todos los Derechos Reservados | <a href="">Equipo 8</a>
                </div>

                <div class="information">
                    <a href="">Informacion Biblioteca</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
