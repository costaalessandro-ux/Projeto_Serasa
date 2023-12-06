<?php
Class Status{

    var $idStatus;
    var $nome;

    public function __construct(){

    }

    public function getIdStatus(){
        return $this->idStatus;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdStatus($idStatus){
        $this->idStatus = $idStatus;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

}




?>