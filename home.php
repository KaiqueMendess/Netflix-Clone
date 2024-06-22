<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Netflix</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
    <!-- Inicio Do Hero -->
    <div class="header">

        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>

        <!-- menu -->
        <div class="menu">

        <!-- menu left -->
        <div class="menu-left">
            <ul>
                <li>Inicio</li>
                <li>Séries</li>
                <li>Filmes</li>
                <li>Recentes</li>
                <li>Minha Lista</li>
            </ul>
        </div> <!-- fim do menu left -->

        <div class="menu-right">
            <ul>
                <li> <i class="fas fa-search" ></i> </li>
                <li>Infantil</li>
                <li> <i class="fas fa-gift" ></i> </li>
                <li> <i class="fas fa-bell" ></i> </li>
                <li class="user">
                    <img src="img/user.png" alt="">
                    <i class="fas fa-sort-down"></i>
                </li>
            </ul>
        </div> <!-- Fecha menu -->

        </div>

    </div>
</div>

</body>
</html>