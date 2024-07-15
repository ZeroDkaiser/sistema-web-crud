<?php 
    include "DB/consultaNacionalidades.php";
    
    if (isset($_GET['flag'])) {
        if ($_GET['flag'] == '0') {
            echo '<script>alert("Los datos se subieron correctamente.") </script>';
        } elseif ($_GET['flag'] == '1') {
            echo '<script>alert("Hubo un problema al subir los datos.")</script>';
        }
    }
       
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>
    <div class="form-container container p-4">

        <h2>Formulario de Registro</h2>
        <form id="registroForm" action="DB/procesar_registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"  maxlength="50">

            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" id="apellidoPaterno" name="apellidoPaterno"  maxlength="50">

            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" id="apellidoMaterno" name="apellidoMaterno"  maxlength="50">

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" >

            <label for="nacionalidad">Nacionalidad:</label>
            <select id="nacionalidad" name="nacionalidad" >
                <option value="" disabled selected>Seleccione un país</option>
                <?php echo $options; ?>
                
            </select>

            <label for="ciudadNacimiento">Ciudad de Nacimiento:</label>
            <input type="text" id="ciudadNacimiento" name="ciudadNacimiento" maxlength="50" pattern="[A-Za-z\u00C0-\u017F\s]+">

            <label for="telefono">Número Telefónico:</label>
            <input type="number" id="telefono" name="telefono" pattern="\d{10}" maxlength="10">

            <label for="rfc">RFC:</label>
            <input type="text" id="rfc" name="rfc" maxlength="13" pattern="[A-Za-z]{4}\d{6}[A-Fa-f0-9]{3}">

            <input type="submit" value="Registrar">
            <input type="button" value="Consultar datos" onclick="window.location.href='datosIngresados.php';">
        </form>
        
    </div>
   
    <script src="js/validacionFormulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
