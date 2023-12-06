<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/usuario.css" media="screen" />
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
                <a class="nav-link" href="index.html">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<body>
  <h2 style="text-align: center;">Cadastrado de Usuário</h2>
<div class="form">
<form action="../controller/inserir_usuario.php" method="POST">
    <div class="mb-3">
      <label for="" class="form-label">Nome do Usuario</label>
      <input type="text" class="form-control" name="nome" id="nome" aria-describedby="" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">E-mail</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">CPF</label>
      <input type="text" class="form-control" name="cpf" id="cpf" aria-describedby="" required>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" aria-describedby="" required>
    </div>
    <select class="form-select" aria-label="Default select example" name="cargo" id="cargo">
    <option selected>Cargo</option>
    <?php
            include_once "../model/cargoDAO.php";
            // put your code here
            $cargoDAO = new CargoDAO();
            $lista = array();
            $lista = $cargoDAO->listar();
            foreach ($lista as $c) {
            ?>
            <option name="cargo" id="cargo" value="<?=$c->codCargo?>"><?= $c->nome ?></option>
              <?php
            }
        ?>
</select>
    <br>
<div style="text-align: center;">
    <button type="submit" class="btn btn-primary" id="botao">Enviar</button>
          </div>
  </form>
          </div>
</body>
</html>