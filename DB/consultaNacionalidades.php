<?php
// Incluir archivo de conexión
include 'conexion.php';

// Consulta SQL para obtener las nacionalidades
$sql = "SELECT id, nombre FROM nacionalidades";
$resultado = $conexion->query($sql);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Iniciar lista de opciones
    $options = "";

    // Recorrer resultados y generar opciones
    while ($fila = $resultado->fetch_assoc()) {
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $options .= "<option value='$id'>$nombre</option>";
    }
} else {
    // Si no hay resultados
    $options = "<option value='' disabled selected>No hay nacionalidades disponibles</option>";
}

// Cerrar conexión
$conexion->close();
?>
