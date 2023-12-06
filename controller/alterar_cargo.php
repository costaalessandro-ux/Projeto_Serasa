<?php
include_once "../model/cargo.php";
include_once "../model/cargoDAO.php";
$codCargo = $_REQUEST["cod_cargo"];
$nome = $_REQUEST["nome"];
$cargo = new Cargo();
$cargo->setCodCargo($codCargo);
$cargo->setNome($nome);
$cDao = new CargoDAO();
$cDao->alterar($cargo);
header("Location: ../view/form_listar_cargo.php");
?>