<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "<script>
            alert('Inicio de sesión exitoso');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Contraseña incorrecta');
            window.location.href = 'login.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Correo no registrado');
        window.location.href = 'login.php';
    </script>";
}

$stmt->close();
$conn->close();
?>
