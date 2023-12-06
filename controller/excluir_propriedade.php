<?php
include_once "../model/prioridade.php";
include_once "../model/prioridadeDAO.php";

$idPrioridade = $_REQUEST["id_prioridade"];
$prioridade = new PrioridadeDAO();
$prioridade->excluir($idPrioridade);
header("Location: ../view/form_listar_prioridade.php");
?>