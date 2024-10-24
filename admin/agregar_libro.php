<?php
include('../db.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$editorial = $_POST['editorial'];
$stock = intval($_POST['stock']);
$disponibilidad = $_POST['disponibilidad'];
$imagen = $_POST['imagen'];
$id_categoria = intval($_POST['id_categoria']);

$sql = "INSERT INTO libros (titulo, autor, genero, editorial, stock, disponibilidad, imagen, id_categoria) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssisis", $titulo, $autor, $genero, $editorial, $stock, $disponibilidad, $imagen, $id_categoria);

if ($stmt->execute()) {
    $_SESSION['alert'] = ['message' => "Libro agregado con éxito.", 'type' => 'success'];
} else {
    $_SESSION['alert'] = ['message' => "Error al agregar el libro: " . $stmt->error, 'type' => 'error'];
}

$stmt->close();
$conn->close();

header("Location: administrador_inicio.php");
exit();
?>
