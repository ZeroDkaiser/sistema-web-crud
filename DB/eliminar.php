<?php
// Incluir archivo de conexión
include 'conexion.php';

// Obtener el ID del usuario a eliminar
$id = $_GET['id'];

// Preparar y ejecutar la consulta de eliminación
$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conexion->error;
}

$stmt->close();
$conexion->close();

// Redirigir de vuelta a la página principal
header("Location: ../datosIngresados.php");
exit;
?>
