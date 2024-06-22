<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:php/index.php');
  }

$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">

    <!--responsividade-->
    <link rel="stylesheet" href="style/responsive.css">

    <!--owl css-->
    <link rel="stylesheet" href="style/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="style/owl/owl.theme.default.min.css">
    <link rel="shortcut icon" href="img/netflix.png" type="image/x-icon" />

    <title>NETFLIX</title>
</head>
<body>
         <header>
        <div class="container">
            <img class="logo" src="img/logo.png">
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Séries</a>
                <a href="#">Filmes</a>
                <a href="#">Documentários</a>
                <a href="logout.php">Sair</a>
                <?php
                echo" Olá $logado";
                ?>

                
                
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
                <div class="item">
                    <img class="box-filme" src="img/lancamento1.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento2.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento3.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento4.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento5.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento6.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento7.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento8.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento9.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/lancamento10.jpg" alt="" srcset="">
                </div>
        </div>
    </div>
    
    
    <div class="carrosel-filmes2">
        <h2>Filmes</h2>
        <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="box-filme" src="img/filme1.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme2.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme3.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme4.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme5.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme6.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme7.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme8.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme9.jpg" alt="" srcset="">
                </div>
                <div class="item">
                    <img class="box-filme" src="img/filme10.jpg" alt="" srcset="">
                </div>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="js/owl/jquery.min.js"></script>
    <script src="js/owl/owl.carousel.min.js"></script>
    <script src="js/owl/setup.js"></script>
 

 
</body>
</html>