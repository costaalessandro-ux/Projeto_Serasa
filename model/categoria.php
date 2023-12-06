<?php
class Categoria{
    var $idCategoria;
    var $nome;
    
    public function __construct(){

    }

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}
?>