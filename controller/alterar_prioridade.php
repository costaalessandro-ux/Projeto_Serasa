<?php
include_once "../model/prioridade.php";
include_once "../model/prioridadeDAO.php";
$idPrioridade = $_REQUEST["id_prioridade"];
$nome = $_REQUEST["nome"];
$prioridade = new Prioridade();
$prioridade->setIdPrioridade($idPrioridade);
$prioridade->setNome($nome);
$pDao = new PrioridadeDAO();
$pDao->alterar($prioridade);
header("Location: ../view/form_listar_prioridade.php");
?>