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
    public function inserir(Cargo $cargo) {
        $sql = "INSERT INTO cargo (nome) VALUES('".$cargo->nome."')";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function carregarPorId($codCargo) {
        $sql = "SELECT * FROM cargo WHERE cod_cargo=".$codCargo;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $cargo = new Cargo();
        while ($row = $rs->fetch_assoc()) {
            $cargo->setCodCargo($row["cod_cargo"]);
            $cargo->setNome($row["nome"]);
        }
        $this->desconectar();
        return $cargo;
    }   
    public function excluir($codCargo) {
        $sql = "DELETE FROM cargo WHERE cod_cargo=".$codCargo;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    } 
    public function alterar(Cargo $cargo) {
        $sql = "UPDATE cargo SET nome = '".$cargo->nome."' " . "WHERE cod_cargo = ".$cargo->codCargo;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }

}
?>