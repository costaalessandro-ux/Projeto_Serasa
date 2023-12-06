<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/listaChamado.css" media="screen" />
    <title>Document</title>
    <script lang="javascript">
            function excluir(codChamado, nome) {
                if (confirm("Tem certeza que deseja excluir este chamado ?")) {
                    window.open("../controller/excluir_chamado.php?cod_chamado=" + codChamado);
                }
            }
            function alterar(codChamado, nome) {
                if (confirm("Tem certeza que deseja alterar este chamado ?")) {
                    window.open("form_alterar_chamado.php?cod_chamado=" + codChamado, "_self");
                }
            }
        </script>
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
<h2 style="text-align: center;">Historico de Chamados</h2>
<div id="form">
    <table>
        <thead>
          <tr>
            <th scope="col">Chamado</th>
            <th scope="col">Descrição</th>
            <th scope="col">Horario</th>
            <th scope="col">Data</th>
            <th scope="col">Status</th>
            <th scope="col">Prioridade</th>
            <th scope="col">Categoria</th>
            <th scope="col">Criado por</th>
            <th cosplan="2">Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include_once "../model/chamadoDAO.php";
            $chamadoDAO = new ChamadoDAO();
            $lista = array();
            $lista = $chamadoDAO->listar();
            foreach ($lista as $c) {
            ?>
          <tr>
            <td><?=$c->nome?></td>
            <td><?=$c->descricao?></td>
            <td><?=$c->horario?></td>
            <td><?=$c->data?></td>
            <td><?=$c->fkIdStatus->nome?></td>
            <td><?=$c->fkIdPrioridade->nome?></td>
            <td><?=$c->fkIdCategoria->nome?></td>
            <td><?=$c->fkIdUsuario->nome?></td>
            <td><a href="#" onclick="alterar(<?= $c->codChamado ?>, '<?= $c->nome ?>')"><button type="submit" class="btn btn-primary"> Alterar </button></a>     
            <a href="#" onclick="excluir(<?= $c->codChamado ?>, '<?= $c->nome ?>')"><button type="submit" class="btn btn-danger"> Excluir </button></a></td> 
          </tr>
              <?php
            }
        ?>
        </tbody>
      </table>
      <div style="text-align: center;">
      <a href="form_criar_chamado.php"><button type="submit" class="btn btn-primary"> Criar novo Chamado </button></a>
          </div>
          </div>
    </body>
</html>