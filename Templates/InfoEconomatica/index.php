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
      <div class="col-9">
      <div bgcolor="#f8f8f8" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!--LOGO-->
<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f8f8f8">
    <tr>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="670">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75">

        </td>

    </tr>

</table>


<!--ESPACO-->
<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF">
    <tr>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="20" width="75">

        </td>
        <td align="center" valign="top" border="0" width="670">

            <img src="http://martinluz.com/clientes/economatica/emkt/20181203-info/images/03.png" width="670" height="27" alt="brfinancial" style="display: block; border: none; padding: none; margin: none;">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="20" width="75">

        </td>
    </tr>
</table>

<gerador></gerador>



<!--BORDA-->
<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f8f8f8">
    <tr>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="20" width="75">

        </td>
        <td align="center" valign="top" border="0" width="820">

            <img src="http://martinluz.com/clientes/economatica/emkt/20181203-info/images/08.png" width="670" height="35" alt="brfinancial" style="display: block; border: none; padding: none; margin: none;">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="20" width="75">

        </td>
    </tr>
</table>
<!--ESPACO-->
<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f8f8f8">
    <tr>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="670">

        </td>
        <td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75">

        </td>

    </tr>

</table>

</div>
      </div>
      <div class="col-3">
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
<script src="./main.js?ta"></script>
<script src="../../assets/js/download.js?t"></script>


</body>
</html>