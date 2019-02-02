<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tech Vault</title>

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
      <header>
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">About</h4>
                  <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                  <h4 class="text-white">Contact</h4>
                  <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Follow on Twitter</a></li>
                    <li><a href="#" class="text-white">Like on Facebook</a></li>
                    <li><a href="#" class="text-white">Email me</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
              <a href="../index.html" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" focusable="false" aria-hidden="true"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Tech Vault</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
        </header>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../img/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Tech Vault</h2>
    <!-- <p class="lead">Exercício</p> -->
  </div>

  <div class="row">
    
    <div class="col-md-10 order-md-1 offset-md-1">
      <h4 class="mb-3">Cadastro de Combos</h4>
      <form action="combo.php" method="POST" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="personagem">Personagem</label>
                <select name="idPersonagem" class="custom-select d-block w-100" id="personagem" required>
                <?php
                  require_once '../bd/ConexaoBD.php';

                  $conexao = new ConexaoBD();

                  $result = $conexao->query("SELECT id, name FROM personagem");

                  if ($result){
                    foreach($result as $row){
                      echo '<option value="'. $row['id'] . '">'. $row['name'] . '</option>';
                    }
                  }

                  $conexao = null;
                ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid character.
              </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="description">Descrição</label>
                <input name="description" type="text" class="form-control" id="nome" placeholder="Combo simples com barra positiva" value="" required>
                <div class="invalid-feedback">
                  Descrição é obrigatório.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="instructions">Instruções</label>
                <input name="instructions" type="text" class="form-control" id="instructions" placeholder="Chute médio -> Hadouken" value="" required>
                <div class="invalid-feedback">
                  Instruções é obrigatório.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="dmgTotal">Dano Total</label>
                <input name="dmgTotal" type="text" class="form-control" id="dmgTotal" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Dano total é obrigatório.
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="custo">Custo</label>
                <input name="custo" type="text" class="form-control" id="custo" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Custo é obrigatório.
                </div>
            </div>
        </div>

        <input type="hidden" value="adicionar" name="acao">
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2018 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="../js/jquery-3.3.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>
      </body>
</html>