<?php
include_once "../model/categoria.php";
include_once "../model/categoriaDAO.php";
$codCategoria = $_REQUEST["id_categoria"];
$categoria = new CategoriaDAO();
$categoria->excluir($codCategoria);
header("Location: ../view/form_listar_categoria.php");
?>