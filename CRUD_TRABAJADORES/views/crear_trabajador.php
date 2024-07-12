<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Trabajador</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="body-crear">
    <div class="container-crear">
        <h2 class="title-crear">Crear Trabajador</h2>
        <form action="../public/crear.php" method="post" class="form-crear">
            Nombre: <input type="text" name="nombre" required class="input-crear"><br>
            Apellido: <input type="text" name="apellido" required class="input-crear"><br>
            Email: <input type="email" name="email" class="input-crear"><br>
            Teléfono: <input type="text" name="telefono" class="input-crear"><br>
            Salario: <input type="text" name="salario" required class="input-crear"><br>
            Puesto de Trabajo: <input type="text" name="puesto_trabajo" required class="input-crear"><br>
            <input type="submit" value="Crear" class="submit-crear">
        </form>
        <br>
        <a href="../public/index.php" class="link-crear"><button class="button-crear">Regresar a la Lista de Trabajadores</button></a>
    </div>
</body>
</html>
