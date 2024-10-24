<header>

    <div class="div-header">
        <img class="icono" src="../img/logo.png" alt="logo" />
        <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>

        <div class="sesion">
            <a href="auth/login.php">Iniciar Sesion</a>
        </div>
    </div>


    <div class="div-header menu">
        <nav class="navbar">
            <div class="enlaces">
                <ul class="nav">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="">Nosotros</a>
                        <ul>
                            <li><a href="../nosotros.php">Mision-Vision</a></li>
                        </ul>
                    </li>
                    <li><a href="">Servicios en Linea</a>
                        <ul>
                            <li><a href="catalogo.php" target="_self">Catalogo en Linea</a></li>
                            <li><a href="database.php" target="_self">Base de Datos</a></li>
                        </ul>
                    </li>
                    <li><a href="repositorio.php">Repositorio Institucional</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="hero dibujo">

        <div class="mando-anterior diseño">
            <input type="button" id="anterior" value="<<">
        </div>
        <div class="mando-siguiente diseño">
            <input type="button" id="siguiente" value=">>"></center>
        </div>
        <img id="imagen" src="../img/libro1.jpg" />

    </div>


    <div class="div-header letra">
        <p>| BIBLIOTECA |</p>
    </div>

    <script type="text/javascript">
        var arrayimg = ["libro1.jpg", "unfvdibujo2_.jpg", "unfv2.jpg", "bibliotecavirtual.jpg"]
        var imgactual = 0;

        document.getElementById("anterior").addEventListener("click", cambiarImagen);
        document.getElementById("siguiente").addEventListener("click", cambiarImagen);

        function cambiarImagen() {
            var boton = this.id;

            if (boton = 'anterior') {
                imgactual--;
                if (imgactual < 0) {
                    imgactual = arrayimg.length - 1;
                }
            } else {
                imgactual++;
                if (imgactual == arrayimg.length) {
                    imgactual = 0;
                }
            }

            var imgMostrar = arrayimg[imgactual];

            document.getElementById('imagen').src = '../img/' + imgMostrar;
        }
    </script>
</header>