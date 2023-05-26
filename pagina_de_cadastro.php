<?php
require_once('valida_dados.php');
require_once('Ator.php'); // importa o arquivo Ator.php
require_once('config_db.php');

$ator_obj = new Ator($connection);


if (isset($_POST['cadastrar'])){
    $nome = validar_dados($_POST['nome']);
    $insta = validar_dados($_POST['insta']);
    $img = validar_dados($_POST['img']);
    $wiki = validar_dados($_POST['wiki']);  
    $imdb = validar_dados($_POST['imdb']); 
    
    $ator_obj->insert_ator($nome, $insta, $img, $wiki, $imdb);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Ator</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/206/206982.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Navbar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <!-- HTML Bootstrap Navbar para gerar o menu superior -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <a href="q1.php" class="navbar-brand">
                <img src="https://cdn-icons-png.flaticon.com/512/206/206982.png" height="28" alt="CoolBrand">
            </a>
            <div class="navbar-header">
                <a class="navbar-brand" href="q1.php">Início</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Atores</a></li>
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

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="container">
            <h1>Cadastro de Ator</h1>
            <p>Por favor, preencha este formulário para inserir um novo ator no banco de dados.</p>
            <hr>

            <div class="form-group">
                <label for="nome"><b>Nome </b></label>
                <input type="text" placeholder="Insira o nome do ator" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="insta"><b>Instagram</b></label>
                <input type="text" placeholder="Insira o Instagram do ator" name="insta" id="insta" required>
            </div>

            <div class="form-group">
                <label for="img"><b>Foto</b></label>
                <input type="text" placeholder="Insira a foto do ator" name="img" id="img" required>
            </div>

            <div class="form-group">
                <label for="wiki"><b>Link da Wikpédia</b></label>
                <input type="text" placeholder="Insira o link da wikipédia" name="wiki" id="wiki" required>
            </div>

            <div class="form-group">
                <label for="imdb"><b>Link do IMDB</b></label>
                <input type="text" placeholder="Insira o link do IMDB" name="imdb" id="imdb" required>
            </div>

            <hr>
            <p>Este site é protegido pelo hCaptcha e está sujeito a sua <a href="#">Politica de Privacidade</a> e <a href="#">Termos de Uso</a>.</p>

            <button type="submit" class="registerbtn" name="cadastrar">Cadastrar</button>
        </div>


    </form>

</body>

</html>