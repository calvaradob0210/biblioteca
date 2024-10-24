<!DOCTYPE html>
<html>

<head>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'biblioteca');
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $categoria_id = isset($_GET['categoria']) ? intval($_GET['categoria']) : 0;


    $sql_genre = "SELECT nombre_categoria FROM categorias WHERE id_categoria = ?";
    $stmt_genre = $conn->prepare($sql_genre);
    $stmt_genre->bind_param('i', $categoria_id);
    $stmt_genre->execute();
    $result_genre = $stmt_genre->get_result();


    $nombre_genero = 'Categoría Desconocida';

    if ($result_genre->num_rows > 0) {
        $row_genre = $result_genre->fetch_assoc();
        $nombre_genero = $row_genre['nombre_categoria'];
    }


    $stmt_genre->close();
    $conn->close();
    ?>

    <title>Libros - <?php echo htmlspecialchars($nombre_genero); ?></title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilo-header.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/catalogo.css">
    <link rel="stylesheet" href="../css/libros-sistema.css">
    <link rel="stylesheet" href="../css/recomendado.css">
    <link rel="stylesheet" href="../css/estilos-footer.css">
</head>

<body>

    <header>
        <div class="div-header">
            <img class="icono" src="../img/logo.png" alt="logo" />
            <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>

            <div class="sesion">
                <ul>
                    <a href="">Iniciar Sesión</a>
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
                                <li><a href="../nosotros/misionyvision.php">Misión-Vision</a></li>
                            </ul>
                        </li>
                        <li><a href="">Servicios en Línea</a>
                            <ul>
                                <li><a href="../servicios/catalogo.php" target="_self">Catálogo en Línea</a></li>
                                <li><a href="../servicios/basedatos.php">Base de Datos</a></li>
                            </ul>
                        </li>
                        <li><a href="../recursos/repositorio.php">Repositorio Institucional</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="div-header letra">
            <p>| LIBROS - <?php echo htmlspecialchars($nombre_genero); ?> |</p>
        </div>
    </header>

    <div class="abc">

        <aside class="repertorio">
            <div class="aside-titulo">
                <p>Filtrar Búsqueda</p>
            </div>

            <div class="aside-contenedor">
                <div class="aside-filtros">
                    </br>
                    <p><b>Autor</b></p>
                    <input id="filtroAutor" type="text" name="tema" placeholder="Autor" onkeyup="filtrarLibros()" />
                </div>
                <div class="aside-filtros">
                    </br>
                    <p><b>Editorial</b></p>
                    <input type="text" id="filtroEditorial" name="año1" placeholder="Editorial" onkeyup="filtrarLibros()" />
                </div>
            </div>
        </aside>

        <section class="contenedor">
            <div class="contenedor1">
                <div>
                    Buscar
                </div>

                <div></div>

                <div class="barratext">
                    <form id="searchForm" onsubmit="return buscarLibros()">
                        <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro" />
                        <input class="bus" type="submit" value="Buscar" />
                    </form>
                </div>
            </div>

            <div class="recomendado">
                <p>| LIBROS</p>
                <ul id="listaArticulos">
                    <?php

                    $conn = new mysqli('localhost', 'root', '', 'biblioteca');
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }


                    $sql = "SELECT * FROM libros WHERE id_categoria = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('i', $categoria_id);
                    $stmt->execute();
                    $result = $stmt->get_result();


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<li class="articulo">';
                            echo '<div align="left" class="libro">';
                            echo '<div class="libro-imagen">';
                            echo '<img src="' . $row['imagen'] . '" alt="' . $row['titulo'] . '"/>';
                            echo '</div>';
                            echo '<div class="libro-detalles">';
                            echo '<h3 class="libro-titulo">' . $row['titulo'] . '</h3>';
                            echo '<p class="libro-autor"><strong>Autor:</strong> ' . $row['autor'] . '</p>';
                            echo '<p class="libro-genero"><strong>Género:</strong> ' . $row['genero'] . '</p>';
                            echo '<p class="libro-editorial"><strong>Editorial:</strong> ' . $row['editorial'] . '</p>';
                            echo '<p class="libro-stock"><strong>Stock:</strong> ' . $row['stock'] . '</p>';
                            echo '<a class="reservar-btn" href="../auth/login.php">Reservar</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</li>';
                        }
                    } else {
                        echo "<p class='no-libros'>No hay libros disponibles en esta categoría.</p>";
                    }


                    $stmt->close();
                    $conn->close();
                    ?>
                </ul>
            </div>

        </section>
    </div>

    <script>
        function filtrarLibros() {
            const inputAutor = document.getElementById('filtroAutor').value.toLowerCase();
            const inputEditorial = document.getElementById('filtroEditorial').value.toLowerCase();
            const listaArticulos = document.getElementById('listaArticulos');
            const articulos = listaArticulos.getElementsByClassName('articulo');

            for (let i = 0; i < articulos.length; i++) {
                const titulo = articulos[i].querySelector('.libro-titulo').textContent.toLowerCase();
                const autor = articulos[i].querySelector('.libro-autor').textContent.toLowerCase();
                const editorial = articulos[i].querySelector('.libro-editorial').textContent.toLowerCase();

                if (autor.includes(inputAutor) && editorial.includes(inputEditorial)) {
                    articulos[i].style.display = '';
                } else {
                    articulos[i].style.display = 'none';
                }
            }
        }
    </script>
    <script>
        function buscarLibros() {
        const searchTerm = document.getElementById('buscador').value.toLowerCase();
        const searchType = document.querySelector('select[name="seleccione"]').value.toLowerCase();
        const listaArticulos = document.getElementById('listaArticulos');
        const articulos = listaArticulos.getElementsByClassName('articulo');

        for (let i = 0; i < articulos.length; i++) {
            let searchContent = '';
            switch (searchType) {
                case 'título':
                    searchContent = articulos[i].querySelector('.libro-titulo').textContent.toLowerCase();
                    break;
                case 'autor':
                    searchContent = articulos[i].querySelector('.libro-autor').textContent.toLowerCase();
                    break;
                case 'tema':
                    searchContent = articulos[i].querySelector('.libro-genero').textContent.toLowerCase();
                    break;
                case 'isbn':

                    searchContent = articulos[i].querySelector('.libro-isbn') ? 
                        articulos[i].querySelector('.libro-isbn').textContent.toLowerCase() : '';
                    break;
            }

            if (searchContent.includes(searchTerm)) {
                articulos[i].style.display = '';
            } else {
                articulos[i].style.display = 'none';
            }
        }

        return false; 
    }
    </script>
    <footer>
        <?php include "../layout/footer.php"; ?>
    </footer>
</body>

</html>