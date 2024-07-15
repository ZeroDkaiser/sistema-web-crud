
<?php 
// Incluir archivo de conexión
include 'conexion.php';



// Verificar si se recibieron los datos necesarios
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellidoPaterno']) && 
    isset($_POST['apellidoMaterno']) && isset($_POST['edad']) && 
    isset($_POST['nacionalidad']) && isset($_POST['ciudadNacimiento']) && 
    isset($_POST['telefono']) && isset($_POST['rfc'])) {

    // Obtener datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $edad = $_POST['edad'];
    $nacionalidad = $_POST['nacionalidad'];
    $ciudadNacimiento = $_POST['ciudadNacimiento'];
    $telefono = $_POST['telefono'];
    $rfc = $_POST['rfc'];

    // Preparar y ejecutar la consulta de actualización
    $stmt = $conexion->prepare("UPDATE usuarios SET nombre = ?, apellido_paterno = ?, apellido_materno = ?, edad = ?, nacionalidad_id = ?, ciudad_nacimiento = ?, telefono = ?, rfc = ? WHERE id = ?");
    $stmt->bind_param("sssissssi", $nombre, $apellidoPaterno, $apellidoMaterno, $edad, $nacionalidad, $ciudadNacimiento, $telefono, $rfc, $id);
    
    if ($stmt->execute()) {
        echo "Datos actualizados correctamente";
        header("Location:../datosIngresados.php?flag=0");
    } else {
        echo "Error al actualizar los datos: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "Faltan datos por actualizar";
}


?>


