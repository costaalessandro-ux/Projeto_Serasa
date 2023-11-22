<?php
class Cargo{
    var $codCargo;
    var $nome;

    public function __construct(){

    }

    public function getCodCargo(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCodCargo($codCargo){
        $this->codCargo = $codCargo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>