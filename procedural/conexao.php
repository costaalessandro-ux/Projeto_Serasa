<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "sos";
 $conexao = mysqli_connect($host, $user, $password, $database);
     if (!$conexao){
         die("Conexão Falhou!" . mysqli_connect_error());
     }
 echo "conexao bem sucedidade";
?>