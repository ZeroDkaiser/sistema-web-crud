<?php
// Incluir archivo de conexión
include 'DB/conexion.php';

// Obtener el ID del usuario
$id = $_GET['id'];

// Consultar los datos del usuario
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

// Consultar las nacionalidades
$sql_nacionalidades = "SELECT * FROM nacionalidades";
$nacionalidades = $conexion->query($sql_nacionalidades);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <h1>Editar Usuario</h1>
        <form id="editForm" method="post" action="DB/actualizar.php">
            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo $usuario['apellido_paterno']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo $usuario['apellido_materno']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $usuario['edad']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <select class="form-control" id="nacionalidad" name="nacionalidad" required>
                    <?php while($fila = $nacionalidades->fetch_assoc()) { ?>
                        <option value="<?php echo $fila['id']; ?>" <?php echo ($fila['id'] == $usuario['nacionalidad_id']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($fila['nombre']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="ciudadNacimiento" class="form-label">Ciudad de Nacimiento</label>
                <input type="text" class="form-control" id="ciudadNacimiento" name="ciudadNacimiento" value="<?php echo $usuario['ciudad_nacimiento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Número Telefónico</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario['telefono']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="rfc" class="form-label">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" value="<?php echo $usuario['rfc']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
$stmt->close();
$conexion->close();
?>
