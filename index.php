<?php

// Definindo uma constante do tipo int
define("QTD_QUESTOES", 1);

// Definindo uma constante do tipo String
define("ASSUNTO", 'PHP & MySQL - obtendo os elementos do banco de dados.');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Página Inicial</title>
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/e/e8/Education%2C_Studying%2C_University%2C_Alumni_-_icon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/menu.css">

</head>

<body>

  <div class="container p-3 my-3 border">

    <div class="card mb-3">
      <div class="card-header">
        <div class="row no-gutters">
          <div class="col-2 pt-2">
            <a href="https://www.ifpb.edu.br/"><img src="img/ifpb.png" class="img-fluid" alt="IFPB"></a>
          </div>
          <div class="col text-center">
            <h2 class="card-title">Instituto Federal da Paraíba</h2>
            <h4 class="card-subtitle">Desenvolvimento de Aplicações Web II</h4>
            <p class="card-text my-1">
              <strong>Professor:</strong> Felipe Barbosa Araújo Ramos.
            </p>
            <p class="card-text">
              <strong>Assunto:</strong> <?= ASSUNTO ?>
            </p>
            <p class="card-text mt-n2 mb-n3">
              <small class="text-muted">felipe.ramos@ifpb.edu.br</small>
            </p>
          </div>
        </div>
      </div>
    </div>

    <p><strong>Atenção!</strong> Cada card abaixo representa uma questão que deve ser resolvida.</p>

    <div class="card-columns">
      <!-- Início do for para gerar vários cards de questões -->
      <?php for ($i = 1; $i <= QTD_QUESTOES; $i++) : ?>

        <!-- HTML para gerar um card de uma questão-->
        <div class="card bg-light">
          <div class="card-body text-center">
            <p class="card-text"><a href="q<?php echo $i; ?>.php"><strong>Questão <?php echo $i; ?></strong></a></p>
          </div>
        </div>
        <!-- HTML para gerar um card de uma questão-->

      <?php endfor; ?>
      <!-- Fim do for para gerar vários cards de questões -->

    </div>
  </div>

</body>

</html>