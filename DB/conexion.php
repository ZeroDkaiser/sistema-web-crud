<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Host de la base de datos (usualmente localhost)
$usuario = "root";   // Nombre de usuario de MySQL (por defecto es 'root')
$password = "";      // Contraseña de MySQL (por defecto está vacía)
$base_datos = "registro"; // Nombre de la base de datos que has creado

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión a la base de datos falló: " . $conexion->connect_error);
}


?>
