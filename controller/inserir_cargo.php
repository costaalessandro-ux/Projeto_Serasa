<?php
include_once "../model/cargoDAO.php";
include_once "../model/cargo.php";
// put your code here
$nome = $_POST["nome"];
$cargo = new Cargo();
$cargo->setNome($nome);
$cargoDAO = new CargoDAO();
$cargoDAO->inserir($cargo);
header("Location: ../view/form_listar_cargo.php");