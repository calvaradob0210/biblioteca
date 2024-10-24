<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Libros UNFV</title>
    <meta http-equiv="Content-Language" content="es"/>
    <meta name="Keywords" content="cabecera,unfv"/>
    <meta name="Description" content="Catálogo de libros UNFV"/>
    <meta name="Distribution" content="global"/>
    <meta name="Robots" content="all"/>
    <link rel="stylesheet" href="../css/estilo-header.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilo-clasificacion.css">
    <link rel="stylesheet" href="../css/estilos-footer.css">
</head>
<body>
    <header>
        <div class="div-header">
            <img class="icono" src="../img/logo.png" alt="logo"/>
            <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>
            <div class="sesion">
                <ul>
                    <a href="auth/login.php">Iniciar Sesión</a>
                </ul>
            </div>
        </div>
        <div class="div-header menu">
            <nav class="navbar">
                <div class="enlaces">
                    <ul class="nav">
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="">Nosotros</a>
                            <ul>
                                <li><a href="">Misión-Visión</a></li>
                            </ul>
                        </li>
                        <li><a href="">Servicios en Línea</a>
                            <ul>
                                <li><a href="../servicios/catalogo.php" target="_self">Catálogo en Línea</a></li>
                                <li><a href="../servicios/database.php">Base de Datos</a></li>
                            </ul>
                        </li>
                        <li><a href="../recursos/repositorio.php">Repositorio Institucional</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="div-header letra">
            <p>| BIBLIOTECA |</p>
        </div>
    </header>

    <section class="clasificacion-libro">
        <div class="centro">
            <table class="tabla" border="2" cellspacing="0">
                <tr>
                    <td>
                        <a href="detalle_libros.php?categoria=2" target="_self"><img class="img-libros" src="../img/libros/matematica.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=3" target="_self"><img class="img-libros" src="../img/libros/fisica.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=4" target="_self"><img class="img-libros" src="../img/libros/quimica.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=5" target="_self"><img class="img-libros" src="../img/libros/biologia.png" alt="libros"/>
                        <div class="escuela"><a href="" target="_blank">Ciencias Básicas</a></div></td>
                    <td>
                        <a href="detalle_libros.php?categoria=9" target="_self"><img class="img-libros" src="../img/libros/sistemas.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=10" target="_self"><img class="img-libros" src="../img/libros/industrial.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=11" target="_self"><img class="img-libros" src="../img/libros/agroindustrial.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=12" target="_self"><img class="img-libros" src="../img/libros/transportes.png" alt="libros"/>
                        <div class="escuela"><a href="" target="_blank">Ingenierías</a></div></td>
                </tr>
                <tr>
                    <td>
                        <a href="detalle_libros.php?categoria=6" target="_self"><img class="img-libros" src="../img/libros/administracion.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=7" target="_self"><img class="img-libros" src="../img/libros/economia.png" alt="libros"/></a>
                        <a href="detalle_libros.php?categoria=8" target="_self"><img class="img-libros" src="../img/libros/contabilidad.png" alt="libros"/></a>
                        <div class="escuela"><a href="" target="_blank">Ciencias Económicas y de Gestión</a></div></td>
                    <td>
                        <div class="escuela"><a href="" target="_blank">...</a></div></td>
                </tr>
            </table>
        </div>
    </section>

    <footer>
        <?php include "../layout/footer.php"; ?>
    </footer>
</body>
</html>
