<?php
include_once "../model/statusDAO.php";
include_once "../model/status.php";
$idStatus = $_REQUEST["id_status"];
$nome = $_REQUEST["nome"];
$status = new Status();
$status->setIdStatus($idStatus);
$status->setNome($nome);
$sDAO = new StatusDAO();
$sDAO->alterar($status);
header("Location: ../view/form_listar_status.php");
?>