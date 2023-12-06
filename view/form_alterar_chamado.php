<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/alteraChamado.css" media="screen" />
    <title>Document</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="form_listar_chamado.php">Sistema O.S</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html" >Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>
<?php
        include_once "../model/chamadoDAO.php";
        include_once "../model/chamado.php";
        $codChamado = $_REQUEST["cod_chamado"];
        $cDAO = new ChamadoDAO();
        $c = new Chamado();
        $c = $cDAO->carregarPorId($codChamado);
?>
  <form action="../controller/alterar_chamado.php" method="post">
    <div class="mb-3">
    <input type="hidden" name="cod_chamado" value="<?=$c->getCodChamado() ?>"/>
      <label for="" class="form-label">Titulo do Chamado</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?=$c->getNome() ?>" aria-describedby="">
    </div>
    <br><br>
    <div class="input-group">
      <label for="" class="form-label">Descrição do Chamado</label><br>
      <textarea class="form-control" aria-label="With textarea" name="descricao" id="descricao" value="<?=$c->getDescricao() ?>"><?=$c->getDescricao() ?></textarea>
    </div>
    <br><br>
    <div class="mb-3">
      <label for="" class="form-label">Horario</label>
      <input type="time" class="form-control" id="horario" name="horario" value="<?=$c->getHorario() ?>" aria-describedby="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Data</label>
      <input type="date" class="form-control" id="data" name="data" value="<?=$c->getData() ?>" aria-describedby="">
    </div>
    <br><br>
    <select class="form-select" aria-label="Default select example" name="prioridade" id="prioridade">
    <option selected>Prioridade</option>
    <?php
            include_once "../model/prioridadeDAO.php";
            $prioridadeDAO = new PrioridadeDAO();
            $lista = array();
            $lista = $prioridadeDAO->listar();
            foreach ($lista as $p) {
            ?>
            <option name="" id="" value="<?=$p->getIdPrioridade()?>"><?= $p->getNome()?></option>
            <?php
            }
            ?>
</select>
    <br><br>
    <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
    <option selected>Categoria</option>
    <?php
            include_once "../model/categoriaDAO.php";
            $categoriaDAO = new CategoriaDAO();
            $lista = array();
            $lista = $categoriaDAO->listar();
            foreach ($lista as $c) {
            ?>
            <option value="<?=$c->getIdCategoria()?>"><?= $c->getNome() ?></option>
            <?php
            }
            ?>
          </select>
    <br><br>
    <select class="form-select" aria-label="Default select example" name="status" id="status">
    <option selected>Status</option>
    <?php
            include_once "../model/statusDAO.php";
            $statusDAO = new StatusDAO();
            $lista = array();
            $lista = $statusDAO->listar();
            foreach ($lista as $s) {
            ?>
            <option value="<?=$s->getIdStatus()?>"><?= $s->getNome() ?></option>
            <?php
            }
            ?>
          </select>
    <br><br>
    <select class="form-select" aria-label="Default select example" name="usuario" id="usuario">
    <option selected>Usuario</option>
    <?php
            include_once "../model/usuarioDAO.php";
            $usuarioDAO = new UsuarioDAO();
            $lista = array();
            $lista = $usuarioDAO->listar();
            foreach ($lista as $u) {
            ?>
            <option value="<?=$u->getIdUsuario()?>"><?= $u->getNome()?></option>
            <?php
            }
            ?>
          </select>
<br><br>
<div style="text-align: center;">
    <a href="#" onclick="alterar(<?= $c->codChamado ?>, '<?= $c->nome ?>')" style="text-align: center;"><button type="submit" class="btn btn-primary" id="botao">Enviar</button></a>
          </div>      
  </form>
  <div style="text-align: center;">
  <a href="form_listar_chamado.php"  style="text-align: center;"><button type="submit" class="btn btn-danger" id="botao1">Voltar</button>
          </div>
</body>
</html>