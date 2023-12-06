<?php
session_start();
include_once "../model/UsuarioDAO.php";
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
$uDAO = new UsuarioDAO();
$u = new Usuario();
// {
    $u = $uDAO->validaLogin($senha, $email);
    if ($u->getIdUsuario() > 0) {
        $_SESSION["id_usuario"] = $u;
        header("Location: ../view/form_listar_chamado.php");
    } else {
        header("Location: ../view/index.html");
    }
//} catch (Exception $exc) {
    //header("Location: ../view/index.html");
//}