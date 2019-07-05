<?php
require('./sistema/classes.php');
EmailAPI::estaLogado();
?>
<!doctype html>
<html lang="en">
<head>
    <title>EmailAPI - Automatizando processos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/main.css?<?php echo date('sDmHh'); ?>">

</head>
<body class="bgc-purpledark">
<nav class="navbar navbar-expand-sm navbar-dark bgc-purpledark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./assets/img/icons/icon_email.svg" alt="" width="32"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link upper" href="#">Painel</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link upper" href="./sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>