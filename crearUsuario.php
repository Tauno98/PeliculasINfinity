<?php
// Recoge los datos del formulario de registro
$usuario=$_POST['user'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validar la información del usuario
if (empty($nombre) || empty($email) || empty($password)) {
    // Si hay campos vacíos, mostrar un mensaje de error y detener el proceso
    echo "Por favor complete todos los campos";
    exit;
}

// Crear una conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar si hay errores en la conexión a la base de datos
if ($conn->connect_error) {
    die("Error al conectarse a la base de datos: " . $conn->connect_error);
}

// Insertar los datos del usuario en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario creado exitosamente";
} else {
    echo "Error al crear el usuario: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
