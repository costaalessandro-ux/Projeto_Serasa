<?php
include_once "../model/usuarioDAO.php";
include_once "../model/usuario.php";
$idUsuario = $_REQUEST["id_usuario"];
$status = new UsuarioDAO();
$status->excluir($idUsuario);
header("Location: ../view/form_listar_usuario.php");
?>