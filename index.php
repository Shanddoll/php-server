<?php

require_once('Ator.php'); // importa o arquivo Ator.php
require_once('config_db.php');

$ator_obj = new Ator($connection); // cria um objeto da classe Ator

 // chama o método get_atores()
$lista_atores = $ator_obj->get_atores();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página Inicial</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/206/206982.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Navbar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Biblioteca para gerar o card -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/profile_card.css">
</head>

<body>

    <!-- HTML Bootstrap Navbar para gerar o menu superior -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="https://cdn-icons-png.flaticon.com/512/206/206982.png" height="28" alt="CoolBrand">
            </a>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Início</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Atores</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prêmiações Anteriores
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">2021</a></li>
                        <li><a href="#">2020</a></li>
                        <li><a href="#">2019</a></li>
                    </ul>
                </li>
                <li><a href="pagina_de_cadastro.php">Cadastrar ator</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquisar..." name="search">
                </div>
                <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <!-- HTML Bootstrap Navbar para gerar o menu superior -->

    <div class="container">

        <!-- Início do foreach para gerar vários cards de atores dinamicamente-->
        <?php foreach ($lista_atores as $ator) : ?>

            <!-- HTML para gerar um card de um ator-->
            <div class="card card0" style="background-image: url('<?php echo $ator['img']; ?>')">
                <div class="border">
                    <h2><?= $ator['nome']; ?></h2>
                    <div class="icons">
                        <a class="fa fa-home" href="index.php"></a>
                        <a class="fa fa-instagram" aria-hidden="true" href="<?= $ator['insta']; ?>" target="_blank"></a>
                        <a class="fa fa-wikipedia-w" aria-hidden="true" href="<?= $ator['wiki']; ?>" target="_blank"></a>
                        <a class="fa fa-imdb" aria-hidden="true" href="<?= $ator['imdb']; ?>" target="_blank"></a>
                    </div>
                </div>
            </div>
            <!-- HTML para gerar um card de um ator-->

        <?php endforeach; ?>
        <!-- Fim do foreach para gerar vários cards de atores dinamicamente-->

    </div>

</body>

</html>