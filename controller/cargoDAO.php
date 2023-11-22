<?php
include_once "conexao.php";
include_once "cargo.php";
class CargoDAO extends Conection{
    public function listar() {
        $sql = "SELECT * FROM cargo ";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_cargo = array();
        while ($row = $rs->fetch_assoc()) {
            $cargo = new Cargo();
            $cargo->setCodCargo($row["cod_cargo"]);
            $cargo->setNome($row["nome"]);
            $array_cargo[] = $cargo;
        }
        $this->desconectar();
        return $array_cargo;
    }
}
?>