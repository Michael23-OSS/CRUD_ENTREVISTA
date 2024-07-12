<?php
require_once '../config/Database.php';
require_once '../models/TrabajadorModel.php';
require_once '../controllers/TrabajadorController.php';

$database = new Database();
$db = $database->getConnection();

$model = new TrabajadorModel($db);
$controller = new TrabajadorController($model);

$trabajadores = $controller->leerTodos();
include '../views/lista_trabajadores.php';
?>
