<?php
include_once "../model/usuario.php";
include_once "../model/usuarioDAO.php";
$idUsuario = $_REQUEST["id_usuario"];
$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$cpf = $_REQUEST["cpf"];
$cargo = $_REQUEST["cargo"];
$usuario = new Usuario();
$usuario->setIdUsuario($idUsuario);
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setCpf($cpf);
$c = new Cargo();
$c->setCodCargo($cargo);
$usuario->setIdCargo($c);
$uDao = new UsuarioDAO();
$uDao->alterar($usuario);
header("Location: ../view/form_listar_usuario.php");
?>