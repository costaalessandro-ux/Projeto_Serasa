<?php
include_once "../model/statusDAO.php";
include_once "../model/status.php";
// put your code here
$nome = $_POST["nome"];
$status = new Status();
$status->setNome($nome);
$statusDAO = new StatusDAO();
$statusDAO->inserir($status);
header("Location: ../view/form_listar_status.php");
?>