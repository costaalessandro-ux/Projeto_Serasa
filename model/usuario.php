<?php
include_once "cargo.php";
class Usuario{

    var $idUsuario;
    var $email;
    var $nome;
    var $cpf;
    var $senha;
    var $idCargo;

    public function __construct(){

    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getIdCargo(){
        return $this->idCargo;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setIdCargo(Cargo $idCargo){
        $this->idCargo = $idCargo;
    }   
}
?>