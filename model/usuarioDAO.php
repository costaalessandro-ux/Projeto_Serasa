<?php
include_once "../model/conexao.php";
include_once "../model/usuarioDAO.php";
include_once "../model/usuario.php";
include_once "../model/cargoDAO.php";
include_once "../model/cargo.php";
class UsuarioDAO extends Conection{
    public function listar() {
        $sql = "SELECT * FROM usuario ";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $array_usuario = array();
        while ($row = $rs->fetch_assoc()) {
            $usuario = new Usuario();
            $usuario->setIdUsuario($row["id_usuario"]);
            $usuario->setNome($row["nome"]);
            $usuario->setEmail($row["email"]);
            $usuario->setCpf($row["cpf"]);
            $usuario->setSenha($row["senha"]);
            $cargoDAO = new CargoDAO();
            $usuario->setIdCargo($cargoDAO->carregarPorId($row["fk_cod_cargo"]));
            $array_usuario[] = $usuario;
        }
        $this->desconectar();
        return $array_usuario;
    }
    public function inserir(Usuario $usuario) { 
        $sql = "INSERT INTO usuario (nome,cpf,email,senha,fk_cod_cargo) VALUES('".$usuario->nome."','".$usuario->cpf."','".$usuario->email."','".$usuario->senha."','".$usuario->idCargo->codCargo."');";
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function excluir($idUsuario) {
        $sql = "DELETE FROM usuario WHERE id_usuario=".$idUsuario;
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    } 
    public function carregarPorId($idUsuario) {
        $sql = "SELECT * FROM usuario WHERE id_usuario=".$idUsuario;
        $this->conectar();
        $rs = $this->conn->query($sql);
        $usuario = new Usuario();
        while ($row = $rs->fetch_assoc()) {
            $usuario->setIdUsuario($row["id_usuario"]);
            $usuario->setEmail($row["email"]);
            $usuario->setNome($row["nome"]);
            $usuario->setCpf($row["cpf"]);
            $c = new CargoDAO();
            $usuario->setIdCargo($c->carregarPorId($row["fk_cod_cargo"]));
        }
        $this->desconectar();
        return $usuario;
    }   
    public function alterar(Usuario $usuario) {
        $sql = "UPDATE usuario SET nome = '" . $usuario->nome . "', cpf = '" . $usuario->cpf . "', email = '" . $usuario->email . "', fk_cod_cargo = '" . $usuario->idCargo->codCargo . "' WHERE id_usuario = " . $usuario->idUsuario;        
        $this->conectar();
        $this->conn->query($sql);
        $this->desconectar();
    }
    public function validaLogin($senha, $email) {
        $sql = "SELECT * FROM usuario WHERE email='" . $email . "' AND senha='" . $senha . "'";
        $this->conectar();
        $rs = $this->conn->query($sql);
        $u = new Usuario();
        if ($row = $rs->fetch_assoc()) {
            if ($row["senha"] === $row["senha"]) {
                $u->setIdUsuario($row["id_usuario"]);
                $u->setEmail($row["email"]);
                $u->setNome($row["nome"]);
                $u->setCpf($row["cpf"]);
                $u->setSenha($row["senha"]);
            }
        }
        $this->desconectar();
        return $u;
    }
}
?>


