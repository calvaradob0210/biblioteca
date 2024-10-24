<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$id_noticia = isset($_GET['id_noticia']) ? intval($_GET['id_noticia']) : 0;


$sql = "SELECT nombre, contenido, imagen, fecha_noticia FROM noticias WHERE id_noticia = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_noticia);
$stmt->execute();
$result = $stmt->get_result();

$noticia = $result->fetch_assoc();

if (!$noticia) {
    echo "Noticia no encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detalle Noticia</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="detalle, noticia" />
    <meta name="Description" content="Detalle de la noticia" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="css/estilos-footer.css">
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/estilo-inicio.css">
    <link rel="stylesheet" href="css/detalle_noticia.css">
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
                        <li><a href="#">Nosotros</a>
                            <ul>
                                <li><a href="nosotros/misionyvision.php">Mision-Vision</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Servicios en Linea</a>
                            <ul>
                                <li><a href="servicios/catalogo.php" target="_self">Catalogo en Linea</a></li>
                                <li><a href="servicios/database.php" target="_self">Base de Datos</a></li>
                            </ul>
                        </li>
                        <li><a href="recursos/repositorio.php">Repositorio Institucional</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="noticia-detalle">
        <h1><?php echo htmlspecialchars($noticia['nombre']); ?></h1>
        <img src="<?php echo htmlspecialchars($noticia['imagen']); ?>" alt="noticia" />
        <p><?php echo nl2br(htmlspecialchars($noticia['contenido'])); ?></p>
        <p><small>Fecha: <?php echo htmlspecialchars($noticia['fecha_noticia']); ?></small></p>
        <a href="index.php">Regresar</a>
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
