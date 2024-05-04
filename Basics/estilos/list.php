<?php
//Datos de conexion
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
// Consulta SQL 
$sql = " SELECT id, user, password FROM users; ";
//Ejecutar consulta
$resultados = $conn->query($sql);

if ( $resultados->num_rows > 0 ){
    //Convertir los resultados en un array
    $rows = $resultados->fetch_all(MYSQLI_ASSOC);

    foreach( $rows as $row){
        echo "ID: " . $row["id"] ." User: " . $row["user"] . ", Contraseña: " . $row["password"] . "<br/>";
    }
}

$conn->close();

?>