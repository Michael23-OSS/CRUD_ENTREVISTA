<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Trabajador</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="body-actualizar">
    <div class="container-actualizar">
        <h2 class="title-actualizar">Actualizar Trabajador</h2>
        <form action="../public/actualizar.php" method="post" class="form-actualizar">
            <input type="hidden" name="id" value="<?php echo $trabajador['id']; ?>">
            Nombre: <input type="text" name="nombre" value="<?php echo $trabajador['nombre']; ?>" required class="input-actualizar"><br>
            Apellido: <input type="text" name="apellido" value="<?php echo $trabajador['apellido']; ?>" required class="input-actualizar"><br>
            Email: <input type="email" name="email" value="<?php echo $trabajador['email']; ?>" class="input-actualizar"><br>
            Teléfono: <input type="text" name="telefono" value="<?php echo $trabajador['telefono']; ?>" class="input-actualizar"><br>
            Salario: <input type="text" name="salario" value="<?php echo $trabajador['salario']; ?>" required class="input-actualizar"><br>
            Puesto de Trabajo: <input type="text" name="puesto_trabajo" value="<?php echo $trabajador['puesto_trabajo']; ?>" required class="input-actualizar"><br>
            <input type="submit" value="Actualizar" class="submit-actualizar">
        </form>
        <br>
        <a href="../public/index.php" class="link-actualizar"><button class="button-actualizar">Regresar a la Lista de Trabajadores</button></a>
    </div>
</body>
</html>
