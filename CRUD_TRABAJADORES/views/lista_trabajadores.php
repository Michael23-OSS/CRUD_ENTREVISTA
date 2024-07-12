<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Trabajadores</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Lista de Trabajadores</h2>
        <a href="../views/crear_trabajador.php"><button>Crear Trabajador</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Salario</th>
                    <th>Puesto de Trabajo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trabajadores as $trabajador): ?>
                    <tr>
                        <td><?php echo $trabajador['id']; ?></td>
                        <td><?php echo $trabajador['nombre']; ?></td>
                        <td><?php echo $trabajador['apellido']; ?></td>
                        <td><?php echo $trabajador['email']; ?></td>
                        <td><?php echo $trabajador['telefono']; ?></td>
                        <td><?php echo $trabajador['salario']; ?></td>
                        <td><?php echo $trabajador['puesto_trabajo']; ?></td>
                        <td>
                            <a href="actualizar.php?id=<?php echo $trabajador['id']; ?>"><button>Actualizar</button></a>
                            <a href="eliminar.php?id=<?php echo $trabajador['id']; ?>"><button>Eliminar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
