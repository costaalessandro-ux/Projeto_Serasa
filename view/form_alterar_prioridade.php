<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tela_inicial.css" media="screen" />
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
<?php
        include_once "../model/prioridadeDAO.php";
        include_once "../model/prioridade.php";
        $idPrioridade = $_REQUEST["id_prioridade"];
        $pDAO = new PrioridadeDAO();
        $p = new Prioridade();
        $p = $pDAO->carregarPorId($idPrioridade);
?>
<form action="../controller/alterar_prioridade.php" method="POST">
    <div class="mb-3">
      <label for="" class="form-label">Nome da Prioridade</label>
      <input type="hidden" name="id_prioridade" value="<?=$p->getIdPrioridade() ?>"/>
      <input type="text" class="form-control" name="nome" id="nome" value="<?=$p->getNome() ?>" aria-describedby="" required>
    </div>
    <button type="reset" class="btn btn-primary">Voltar</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</body>
</html>