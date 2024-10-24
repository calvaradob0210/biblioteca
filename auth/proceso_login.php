<?php
session_start();
include('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre_usuario = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id_usuario, nombre_usuario, password, rol FROM usuarios WHERE nombre_usuario = '$nombre_usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {

            $_SESSION['loggedin'] = true;
            $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
            $_SESSION['rol'] = $row['rol'];


            if ($row['rol'] === 'administrador') {
                header("Location: ../admin/administrador_inicio.php");
            } else {
                header("Location: ../usuario/usuario_inicio.php");
            }
            exit();
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    } else {
        echo "Usuario o contraseña incorrectos";
    }
} else {
    header("Location: login.php");
    exit();
}

$conn->close();
?>
