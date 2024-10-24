<?php
include('../db.php');

$id_libro = intval($_GET['id']);

$sql = "DELETE FROM libros WHERE id_libro = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_libro);

if ($stmt->execute()) {
    echo 'success';
} else {
    echo 'error';
}

$stmt->close();
$conn->close();
?>
