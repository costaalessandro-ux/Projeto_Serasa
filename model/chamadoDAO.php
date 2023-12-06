<?php
include_once "../model/conexao.php";
include_once "../model/usuarioDAO.php";
include_once "../model/usuario.php";
include_once "../model/cargoDAO.php";
include_once "../model/cargo.php";
include_once "../model/prioridadeDAO.php";
include_once "../model/prioridade.php";
include_once "../model/statusDAO.php";
include_once "../model/status.php";
include_once "../model/categoriaDAO.php";
include_once "../model/categoria.php";
include_once "../model/chamado.php";
class ChamadoDAO extends Conection{
    public function listar() {
        $sql = "SELECT * FROM chamado ";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_chamado = array();
        while ($row = $rs->fetch_assoc()) {
            $chamado = new Chamado();
            $chamado->setCodChamado($row["cod_chamado"]);
            $chamado->setDescricao($row["descricao"]);
            $chamado->setNome($row["nome"]);
            $chamado->setHorario($row["horario"]);
            $chamado->setData($row["data"]);
            $pDAO = new PrioridadeDAO();
            $chamado->setfkIdPrioridade($pDAO->carregarPorId($row["fk_id_prioridade"]));
            $uDAO = new UsuarioDAO();
            $chamado->setfkIdUsuario($uDAO->carregarPorId($row["fk_id_usuario"]));
            $sDAO = new StatusDAO();
            $chamado->setfkIdStatus($sDAO->carregarPorId($row["fk_id_status"]));
            $catDAO = new CategoriaDAO();
            $chamado->setfkIdCategoria($catDAO->carregarPorId($row["fk_id_categoria"]));
            $array_chamado[] = $chamado;
        }
        $this->desconectar();
        return $array_chamado;
    }
    public function inserir(Chamado $chamado) { 
        $sql = "INSERT INTO chamado (descricao,nome,horario,data,fk_id_prioridade,fk_id_usuario,fk_id_status,fk_id_categoria) 
        VALUES('".$chamado->descricao."','".$chamado->nome."','".$chamado->horario."','".$chamado->data."','".$chamado->fkIdPrioridade->idPrioridade."','".$chamado->fkIdUsuario->idUsuario."','".$chamado->fkIdStatus->idStatus."','".$chamado->fkIdCategoria->idCategoria."');";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    
    public function excluir($idChamado) {
        $sql = "DELETE FROM chamado WHERE cod_chamado=".$idChamado;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    } 
    public function carregarPorId($codChamado) {
        $sql = "SELECT * FROM chamado WHERE cod_chamado=".$codChamado;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $chamado = new Chamado();
        while ($row = $rs->fetch_assoc()) {
            $chamado->setCodChamado($row["cod_chamado"]);
            $chamado->setNome($row["nome"]);
            $chamado->setDescricao($row["descricao"]);
            $chamado->setData($row["data"]);
            $chamado->setHorario($row["horario"]);
            $pDAO = new PrioridadeDAO();
            $chamado->setfkIdPrioridade($pDAO->carregarPorId($row["fk_id_prioridade"]));
            $uDAO = new UsuarioDAO();
            $chamado->setfkIdUsuario($uDAO->carregarPorId($row["fk_id_usuario"]));
            $sDAO = new StatusDAO();
            $chamado->setfkIdStatus($sDAO->carregarPorId($row["fk_id_status"]));
            $catDAO = new CategoriaDAO();
            $chamado->setfkIdCategoria($catDAO->carregarPorId($row["fk_id_categoria"]));
        }
        $this->desconectar();
        return $chamado;
    }   
    
    public function alterar(Chamado $chamado) {
        $sql = "UPDATE chamado SET nome = '" . $chamado->nome . "', descricao = '" . $chamado->descricao . "', horario = '" . $chamado->horario . "', data = '" . $chamado->data . "', fk_id_prioridade = '" . $chamado->fkIdPrioridade->idPrioridade . "', fk_id_usuario = '" . $chamado->fkIdUsuario->idUsuario . "', fk_id_status = '" . $chamado->fkIdStatus->idStatus . "', fk_id_categoria = '" . $chamado->fkIdCategoria->idCategoria . "' WHERE cod_chamado = '" . $chamado->codChamado . "'";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
}
?>


