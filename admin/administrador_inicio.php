<?php
session_start();
include('../db.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'administrador') {
    header("Location: login.php");
    exit();
}

$nombre_usuario = $_SESSION['nombre_usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Administrador</title>
    <link rel="stylesheet" href="../css/estilos-inicio.css">
</head>

<body>
    <div class="welcome-container">
        <h1>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?>!</h1>
        <p>Esta es la página de inicio del administrador.</p>
        <?php include('libros_admin.php'); ?>
        <a href="../logout.php">Cerrar sesión</a>
    </div>
</body>

</html>