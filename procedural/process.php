<?php
require_once("conexao.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
}
$query = "INSERT INTO categoria (nome) values ('$nome')";
$resultado =  mysqli_query($conexao, $query);
if($resultado){
echo "Inscricao bem-sucedida ";
}else{
    echo " Erro na inserção" . mysqli_error($conexao);
}
mysqli_close($conexao);
?> 