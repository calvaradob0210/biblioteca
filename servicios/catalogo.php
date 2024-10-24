<!DOCTYPE html>
<html>

<head>
    <title>Catalogo en linea.</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="menu,enlaces" />
    <meta name="Description" content="menu enlaces. enlaces biblioteca" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="../css/estilo-inicio.css">
    <link rel="stylesheet" href="../css/estilo-header.css">
    <link rel="stylesheet" href="../css/catalogo.css">
    <link rel="stylesheet" href="../css/recomendado.css">
    <link rel="stylesheet" href="../css/estilos-footer.css">
</head>

<body bgcolor=white>

    <?php include "../layout/navbar.php"; ?>

    <div class="abc">

        <aside class="repertorio">
            <div class="aside-titulo">
                <p>Repertorio</p>
            </div>
            <div class="aside-contenedor">
                <div class="aside-libros">
                    <img src="../img/libro.png" alt="libros" /></br>
                    <a href="../repertorio/libros.php" >Libros</a>
                </div>
                <div class="aside-revistas">
                    <img src="../img/revista.png" alt="revistas" /></br>
                    <a href="../repertorio/revistas.php" >Revistas</a>
                </div>
            </div>
        </aside>

        <section class="contenedor">
            <div class="contenedor1">
                <div>
                    Buscar
                </div>
                <div class="barratext">
                    <form action="catalogo.php" method="post">
                        <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro" />
                        <input class="bus" type="submit" value="Buscar" />
                    </form>

                </div>

            </div>

            <div class="recomendado">
                <p>| Recomendados</p>
                <div class="libros">
                    <?php

                    include '../db.php';

                    if (isset($_POST['buscador'])) {
                        $busqueda = mysqli_real_escape_string($conn, $_POST['buscador']);
                        $query = "SELECT imagen, titulo, autor, genero, editorial, stock FROM libros WHERE titulo LIKE '%$busqueda%' OR autor LIKE '%$busqueda%' OR genero LIKE '%$busqueda%' OR editorial LIKE '%$busqueda%'";
                    } else {

                        $query = "SELECT imagen, titulo, autor, genero, editorial, stock FROM libros";
                    }

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="libro">';
                            echo '<div class="libro-imagen">';

                            echo '<img src="' . $row['imagen'] . '" alt="' . $row['titulo'] . '">';
                            echo '</div>';
                            echo '<div class="libro-info">';
                            echo '<h3>' . $row['titulo'] . '</h3>';
                            echo '<p><strong>Autor:</strong> ' . $row['autor'] . '</p>';
                            echo '<p><strong>Género:</strong> ' . $row['genero'] . '</p>';
                            echo '<p><strong>Editorial:</strong> ' . $row['editorial'] . '</p>';
                            echo '<p><strong>Stock:</strong> ' . $row['stock'] . '</p>';
                            echo '<a class="reservar-btn" href="../auth/login.php">Reservar</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No se encontraron resultados para tu búsqueda.</p>';
                    }


                    mysqli_close($conn);
                    ?>

                </div>
            </div>

        </section>
    </div>

    <footer>
        <?php include "../layout/footer.php"; ?>
    </footer>
</body>

</html>