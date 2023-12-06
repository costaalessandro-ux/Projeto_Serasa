<?php
include_once "../model/conexao.php";
include_once "../model/prioridade.php";
class PrioridadeDAO extends Conection{
    public function listar(){
        $sql = "SELECT * FROM prioridade_pedidio";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_prioridade = array();
        while ($row = $rs->fetch_assoc()) {
            $prioridade = new Prioridade();
            $prioridade->setIdPrioridade($row["id_prioridade"]);
            $prioridade->setNome($row["nome"]);
            $array_prioridade[] = $prioridade;
        }
        $this->desconectar();
        return $array_prioridade;
    }
    public function inserir(Prioridade $prioridade){
        $sql = "INSERT INTO prioridade_pedidio (nome) VALUES('".$prioridade->nome."')";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }

    public function excluir($idPrioridade){
        $sql = "DELETE FROM prioridade_pedidio where id_prioridade=".$idPrioridade;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }

    public function alterar(Prioridade $prioridade) {
        $sql = "UPDATE prioridade_pedidio SET nome = '" . $prioridade->nome . "' " . "WHERE id_prioridade = " . $prioridade->idPrioridade;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function carregarPorId($idPrioridade) {
        $sql = "SELECT * FROM prioridade_pedidio WHERE id_prioridade=".$idPrioridade;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $prioridade = new Prioridade();
        while ($row = $rs->fetch_assoc()) {
            $prioridade->setIdPrioridade($row["id_prioridade"]);
            $prioridade->setNome($row["nome"]);
        }
        $this->desconectar();
        return $prioridade;
    }  
    }
?>