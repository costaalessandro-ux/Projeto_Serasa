<?php
class Conection{
    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $database = "sos";
    var $conn;

    public function conectar(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if(!$this->conn){
            die("Conexão Falhou!" . mysqli_erro());
        }
    }

    public function desconectar(){
        if($this->conn){
            mysqli_close($this->conn);
        }
    }
}
?>