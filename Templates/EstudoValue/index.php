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
      <div class="col-8">
         
<div bgcolor="#FBFBFB" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" id="email">
<head>
    <title> 
        Economatica
    </title>

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

    <tbody>
        <tr>
            <td>
                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="700" height="30" align="center">

                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td align="center" height="50" border="0" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 14px; color: #ffffff; line-height: 1.5; text-decoration: none;">
                                <img src="http://clientes.martinluz.com.br/economatica/emkt/value-reports-img/valuereport-logo.png" width="145" alt="Value Report">
                                <font valign="" style=" vertical-align: super; font-family: Arial, Helvetica, sans-serif; color: #3A3A3A; font-size: 14px; line-height: 1.30">&nbsp; &nbsp; Economatica
                                </font>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="700" height="20">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table width="700" bgcolor="#ffffff" cellspacing="0" cellpadding="0" border="0" align="center" style="border: solid 1px #ECECEC;">

                    <tbody>
                        <tr>
                            <td>

                                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td width="700" height="30">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td width="350">
                                                <img width="350" src="http://clientes.martinluz.com.br/economatica/emkt/value-reports-img/logo_full.jpg" alt="economatica"
                                                    style="display:block; border:none; padding:none; margin:none;">
                                            </td>
                                            <td width="40" height="80">


                                            </td>
                                            <td width="29" height="50">
                                                <a href="https://www.linkedin.com/company/25077461/" target="_blank">
                                                    <img width="29" height="29" src="http://clientes.martinluz.com.br/economatica/emkt/value-reports-img/linkedin.jpg" alt="economatica"
                                                        style="display:block; border:none; padding:none; margin:none;">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td width="700" height="30">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>



                                <gerador></gerador>

                                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td width="700" height="70">
                                                <img width="698" height="225" src="http://clientes.martinluz.com.br/economatica/emkt/value-reports-img/footer.png" alt=""
                                                    style="display:block; border:none; padding:none; margin:none;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table width="700" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                        <tr>
                            <td width="700" height="40">
                            </td>
                        </tr>
                    </tbody>
                </table>


</div>


      </div>
      <div class="col-4">
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
<script src="./main.js?t1"></script>
<script src="../../assets/js/download.js?t"></script>


</body>
</html>