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
   </head>
   <body>
      <nav class="navbar navbar-expand-sm navbar-dark bgc-purpledark">
         <div class="container">
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
      <div class="container mt-5">
         <div class="row">
            <div class="col-7">
            <div bgcolor="#fbfbfb" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<head>
    <title> Economatica
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>



<table width="700" cellspacing="0" cellpadding="0" bgcolor="#fff" border="0" align="center">
    <tr>
        <td width="700" height="30">
        </td>
    </tr>
</table>
<table width="700" bgcolor="#ffffff" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td border="0" bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="50" align="center">

            <img src="http://martinluz.com/clientes/economatica/emkt/20190701-insights/images/icon_logo.png" width="50" height="50" alt="facebook">

        </td>
    </tr>
</table>

<table width="700" cellspacing="0" cellpadding="0" bgcolor="#fff" border="0" align="center">
    <tr>
        <td width="700" height="30">
        </td>
    </tr>
</table>

<gerador width="600"></gerador>


<table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td width="700" height="50" bgcolor="#ffffff">
        </td>

</table>







<table bgcolor="#fbfbfb" width="700" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>

        <td width="640" bgcolor="#ffffff" align="center">
            <font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 14px; color: #4a4a4a; line-height: 1.69; text-decoration: none; ">
                Receba nossos estudos pelas redes sociais.
            </font>

        </td>
    </tr>
</table>

<table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td width="700" height="10" bgcolor="#ffffff">
        </td>

</table>


<table width="700" cellspacing="0" cellpadding="0" bgcolor="#ffffff" border="0" align="center">
    <tr>
        <td width="236" height="29"></td>
        <td border="0" cellpadding="0" cellspacing="0" width="29" height="29">
            <a href="https://www.facebook.com/Economatica-235736809784091">
                <img src="http://martinluz.com/clientes/economatica/emkt/20190701-insights/images/icon_facebook.png" width="29" height="29" alt="facebook">
            </a>
        </td>
        <td width="20" height="29"></td>
        <td border="0" cellpadding="0" cellspacing="0" width="30" height="29">
            <a href="https://www.linkedin.com/company/economatica---software-de-apoio-a-investidores/">
                <img src="http://martinluz.com/clientes/economatica/emkt/20190701-insights/images/icon_linkedin.png" width="30" height="29" alt="linkedin">
            </a>
        </td>
        <td width="20" height="29"></td>
        <td border="0" cellpadding="0" cellspacing="0" width="29" height="29">
            <a href="http://economatica.com/">
                <img src="http://martinluz.com/clientes/economatica/emkt/20190701-insights/images/icon_link.png" width="29" height="29" alt="Economatica">
            </a>
        </td>
        <td width="236" height="29"></td>
    </tr>
</table>
<table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td width="700" height="20" bgcolor="#ffffff">
        </td>

</table>
<table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
    <tr>
        <td border="0" cellpadding="0" cellspacing="0" display: "block" width="700" height="50"></td>
    </tr>
</table>

</div>
            </div>
            <div class="col-5">
               <form id="FormSerialize">
                  <div class="container">
                     <div class="row">
                        <div class="col-3 p-1">            
                           <button type="button" id="AddInput" class="btn btn-primary mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple  w-100">
                           <img src="../../assets/img/icons/addinput.svg?5" width="20">
                           </button>
                        </div>
                        <div class="col-4 p-1">
                           <button type="submit" class="btn btn-primary mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple w-100 gerar">GERAR</button>
                        </div>
                        <div class="col-5 p-1">
                           <button type="button" class="btn btn-primary baixar mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple w-100"><img src="../../assets/img/icons/download.svg" alt="" width="20"></button>
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
      <script src="./main.js?t00"></script>
      <script src="../../assets/js/download.js?t"></script>
   </body>
</html>