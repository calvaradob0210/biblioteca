<?php
include('../db.php');

header('Content-Type: application/json');

$sql = "
    SELECT 
        l.id_libro, 
        l.titulo, 
        l.autor, 
        l.genero, 
        l.editorial, 
        l.stock, 
        l.disponibilidad, 
        l.imagen, 
        c.nombre_categoria 
    FROM libros l
    LEFT JOIN categorias c ON l.id_categoria = c.id_categoria
";
$result = $conn->query($sql);

$libros = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }
}

echo json_encode($libros);

$conn->close();
?>
