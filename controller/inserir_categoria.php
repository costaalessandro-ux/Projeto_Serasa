<?php
include_once "../model/categoriaDAO.php";
include_once "../model/categoria.php";
// put your code here
$nome = $_POST["nome"];
$categoria = new Categoria();
$categoria->setNome($nome);
$cDAO = new CategoriaDAO();
$cDAO->inserir($categoria);
header("Location: ../view/form_listar_categoria.php");
?>