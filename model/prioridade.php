<?php
class Prioridade{
    var $idPrioridade;
    var $nome;

    public function __construct(){

    }

    public function getIdPrioridade(){
        return $this->idPrioridade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdPrioridade($idPrioridade){
        $this->idPrioridade = $idPrioridade;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>