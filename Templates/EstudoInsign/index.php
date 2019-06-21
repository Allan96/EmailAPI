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
         <div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" id="email">
            <!-- HTML 4 -->
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <!-- HTML5 -->
            <meta charset="utf-8" />
            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center" style="border: solid 1px #b9d3d1;">
               <tr>
                  <td>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="20">
                           </td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="275" height="50"></td>
                           <td width="50" height="50">
                              <img width="50" height="50" src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/icon_logo.png" alt="economatica" style="display:block; border:none; padding:none; margin:none;">
                           </td>
                           <td width="275" height="50"></td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="30">
                           </td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="15">
                           </td>
                        </tr>
                     </table>
                     <!-- GERAR EMAIL -->
                     <gerador width="600">
                     </gerador>
                     <!-- GERAR EMAIL -->
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="70">
                           </td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="40" height="39">
                           </td>
                           <td width="233" height="39">
                              <a href="https://economatica.com/" target="_blank">
                              <img src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/logo_full.jpg" alt="" width="239" height="48" style="display:block; border:none; padding:none; margin:none;">
                              </a>
                           </td>
                           <td width="375" height="39">
                           </td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="50">
                           </td>
                        </tr>
                     </table>
                     <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tr>
                           <td width="600" height="70">
                              <img width="600" height="70" src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/pattern.png" alt="" style="display:block; border:none; padding:none; margin:none;">
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
               <tr>
                  <td border="0" cellpadding="0" cellspacing="0" display: "block" width="600" height="60" colspan="17" bgcolor="#FFFFFF" style=" font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #4a4a4a;  text-align: center;">Receba nossos estudos pelas redes sociais.</td>
               </tr>
            </table>
            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
               <tr>
                  <td width="236" height="29"></td>
                  <td border="0" cellpadding="0" cellspacing="0" width="29" height="29">
                     <a href="https://www.facebook.com/Economatica-235736809784091">
                     <img src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/icon_facebook.png" width="29" height="29" alt="facebook">
                     </a>
                  </td>
                  <td width="20" height="29"></td>
                  <td border="0" cellpadding="0" cellspacing="0" width="30" height="29">
                     <a href="https://www.linkedin.com/company/economatica---software-de-apoio-a-investidores/">
                     <img src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/icon_linkedin.png" width="30" height="29" alt="linkedin">
                     </a>
                  </td>
                  <td width="20" height="29"></td>
                  <td border="0" cellpadding="0" cellspacing="0" width="29" height="29">
                     <a href="http://economatica.com/">
                     <img src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/icon_link.png" width="29" height="29" alt="Economatica">
                     </a>
                  </td>
                  <td width="236" height="29"></td>
               </tr>
            </table>
            <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
               <tr>
                  <td border="0" cellpadding="0" cellspacing="0" display: "block" width="600" height="50"></td>
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
<script src="./main.js?t"></script>
<script src="../../assets/js/download.js?t"></script>


</body>
</html>