<?php
require('./sistema/classes.php');
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

<body>
<?php EmailAPI::Login(); ?>
    <section class="login bgc-purpledark">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-6 align-self-center text-center   fadeInLeft animated">
                    <img src="./assets/img/icons/icon_email.svg" alt="" width="64" class="mb-3">
                    <h1 class="c-white bold upper">Bem vindo ao emailAPI</h1>
                    <legend class="c-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam excepturi illum beatae at</legend>
                    <form action="" method="post">
                        <div class="form-group mt-5">
                            <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" id="senha" aria-describedby="helpId" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary upper bgc-purple bdc-purple bold c-white w-100 py-3 btn-purple mt-3">Acessar sistema</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html