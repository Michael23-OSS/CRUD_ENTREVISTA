<?php
class TrabajadorModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function leerTodos() {
        $query = "SELECT trabajadores.id, nombre, apellido, email, telefono, salario, puesto_trabajo FROM trabajadores INNER JOIN informacion ON trabajadores.id = informacion.id_trabajador";
        $result = $this->conn->query($query);

        $trabajadores = [];
        while ($row = $result->fetch_assoc()) {
            $trabajadores[] = $row;
        }
        return $trabajadores;
    }

    public function leerPorId($id) {
        $query = "SELECT trabajadores.id, nombre, apellido, email, telefono, salario, puesto_trabajo FROM trabajadores INNER JOIN informacion ON trabajadores.id = informacion.id_trabajador WHERE trabajadores.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function crear($nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo) {
        try {
            $query1 = "INSERT INTO trabajadores (nombre, apellido, email, telefono) VALUES (?, ?, ?, ?)";
            $stmt1 = $this->conn->prepare($query1);
            $stmt1->bind_param("ssss", $nombre, $apellido, $email, $telefono);
            $stmt1->execute();
            $id_trabajador = $stmt1->insert_id;

            $query2 = "INSERT INTO informacion (id_trabajador, salario, puesto_trabajo) VALUES (?, ?, ?)";
            $stmt2 = $this->conn->prepare($query2);
            $stmt2->bind_param("iss", $id_trabajador, $salario, $puesto_trabajo);
            $stmt2->execute();
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                throw new Exception("Usuario duplicado: " . $e->getMessage());
            } else {
                throw $e;
            }
        }
    }

    public function actualizar($id, $nombre, $apellido, $email, $telefono, $salario, $puesto_trabajo) {
        $query1 = "UPDATE trabajadores SET nombre = ?, apellido = ?, email = ?, telefono = ? WHERE id = ?";
        $stmt1 = $this->conn->prepare($query1);
        $stmt1->bind_param("sssii", $nombre, $apellido, $email, $telefono, $id);
        $stmt1->execute();

        $query2 = "UPDATE informacion SET salario = ?, puesto_trabajo = ? WHERE id_trabajador = ?";
        $stmt2 = $this->conn->prepare($query2);
        $stmt2->bind_param("ssi", $salario, $puesto_trabajo, $id);
        $stmt2->execute();
    }

    public function eliminar($id) {
        $query1 = "DELETE FROM informacion WHERE id_trabajador = ?";
        $stmt1 = $this->conn->prepare($query1);
        $stmt1->bind_param("i", $id);
        $stmt1->execute();

        $query2 = "DELETE FROM trabajadores WHERE id = ?";
        $stmt2 = $this->conn->prepare($query2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
    }
}
?>
