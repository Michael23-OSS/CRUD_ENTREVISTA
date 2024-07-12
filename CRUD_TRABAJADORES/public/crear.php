<?php
require_once '../config/Database.php';
require_once '../models/TrabajadorModel.php';
require_once '../controllers/TrabajadorController.php';

$database = new Database();
$db = $database->getConnection();

$model = new TrabajadorModel($db);
$controller = new TrabajadorController($model);

if ($_POST) {
    try {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $salario = $_POST['salario'];
        $puesto_trabajo = $_POST['puesto_trabajo'];

        $controller->crear($nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo);
        header("Location: index.php");
    } catch (Exception $e) {
        $error_message = $e->getMessage();
        // Escapar las comillas simples dentro del mensaje
        $error_message = str_replace("'", "\\'", $error_message);
        echo "<script>alert('$error_message'); window.location.href = '../views/crear_trabajador.php';</script>";
    }
} else {
    include '../views/crear_trabajador.php';
}
?>
