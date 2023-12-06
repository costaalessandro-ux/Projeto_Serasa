<?php
include_once "prioridade.php";
include_once "categoria.php";
include_once "status.php";
include_once "usuario.php";
class Chamado{

    var $codChamado;
    var $descricao;
    var $nome;
    var $horario;
    var $data;
    var $fkIdPrioridade;
    var $fkIdUsuario;
    var $fkIdStatus;
    var $fkIdCategoria;
    
    public function __construct(){

    }

    public function getCodChamado(){
        return $this->codChamado;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function getData(){
        return $this->data;
    }

    public function getfkIdPrioridade(){
        return $this->fkIdPrioridade;
    }

    public function getfkIdUsuario(){
        return $this->fkIdUsuario;
    }

    public function getfkIdStatus(){
        return $this->fkIdStatus;
    }

    public function getfkIdCategoria(){
        return $this->fkIdCategoria;
    }

    public function setCodChamado($codChamado){
        $this->codChamado = $codChamado;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function setfkIdPrioridade(Prioridade $fkIdPrioridade){
        $this->fkIdPrioridade = $fkIdPrioridade;
    }

    public function setfkIdUsuario(Usuario $fkIdUsuario){
        $this->fkIdUsuario = $fkIdUsuario;
    }

    public function setfkIdStatus(Status $fkIdStatus){
        $this->fkIdStatus = $fkIdStatus;
    }

    public function setfkIdCategoria(Categoria $fkIdCategoria){
        $this->fkIdCategoria = $fkIdCategoria;
    }
}
?>