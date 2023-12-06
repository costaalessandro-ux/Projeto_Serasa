<?php
include_once "../model/prioridadeDAO.php";
include_once "../model/prioridade.php";
// put your code here
$nome = $_POST["nome"];
$prioridade = new Prioridade();
$prioridade->setNome($nome);
$prioridadeDAO = new PrioridadeDAO();
$prioridadeDAO->inserir($prioridade);
header("Location: ../view/form_listar_prioridade.php");
?>