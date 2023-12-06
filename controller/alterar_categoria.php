<?php
include_once "../model/categoria.php";
include_once "../model/categoriaDAO.php";
$idCategoria = $_REQUEST["id_categoria"];
$nome = $_REQUEST["nome"];
$categoria = new Categoria();
$categoria->setIdCategoria($idCategoria);
$categoria->setNome($nome);
$cDao = new CategoriaDAO();
$cDao->alterar($categoria);
header("Location: ../view/form_listar_categoria.php");
?>