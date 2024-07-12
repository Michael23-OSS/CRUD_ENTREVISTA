<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Trabajador</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="body-eliminar">
    <div class="container-eliminar">
        <h2 class="title-eliminar">Eliminar Trabajador</h2>
        <form action="../public/eliminar.php" method="post" class="form-eliminar">
            <input type="hidden" name="id" value="<?php echo $trabajador['id']; ?>">
            <p class="confirmation-text">¿Estás seguro que deseas eliminar a <?php echo $trabajador['nombre'] . ' ' . $trabajador['apellido']; ?>?</p>
            <input type="submit" value="Eliminar" class="submit-eliminar">
        </form>
        <br>
        <a href="../public/index.php" class="link-eliminar"><button class="button-eliminar">Regresar a la Lista de Trabajadores</button></a>
    </div>
</body>
</html>
