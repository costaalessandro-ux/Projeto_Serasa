<?php
include_once "conexao.php";
include_once "status.php";
class StatusDAO extends Conection{
    public function listar() {
        $sql = "SELECT * FROM status ";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_status = array();
        while ($row = $rs->fetch_assoc()) {
            $status = new Status();
            $status->setIdStatus($row["id_status"]);
            $status->setNome($row["nome"]);
            $array_status[] = $status;
        }
        $this->desconectar();
        return $array_status;
    }
    public function inserir(Status $status) {
        $sql = "INSERT INTO status (nome) VALUES('".$status->nome."')";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function excluir($idStatus){
        $sql="DELETE FROM status WHERE id_status=".$idStatus;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }

    public function alterar(Status $status) {
        $sql = "UPDATE status SET nome = '" . $status->nome . "' " . "WHERE id_status = " . $status->idStatus;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }

    public function carregarPorId($idStatus){
        $sql = "SELECT * FROM status WHERE id_status=".$idStatus;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $s = new Status();
        while ($row = $rs->fetch_assoc()) {
            $s->getIdStatus($row["id_status"]);
            $s->setNome($row["nome"]);
        }
        $this->desconectar();
        return $s;
    }    
}
?>