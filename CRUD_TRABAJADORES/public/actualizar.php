<?php
require_once '../config/Database.php';
require_once '../models/TrabajadorModel.php';
require_once '../controllers/TrabajadorController.php';

$database = new Database();
$db = $database->getConnection();

$model = new TrabajadorModel($db);
$controller = new TrabajadorController($model);

if ($_GET) {
    $id = $_GET['id'];
    $trabajador = $controller->leerPorId($id);
    include '../views/actualizar_trabajador.php';
}

if ($_POST) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $salario = $_POST['salario'];
    $puesto_trabajo = $_POST['puesto_trabajo'];

    $controller->actualizar($id, $nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo);
    header("Location: index.php");
}
?>
