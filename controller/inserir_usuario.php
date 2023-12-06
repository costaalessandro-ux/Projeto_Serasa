<?php
include_once "../model/conexao.php";
include_once "../model/usuarioDAO.php";
include_once "../model/usuario.php";
include_once "../model/cargo.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$cargo = $_POST["cargo"];
$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setCpf($cpf);
$usuario->setSenha($senha);
$c = new Cargo();
$c->setCodCargo($cargo);
$usuario->setIdCargo($c);
$usuarioDAO = new UsuarioDAO();
$usuarioDAO->inserir($usuario);
header("Location: ../view/index.html");
?>