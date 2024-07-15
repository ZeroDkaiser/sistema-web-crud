<?php
            // Incluir archivo de conexión
            include 'conexion.php';

            // Consulta SQL para obtener los datos de la tabla usuarios
            $sql = "SELECT  u.id, u.nombre, u.apellido_paterno, u.apellido_materno, u.edad, n.nombre AS nacionalidad, u.ciudad_nacimiento, u.telefono, u.rfc
                    FROM usuarios u
                    JOIN nacionalidades n ON u.nacionalidad_id = n.id";
            $resultado = $conexion->query($sql);

            // Verificar si se obtuvieron resultados
            if ($resultado->num_rows > 0) {
                // Recorrer resultados y generar filas de la tabla
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td scope=\"row\">" . htmlspecialchars($fila['id']) . "</td> 
                            <td>" . htmlspecialchars($fila['nombre']) . "</td>
                            <td>" . htmlspecialchars($fila['apellido_paterno']) . "</td>
                            <td>" . htmlspecialchars($fila['apellido_materno']) . "</td>
                            <td>" . htmlspecialchars($fila['edad']) . "</td>
                            <td>" . htmlspecialchars($fila['nacionalidad']) . "</td>
                            <td>" . htmlspecialchars($fila['ciudad_nacimiento']) . "</td>
                            <td>" . htmlspecialchars($fila['telefono']) . "</td>
                            <td>" . htmlspecialchars($fila['rfc']) . "</td>
                            
                            <td><a href='editarDatos.php?id={$fila['id']}' class='btn btn-primary'>Editar</a></td>
                            <td><a href='DB/eliminar.php?id={$fila['id']}' class='btn btn-danger'>Borrar</a></td>

                          </tr>";//no olvidar los \, porque se toma como cierre de ""
                          
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron datos</td></tr>";
            }

            // Cerrar conexión
            $conexion->close();
            ?>