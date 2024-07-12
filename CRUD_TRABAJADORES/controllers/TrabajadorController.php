<?php
require_once '../models/TrabajadorModel.php';

class TrabajadorController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function leerTodos() {
        return $this->model->leerTodos();
    }

    public function leerPorId($id) {
        return $this->model->leerPorId($id);
    }

    public function crear($nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo) {
        $this->model->crear($nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo);
    }

    public function actualizar($id, $nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo) {
        $this->model->actualizar($id, $nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo);
    }

    public function eliminar($id) {
        $this->model->eliminar($id);
    }
}
?>
