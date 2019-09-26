<?php
   require('../../sistema/classes.php');
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
        <link rel="stylesheet" href="../../assets/css/main.css?<?php echo date('sDmHh'); ?>">
        <script src="https://cdn.tiny.cloud/1/6l34p72f1whv5p6ebtaxf93wi7z41vndv3c1razr34mknojl/tinymce/5/tinymce.min.js"></script>
    </head>

    <body>
        <style>
            img {
                max-width: 100%;
            }
        </style>
        <nav class="navbar navbar-expand-sm navbar-dark bgc-purpledark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../"><img src="../../assets/img/icons/icon_email.svg" alt="" width="32"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link upper" href="../../">Painel</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link upper" href="../../sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-8">
                    <div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" id="email" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva;font-size: 18px;">
                        <!-- HTML 4 -->
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <!-- HTML5 -->
                        <meta charset="utf-8" />
                        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center" style="border: solid 1px #b9d3d1;">
                            <tr>
                                <td>
                                    <!-- GERAR EMAIL -->
                                    <gerador width="550">
                                    </gerador>
                                    <!-- GERAR EMAIL -->


                                </td>
                            </tr>
                        </table>
                        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr>
                                <td border="0" cellpadding="0" cellspacing="0" display: "block" width="550" height="50"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <form id="FormSerialize">
                        <div class="container">
                            <div class="row">
                                <div class="col-3 p-1">
                                    <button type="button" id="AddInput" class="btn btn-primary mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple  w-100"><img src="../../assets/img/icons/addinput.svg?5" width="20"></button>
                                </div>
                                <div class="col-3 p-1">
                                    <button type="button" class="btn btn-primary baixar mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple w-100"><img src="../../assets/img/icons/download.svg" alt="" width="20"></button>
                                </div>
                                <div class="col-6 p-1">
                                    <iframe src="../../upload.php" frameborder="0"></iframe>
                                </div>
                                <div class="col-12 p-1">
                                    <div class="accordion" id="accordion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p>
                    </p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="./main.js?<?php echo date('sDmHh'); ?>"></script>
        <script src="../../assets/js/download.js?t"></script>
    </body>

    </html>