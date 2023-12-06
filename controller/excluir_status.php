<?php
include_once "../model/statusDAO.php";
include_once "../model/status.php";
$idStatus = $_REQUEST["id_status"];
$status = new statusDAO();
$status->excluir($idStatus);
header("Location: ../view/form_listar_status.php");
?>