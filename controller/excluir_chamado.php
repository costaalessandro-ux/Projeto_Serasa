<?php
include_once "../model/chamadoDAO.php";
include_once "../model/chamado.php";
$idChamado = $_REQUEST["cod_chamado"];
$chamado = new ChamadoDAO();
$chamado->excluir($idChamado);
header("Location: ../view/form_listar_chamado.php");
?>