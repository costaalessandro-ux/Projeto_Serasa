<?php
include_once "../model/cargoDAO.php";
include_once "../model/cargo.php";
$codCargo = $_REQUEST["cod_cargo"];
$cargoDAO = new CargoDAO();
$cargoDAO->excluir($codCargo);
header("Location: ../view/form_listar_cargo.php");
?>