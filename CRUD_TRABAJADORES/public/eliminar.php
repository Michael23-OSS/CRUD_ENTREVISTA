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
    include '../views/eliminar_trabajador.php';
}

if ($_POST) {
    $id = $_POST['id'];
    $controller->eliminar($id);
    header("Location: index.php");
}
?>
