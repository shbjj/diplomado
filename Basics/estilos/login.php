<?php
$user = $_POST["user"];
$pass = $_POST["password"];

echo "Datos recibidos: user: $user, password: $pass <br/>";

$servername = "sql3.freemysqlhosting.net"; // URL del servidor
$username = "sql3703885"; // Nombre de usuario de la base de datos
$password = "5jEgD6PFhH"; // Contraseña de la base de datos
$database = "sql3703885"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para verificar si existe un registro en la tabla 'users'
$sql = " SELECT * FROM users WHERE user = '$user' AND password='$pass'; ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // El registro existe en la tabla 'users'
    echo "Login con '$user' correcto.";
} else {
    // El registro no existe en la tabla 'users'
    echo "Login con '$user' incorrecto.";
}

?>