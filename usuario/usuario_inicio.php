<?php
session_start();

// Verifica si el usuario está autenticado y tiene el rol de usuario
if (!isset($_SESSION['loggedin']) || $_SESSION['rol'] !== 'usuario') {
    header("Location: login.php");
    exit();
}

// Obtén el nombre de usuario de la sesión
$nombre_usuario = $_SESSION['nombre_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Usuario</title>
    <link rel="stylesheet" href="../css/estilos-inicio.css">
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?>!</h1>
        <p>Esta es la página de inicio del usuario.</p>
        <a href="../logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
