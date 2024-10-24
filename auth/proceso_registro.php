<?php
include('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
    $nombre_usuario = mysqli_real_escape_string($conn, $_POST['nombre_usuario']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    

    $sql_check = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' OR email = '$email'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "El nombre de usuario o el correo electrónico ya están en uso. <a href='registro.php'>Intenta de nuevo</a>";
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        

        $rol = 'usuario';
        

        $sql = "INSERT INTO usuarios (nombre, apellido, nombre_usuario, email, password, rol) 
                VALUES ('$nombre', '$apellido', '$nombre_usuario', '$email', '$hashed_password', '$rol')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. <a href='login.php'>Inicia sesión aquí</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
