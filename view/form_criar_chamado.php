<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/" media="screen" />
    <title>Document</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sistema O.S</a>
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
  <form action="../controller/inserir_chamado.php" method="post">
    <div class="mb-3">
      <label for="" class="form-label">Titulo do Chamado</label>
      <input type="text" class="form-control" id="nome" name="nome" aria-describedby="">
    </div>
    <br><br>
    <div class="input-group">
      <label for="" class="form-label">Descrição do Chamado</label>
      <textarea class="form-control" aria-label="With textarea" name="descricao" id="descricao"></textarea>
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
            <option name="prioridade" id="prioridade" value="<?=$p->idPrioridade?>"><?= $p->nome ?></option>
              <?php
            }
        ?>
</select>
    <br>
    <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
    <option selected>Categoria</option>
    <?php
            include_once "../model/categoriaDAO.php";
            $categoriaDAO = new CategoriaDAO();
            $lista = array();
            $lista = $categoriaDAO->listar();
            foreach ($lista as $c) {
            ?>
            <option name="categoria" id="categoria" value="<?=$c->idCategoria?>"><?= $c->nome ?></option>
              <?php
            }
        ?>
</select>
    <br>
    <select class="form-select" aria-label="Default select example" name="status" id="status">
    <option selected>Status</option>
    <?php
            include_once "../model/statusDAO.php";
            // put your code here
            $statusDAO = new StatusDAO();
            $lista = array();
            $lista = $statusDAO->listar();
            foreach ($lista as $s) {
            ?>
            <option name="status" id="status" value="<?=$s->idStatus?>"><?= $s->nome ?></option>
              <?php
            }
        ?>
</select>
    <br>
    <select class="form-select" aria-label="Default select example" name="usuario" id="usuario">
    <option selected>Usuario</option>
    <?php
            include_once "../model/usuarioDAO.php";
            $usuarioDAO = new UsuarioDAO();
            $lista = array();
            $lista = $usuarioDAO->listar();
            foreach ($lista as $u) {
            ?>
            <option name="usuario" id="usuario" value="<?=$u->idUsuario?>"><?= $u->nome ?></option>
              <?php
            }
        ?>
</select>
    <br>
    <div class="mb-3">
      <label for="" class="form-label">Horario</label>
      <input type="time" class="form-control" id="horario" name="horario" aria-describedby="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Data</label>
      <input type="date" class="form-control" id="data" name="data" aria-describedby="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <a href="form_listar_chamado.php"><button type="" class="btn btn-danger"> Voltar </button></a>
</body>
</html>