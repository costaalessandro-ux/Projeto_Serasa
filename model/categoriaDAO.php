<?php
include_once "conexao.php";
include_once "categoria.php";
class CategoriaDAO extends Conection{
    public function listar() {
        $sql = "SELECT * FROM categoria ";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_categoria = array();
        while ($row = $rs->fetch_assoc()) {
            $categoria = new Categoria();
            $categoria->setIdCategoria($row["id_categoria"]);
            $categoria->setNome($row["nome"]);
            $array_categoria[] = $categoria;
        }
        $this->desconectar();
        return $array_categoria;
    }
    public function inserir(Categoria $categoria) {
        $sql = "INSERT INTO categoria (nome) VALUES('".$categoria->nome."')";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function excluir($idCategoria){
        $sql = "DELETE FROM categoria WHERE id_categoria=" . $idCategoria;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function alterar(Categoria $categoria) {
        $sql = "UPDATE categoria SET nome = '" . $categoria->nome . "' " . "WHERE id_categoria = " . $categoria->idCategoria;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function carregarPorId($idCategoria) {
        $sql = "SELECT * FROM categoria WHERE id_categoria=".$idCategoria;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $categoria = new Categoria();
        while ($row = $rs->fetch_assoc()) {
            $categoria->setIdCategoria($row["id_categoria"]);
            $categoria->setNome($row["nome"]);
        }
        $this->desconectar();
        return $categoria;
    }   
}


?>