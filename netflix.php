<?php
session_start();

// Verifica se a sessão 'login' e 'senha' estão definidas
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: php/index.php'); // Redireciona para a página de login
    exit(); // Encerra o script para evitar que o restante da página seja carregado
}

$logado = $_SESSION['login']; // Obtém o nome do usuário logado
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet" href="style/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="style/owl/owl.theme.default.min.css">
    <link rel="shortcut icon" href="img/netflix.png" type="image/x-icon" />
    <title>NETFLIX</title>
</head>
<body>
    <header>
        <div class="container">
            <img class="logo" src="img/logo.png" alt="Netflix Logo">
            <nav>
                <a href="#">Início</a>
                <a href="#">Séries</a>
                <a href="#">Filmes</a>
                <a href="#">Documentários</a>
                <a href="logout.php">Sair</a>
                <span>Olá <?php echo $logado; ?></span>
            </nav>
        </div>
    </header>
  
    <main>
        <div class="filme-principal">
            <div class="container">
                <h3 class="titulo">GODZILLA VS KONG</h3>
                <p class="descricao"></p>
                <div class="botoes">
                    <button role="button" class="botao">
                        <i class="fas fa-play"></i>
                        <a href="teste.html">Assistir</a>
                    </button>
                    <button role="button" class="botao">
                        <i class="fas fa-info-circle"></i>
                        Mais Informações
                    </button>
                </div>
            </div>
        </div>
    </main>

    <div class="carrosel-filmes">
        <h2>Lançamentos</h2>
        <div class="owl-carousel owl-theme">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="item">
                    <img class="box-filme" src="img/lancamento<?php echo $i; ?>.jpg" alt="Lançamento <?php echo $i; ?>">
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="carrosel-filmes2">
        <h2>Filmes</h2>
        <div class="owl-carousel owl-theme">
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <div class="item">
                    <img class="box-filme" src="img/filme<?php echo $i; ?>.jpg" alt="Filme <?php echo $i; ?>">
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="js/owl/jquery.min.js"></script>
    <script src="js/owl/owl.carousel.min.js"></script>
    <script src="js/owl/setup.js"></script>
</body>
</html>
