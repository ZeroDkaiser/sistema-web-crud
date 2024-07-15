<?php
// Incluir archivo de conexión
include 'conexion.php';

// Verificar si se han enviado datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y sanitizarlos
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellidoPaterno = htmlspecialchars($_POST["apellidoMaterno"]);
    $apellidoMaterno = htmlspecialchars($_POST["apellidoPaterno"]);
    $edad = intval($_POST["edad"]); // Convertir a entero
    $nacionalidad_id = intval($_POST["nacionalidad"]); // Convertir a entero
    $ciudadNacimiento = htmlspecialchars($_POST["ciudadNacimiento"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $rfc = htmlspecialchars($_POST["rfc"]);

    // Consulta preparada para insertar datos
    $sql = "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, edad, nacionalidad_id, ciudad_nacimiento, telefono, rfc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    // Vincular parámetros y ejecutar la consulta
    // 'sssiiss' indica los tipos de datos de cada parámetro: s (string), i (integer)
    $stmt->bind_param("sssiisss", $nombre, $apellidoPaterno, $apellidoMaterno, $edad, $nacionalidad_id, $ciudadNacimiento, $telefono, $rfc);

    // Ejecutar la consulta
    
    if ($stmt->execute()) {
        header("Location: ../index.php?flag=0");
    } else {
        
        header("Location: ../index.php?flag=1&msg=".$stmt->error);
    }

    // Cerrar la consulta preparada y la conexión
    $stmt->close();
    $conexion->close();
}
?>
