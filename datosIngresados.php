
<!DOCTYPE html>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario de Registro</title>
</head>
<body>

    <div class="container">
        <center><h1>Formulario de Registro</h1></center>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Edad</th>
          <th scope="col">Nacionalidad</th>
          <th scope="col">Ciudad de nacimiento</th>
          <th scope="col">Numero Telefonico</th>
          <th scope="col">RFC</th>
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>
          
        </tr>
        
      </thead>
      <tbody class="table-group-divider">
       

        <?php 
        include "DB/obtenerUsuarios.php";?>

      </tbody>
        </table> 

      <a href="index.php" class="btn btn-secondary">Regresar al inicio</a>  

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/validacionFormulario.js"></script>
</body>

</html>