<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/tela_inicial.css" media="screen" />
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
                <a class="nav-link active" aria-current="page" href="pedido.html">Criar novo chamado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tela_inicial.html">Chamados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html" >Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Status</th>
            <th cosplan="2">Alterar</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include_once "../model/statusDAO.php";
            // put your code here
            $statusDAO = new StatusDAO();
            $lista = array();
            $lista = $statusDAO->listar();
            foreach ($lista as $s) {
            ?>
          <tr>
            <td><?= $s->nome ?></td>
            <td>
            <a href="form_alterar_status.php?id_status=<?=$s->idStatus?>"><button type="submit" class="btn btn-primary">Alterar</button></a>
            <a href="../controller/excluir_status.php?id_status=<?=$s->idStatus?>"><button type="submit" class="btn btn-primary">Excluir</button></a>  
            </td> 
            </tr>
              <?php
            }
        ?>
        </tbody>
      </table>
      <a href="form_cria_status.php"><button type="submit" class="btn btn-primary"> Criar novo Status </button></a>
</body>
</html>