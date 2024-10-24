<?php

include '../db.php'; 


$buscador = isset($_GET['buscador']) ? mysqli_real_escape_string($conn, $_GET['buscador']) : '';
$area = isset($_GET['seleccione']) ? mysqli_real_escape_string($conn, $_GET['seleccione']) : '';
$orden = isset($_GET['orden']) ? $_GET['orden'] : 'a-z';


$query = "SELECT titulo, imagen, contenido, area, enlace FROM bases_datos WHERE 1=1";

if ($buscador) {
    $query .= " AND (titulo LIKE '%$buscador%' OR contenido LIKE '%$buscador%')";
}

if ($area) {
    $query .= " AND area = '$area'";
}

if ($orden == 'a-z') {
    $query .= " ORDER BY titulo ASC";
} else {
    $query .= " ORDER BY titulo DESC";
}

$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="articulo">';
        echo '<div>';
        echo '<h3>' . htmlspecialchars($row['titulo']) . '</h3><br>';
        echo '<img src="' . htmlspecialchars($row['imagen']) . '" alt="' . htmlspecialchars($row['titulo']) . '" width="200"/>';
        echo '<p>' . htmlspecialchars($row['contenido']) . '<br>';
        echo '<b>Áreas:</b> ' . htmlspecialchars($row['area']) . '<br>';
        echo '<a class="color" href="' . htmlspecialchars($row['enlace']) . '" target="_blank">Acceder</a></p>';
        echo '</div>';
        echo '</li><br><br>';
    }
} else {
    echo '<li class="articulo">No hay datos disponibles.</li>';
}
?>

