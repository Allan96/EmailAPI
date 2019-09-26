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
                        <meta charset="utf-8">
                        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center" style="border: solid 1px #b9d3d1;">
                            <tbody>
                                <tr>
                                    <td>
                                        <!-- GERAR EMAIL -->
                                        <gerador width="550">

                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-2 collapsed" align="center" id="tableId-0" data-toggle="collapse" aria-controls="collapse0" aria-expanded="false" data-target="#collapse0" style="background: rgb(179, 231, 248);">
                                                <tr>
                                                    <td border="0" cellpadding="0" cellspacing="0" display:="" width="350" height="50" class="header-0-0" style="background: rgb(1, 75, 135);">
                                                        <div class="texto text-0 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_7" contenteditable="true" spellcheck="false">
                                                            <p style="padding-left: 40px;"><span style="font-size: 36px; color: rgb(255, 255, 255); text-decoration: none;" data-mce-style="font-size: 36px; color: #ffffff; text-decoration: none;"><br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="VOCÊ" data-mce-index="0">VOCÊ</span>                                                                <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="JÁ" data-mce-index="1">JÁ</span></span><br><span style="font-size: 36px; color: rgb(255, 255, 255); text-decoration: none;"
                                                                    data-mce-style="font-size: 36px; color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="CONHECE" data-mce-index="2">CONHECE</span></span><br>
                                                                <span style="color: rgb(255, 206, 0); text-decoration: none;" data-mce-style="color: #ffce00; text-decoration: none;"><strong><span style="font-size: 36px;" data-mce-style="font-size: 36px;">A <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="RESOLUÇÃO" data-mce-index="3">RESOLUÇÃO</span></span>
                                                                </strong>
                                                                </span><br>
                                                                <span style="color: rgb(255, 206, 0); text-decoration: none;" data-mce-style="color: #ffce00; text-decoration: none;"><strong><span style="font-size: 36px;" data-mce-style="font-size: 36px;">2174/17?<br><br></span></strong>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td border="0" cellpadding="0" cellspacing="0" display:="" width="250" height="50" class="header-0-1" style="background: rgb(179, 231, 248); text-align: center;">
                                                        <img src="https://i.imgur.com/rJt9dFq.png" alt="" class="imagemHeader-0-1" style="width: 100px;margin: 15px;"></td>
                                                </tr>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-3 collapsed" align="center" id="tableId-1" data-toggle="collapse" aria-controls="collapse1" aria-expanded="false" data-target="#collapse1">
                                                <tbody>
                                                    <tr>
                                                        <td align="left"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0; display:block;" class="imagem-1-1"> </td>
                                                        <td width="20"></td>
                                                        <td style="max-width: 520px;">
                                                            <div class="texto text-3 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_10" contenteditable="true" spellcheck="false">
                                                                <p><span style="font-size: 18px; color: rgb(0, 75, 135);" data-mce-style="font-size: 18px; color: #004b87;"><br>A <strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="resolução" data-mce-index="0">resolução</span>                                                                    2174/2017 <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="que" data-mce-index="1">que</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="revoga" data-mce-index="2">revoga</span> a 1802/2006</strong> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="tem"
                                                                        data-mce-index="3">tem</span> <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="como" data-mce-index="4">como</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="objetivo" data-mce-index="5">objetivo</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="reforçar"
                                                                        data-mce-index="6">reforçar</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="e" data-mce-index="7">e</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="atualizar" data-mce-index="8">atualizar</span> as <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1"
                                                                        data-mce-word="tecnologias" data-mce-index="9">tecnologias</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="que" data-mce-index="10">que</span>                                                                    <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="promovem" data-mce-index="11">promovem</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="maior" data-mce-index="12">maior</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="segurança" data-mce-index="13">segurança</span>                                                                    do <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="paciente" data-mce-index="14">paciente</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="durante" data-mce-index="15">durante</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="o" data-mce-index="16">o</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="ato" data-mce-index="17">ato</span> <br><span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="anestésico" data-mce-index="18">anestésico</span>.<br><br> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Como"
                                                                        data-mce-index="19">Como</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="parte" data-mce-index="20">parte</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="integrante" data-mce-index="21">integrante</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1"
                                                                        data-mce-word="das" data-mce-index="22">das</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="soluções" data-mce-index="23">soluções</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="na" data-mce-index="24">na</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="área" data-mce-index="25">área</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="da" data-mce-index="26">da</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="saúde" data-mce-index="27">saúde</span>, <br>a <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="Medtronic" data-mce-index="28">Medtronic</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="entende"
                                                                        data-mce-index="29">entende</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="seu" data-mce-index="30">seu</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="compromisso" data-mce-index="31">compromisso</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1"
                                                                        data-mce-word="e" data-mce-index="32">e</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="está" data-mce-index="33">está</span> <br>
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="empenhada" data-mce-index="34">empenhada</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="junto" data-mce-index="35">junto</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="aos" data-mce-index="36">aos</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="profissionais" data-mce-index="37">profissionais</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="38">para</span>
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="auxiliar" data-mce-index="39">auxiliar</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="na" data-mce-index="40">na</span> <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="adoção" data-mce-index="41">adoção</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="das" data-mce-index="42">das</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="tecnologias" data-mce-index="43">tecnologias</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="recomendadas"
                                                                        data-mce-index="44">recomendadas</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="na" data-mce-index="45">na</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="resolução" data-mce-index="46">resolução</span>, <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1"
                                                                        data-mce-word="como" data-mce-index="47">como</span>
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="o" data-mce-index="48">o</span> <strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="BIS" data-mce-index="49">BIS</span></strong>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="50">para</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="monitorização" data-mce-index="51">monitorização</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="da"
                                                                        data-mce-index="52">da</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="profundidade" data-mce-index="53">profundidade</span> <br>
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="anestésica" data-mce-index="54">anestésica</span>, <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="o" data-mce-index="55">o</span> <strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="WarmTouch" data-mce-index="56">WarmTouch</span></strong>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="57">para</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="manutenção" data-mce-index="58">manutenção</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="da" data-mce-index="59">da</span>                                                                    <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="normotermia" data-mce-index="60">normotermia</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="e" data-mce-index="61">e</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="o"
                                                                        data-mce-index="62">o</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="nosso" data-mce-index="63">nosso</span> <span class="mce-spellchecker-word"
                                                                        aria-invalid="spelling" data-mce-bogus="1" data-mce-word="videolaringoscópio" data-mce-index="64">videolaringoscópio</span> <strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="McGrath" data-mce-index="65">McGrath</span>®</strong>                                                                    <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="66">para</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="maior" data-mce-index="67">maior</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="rapidez" data-mce-index="68">rapidez</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="e" data-mce-index="69">e</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="segurança" data-mce-index="70">segurança</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="na" data-mce-index="71">na</span>                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="intubação" data-mce-index="72">intubação</span>. <br><br><strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Acesse" data-mce-index="73">Acesse</span> a <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="resolução" data-mce-index="74">resolução</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="completa" data-mce-index="75">completa</span> no link <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="abaixo" data-mce-index="76">abaixo</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="77">para</span> <br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="entender" data-mce-index="78">entender</span> as novas <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="exigências" data-mce-index="79">exigências</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="e" data-mce-index="80">e</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="conte" data-mce-index="81">conte</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="conosco" data-mce-index="82">conosco</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="para" data-mce-index="83">para</span> <br>a <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="introdução" data-mce-index="84">introdução</span>, <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="ampliação" data-mce-index="85">ampliação</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="e" data-mce-index="86">e</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="educação" data-mce-index="87">educação</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="clínica" data-mce-index="88">clínica</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="das" data-mce-index="89">das</span><br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="nossas" data-mce-index="90">nossas</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="tecnologias" data-mce-index="91">tecnologias</span> em <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="seu" data-mce-index="92">seu</span> hospital.</strong><br><br></span>
                                                                </p>
                                                            </div>

                                                        </td>
                                                        <td width="20" class="ultimo"></td>
                                                        <td align="right">
                                                            <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0;display:block;" class="imagem-1-2"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-4 collapsed" align="center" id="tableId-2" data-toggle="collapse" aria-controls="collapse2" aria-expanded="false" data-target="#collapse2">
                                                <tbody style="margin: 30px 0;">
                                                    <tr>
                                                        <td width="24" height="58" bgcolor="#FFFFFF"></td>


                                                        <td width="491" height="58" align="center" class="tableButtonInsere-2" style="margin: 10px 0;display: block;">
                                                            <a href="https://www.medtronic.com/br-pt/index.html" target="_blank" class="button buttonComponent-2" style="text-transform: uppercase;background: #009ae0;color: white;padding: 10px 20px;font-weight: bold;text-decoration: none!important;">CONFIRA</a>
                                                        </td>


                                                        <td width="25" height="58" bgcolor="#FFFFFF"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-5 collapsed" align="center" id="tableId-3" data-toggle="collapse" aria-controls="collapse3" aria-expanded="false" data-target="#collapse3" style="background: rgb(102, 204, 255);">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" style="-"><img src="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/07.jpg" style="max-width: 178px; padding-right: 15px; opacity: 1; display: block;" class="imagem-3-1"> </td>
                                                        <td width="10"></td>
                                                        <td style="max-width: 520px;word-break: break-word;">
                                                            <div class="texto text-3 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_11" contenteditable="true" spellcheck="false">
                                                                <p><span data-mce-style="font-size: 18px; color: #ffffff; text-decoration: none;" style="font-size: 18px; color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="BIS" data-mce-index="0">BIS</span>™<br>MONITOR
                                                                    DO&nbsp;
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="NÍVEL" data-mce-index="1">NÍVEL</span><br>DE&nbsp;<span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="CONSCIÊNCIA" data-mce-index="2">CONSCIÊNCIA</span><br><span data-mce-style="color: #004b87; text-decoration: none;" style="color: #004b87; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="QUALIDADE" data-mce-index="3">QUALIDADE</span>&nbsp;
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="E" data-mce-index="4">E</span>&nbsp;<span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="SEGURANÇA" data-mce-index="5">SEGURANÇA</span> NA&nbsp;<br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="MONITORIZAÇÃO"
                                                                        data-mce-index="6">MONITORIZAÇÃO</span>&nbsp;<br>DE <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="PARÂMETROS" data-mce-index="7">PARÂMETROS</span>&nbsp;DO&nbsp;
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="PACIENTE" data-mce-index="8">PACIENTE</span>
                                                                    </span>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td width="10" class="ultimo"></td>
                                                        <td align="right">
                                                            <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0; display: block;" class="imagem-3-2"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-6 collapsed" align="center" id="tableId-4" data-toggle="collapse" aria-controls="collapse4" aria-expanded="false" data-target="#collapse4" style="background: rgb(1, 75, 135);">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" style="-"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0;display: block;" class="imagem-4-1"> </td>
                                                        <td width="10"></td>
                                                        <td style="max-width: 520px;word-break: break-word;">
                                                            <div class="texto text-4 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_12" contenteditable="true" spellcheck="false">
                                                                <p><span data-mce-style="font-size: 18px; color: #ffffff; text-decoration: none;" style="font-size: 18px; color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="WARMTOUCH" data-mce-index="0">WARMTOUCH</span>™<br><br></span>
                                                                    <span data-mce-style="font-size: 18px; color: #ffffff; text-decoration: none;" style="font-size: 18px; color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="SISTEMA" data-mce-index="1">SISTEMA</span>&nbsp;DE
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="AQUECIMENTO" data-mce-index="2">AQUECIMENTO</span><br></span><span data-mce-style="font-size: 18px; color: #00ccff; text-decoration: none;"
                                                                        style="font-size: 18px; color: #00ccff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="PARA" data-mce-index="3">PARA</span>&nbsp;
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="MANUTENÇÃO" data-mce-index="4">MANUTENÇÃO</span>
                                                                    </span><span data-mce-style="font-size: 18px; color: #00ccff; text-decoration: none;" style="font-size: 18px; color: #00ccff; text-decoration: none;">DA&nbsp;<span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="NORMOTERMIA" data-mce-index="5">NORMOTERMIA</span></span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td width="10" class="ultimo"></td>
                                                        <td align="right">
                                                            <img src="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/13.jpg" style="max-width: 178px; padding-left: 15px; opacity: 1; display: block;" class="imagem-4-2"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-7 collapsed" align="center" id="tableId-5" data-toggle="collapse" aria-controls="collapse5" aria-expanded="false" data-target="#collapse5" style="background: rgb(102, 204, 255);">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" style="-"><img src="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/14.jpg" style="max-width: 178px; padding-right: 15px; opacity: 1; display: block;" class="imagem-5-1"> </td>
                                                        <td width="10"></td>
                                                        <td style="max-width: 520px;word-break: break-word;">
                                                            <div class="texto text-5 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_13" contenteditable="true" spellcheck="false">
                                                                <p><span style="color: rgb(255, 255, 255); text-decoration: none;" data-mce-style="color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="McGRATH" data-mce-index="0">McGRATH</span>®
                                                                    MAC <br></span><br><span style="color: rgb(255, 255, 255); text-decoration: none;" data-mce-style="color: #ffffff; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="VIDEOLARINGOSCÓPIO" data-mce-index="1">VIDEOLARINGOSCÓPIO</span>                                                                    </span><span data-mce-style="color: #005c97; text-decoration: none;" style="color: #005c97; text-decoration: none;"><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="ESTEJA" data-mce-index="2">ESTEJA</span>&nbsp;
                                                                    <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="PREPARADO" data-mce-index="3">PREPARADO</span> <span class="mce-spellchecker-word" aria-invalid="spelling"
                                                                        data-mce-bogus="1" data-mce-word="PARA" data-mce-index="4">PARA</span>&nbsp;O&nbsp;<br><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="INESPERADO"
                                                                        data-mce-index="5">INESPERADO</span></span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td width="10" class="ultimo"></td>
                                                        <td align="right">
                                                            <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0; display: block;" class="imagem-5-2"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-8 collapsed" align="center" id="tableId-6" data-toggle="collapse" aria-controls="collapse6" aria-expanded="false" data-target="#collapse6">
                                                <tbody>
                                                    <tr>
                                                        <td><img src="https://i.imgur.com/6ceN0c3.png" style="max-width: 550px; width: 550px;display:block;" class="footer-6 imagem-6-2"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </gerador>
                                        <!-- GERAR EMAIL -->


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody>
                                <tr>
                                    <td border="0" cellpadding="0" cellspacing="0" display:="" "block"="" width="550" height="50"></td>
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
                                    <button type="button" id="AddInput" class="btn btn-primary mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple  w-100">Adicionar </button>
                                </div>
                                <div class="col-3 p-1">
                                    <button type="button" class="btn btn-primary baixar mb-2 upper bgc-purple bdc-purple bold c-white py-3 btn-purple w-100">Download</button>
                                </div>
                                <div class="col-6 p-1">
                                    <iframe src="../../upload.php" frameborder="0"></iframe>
                                </div>
                                <div class="col-12 p-1">
                                    <div class="accordion" id="accordion">

                                        <div class="card clone-2" id="0">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(0)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(2)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse0" class="collapse" aria-labelledby="0" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" value="header" name="header-text" id="tipo-0" onchange="onchangeType(this.value, 0)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-0" style="display: none;">
                                                        <input type="color" class="form-control cor-0-0" name="cor" id="cor-0" idtable="0" table-src="tableId-0" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                                                    </div>
                                                    <div class="form-group cor-header-0" style="">
                                                        Parte 1 Header
                                                        <input type="color" value="rgb(1, 75, 135)" class="form-control cor-0-0" name="cor" id="cor-0" idtable="0" table-src="tableId-0" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-0" style="">
                                                        Parte 2 Header
                                                        <input type="color" value="rgb(179, 231, 248)" class="form-control cor-0-1" name="cor" id="cor-0" idtable="0" table-src="tableId-0" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="imagem" value="https://i.imgur.com/rJt9dFq.png" id="imagem-0" placeholder="Imagem" onchange="onchangeImage(this.value, 0)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-0" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 0)" style="display: none">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-0" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 0)" style="display: none">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-3" id="1">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(1)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(3)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse1" class="collapse" aria-labelledby="1" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-1" onchange="onchangeType(this.value, 1)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-1" style="">
                                                        <input type="color" class="form-control cor-1-0" name="cor" id="cor-1" idtable="1" table-src="tableId-1" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)" style="display: none;">
                                                    </div>
                                                    <div class="form-group cor-header-1" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-1-0" name="cor" id="cor-1" idtable="1" table-src="tableId-1" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-1" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-1-1" name="cor" id="cor-1" idtable="1" table-src="tableId-1" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="imagem" id="imagem-1" placeholder="Imagem" onchange="onchangeImage(this.value, 1)" style="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-1" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 1)" style="display: none;">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-1" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 1)" style="display: none;">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-4" id="2">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(2)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(4)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse2" class="collapse" aria-labelledby="2" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-2" onchange="onchangeType(this.value, 2)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-2" style="display: none;">
                                                        <input type="color" class="form-control cor-2-0" name="cor" id="cor-2" idtable="2" table-src="tableId-2" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                                                    </div>
                                                    <div class="form-group cor-header-2" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-2-0" name="cor" id="cor-2" idtable="2" table-src="tableId-2" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-2" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-2-1" name="cor" id="cor-2" idtable="2" table-src="tableId-2" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="imagem" id="imagem-2" placeholder="Imagem" onchange="onchangeImage(this.value, 2)" style="display: none;">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-2" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 2)" style="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-2" placeholder="Texto do botão" value="Confira" onchange="onchangeButtonText(this.value, 2)" style="">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-5" id="3">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(3)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(5)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse3" class="collapse" aria-labelledby="3" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-3" onchange="onchangeType(this.value, 3)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-3">
                                                        <input type="color" class="form-control cor-3-0" name="cor" id="cor-3" idtable="3" table-src="tableId-3" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                                                    </div>
                                                    <div class="form-group cor-header-3" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-3-0" name="cor" id="cor-3" idtable="3" table-src="tableId-3" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-3" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-3-1" name="cor" id="cor-3" idtable="3" table-src="tableId-3" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/07.jpg" name="imagem" id="imagem-3" placeholder="Imagem" onchange="onchangeImage(this.value, 3)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-3" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 3)" style="display: none">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-3" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 3)" style="display: none">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-6" id="4">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(4)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(6)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse4" class="collapse" aria-labelledby="4" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-4" onchange="onchangeType(this.value, 4)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-4">
                                                        <input type="color" class="form-control cor-4-0" name="cor" id="cor-4" idtable="4" table-src="tableId-4" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                                                    </div>
                                                    <div class="form-group cor-header-4" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-4-0" name="cor" id="cor-4" idtable="4" table-src="tableId-4" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-4" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-4-1" name="cor" id="cor-4" idtable="4" table-src="tableId-4" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" value="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/13.jpg" class="form-control" name="imagem" id="imagem-4" placeholder="Imagem" onchange="onchangeImage(this.value, 4)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-4" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 4)" style="display: none">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-4" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 4)" style="display: none">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-7" id="5">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(5)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(7)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse5" class="collapse" aria-labelledby="5" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-5" onchange="onchangeType(this.value, 5)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-5">
                                                        <input type="color" class="form-control cor-5-0" name="cor" id="cor-5" idtable="5" table-src="tableId-5" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                                                    </div>
                                                    <div class="form-group cor-header-5" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-5-0" name="cor" id="cor-5" idtable="5" table-src="tableId-5" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-5" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-5-1" name="cor" id="cor-5" idtable="5" table-src="tableId-5" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="imagem" value="http://clientes.martinluz.com.br/medtronic/emkt/20181019-resolucao/images/13.jpg" id="imagem-5" placeholder="Imagem" onchange="onchangeImage(this.value, 5)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-5" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 5)" style="display: none">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-5" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 5)" style="display: none">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card clone-8" id="6">
                                            <div class="card-header">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Tabela </button>
                                                </h2>
                                                <div onclick="deleteItem(6)">
                                                    <img src="../../assets/img/icons/delete.svg" alt="">
                                                </div>
                                                <div onclick="cloneItem(8)" style="display: none;">
                                                    <img src="../../assets/img/icons/clone.svg" alt="">
                                                </div>

                                            </div>
                                            <div id="collapse6" class="collapse" aria-labelledby="6" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <select class="form-control" name="header-text" id="tipo-6" onchange="onchangeType(this.value, 6)">
                                    <option value="text">Texto</option>
                                    <option value="header">Header</option>
                                    <option value="button">Botão</option>
                                    <option value="footer">Footer</option>
                                </select>
                                                    </div>
                                                    <div class="form-group cor-texto-input-6">
                                                        <input type="color" class="form-control cor-6-0" name="cor" id="cor-6" idtable="6" table-src="tableId-6" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)" style="display: none;">
                                                    </div>
                                                    <div class="form-group cor-header-6" style="display: none">
                                                        Parte 1 Header
                                                        <input type="color" class="form-control cor-6-0" name="cor" id="cor-6" idtable="6" table-src="tableId-6" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                                                    </div>
                                                    <div class="form-group cor-header-6" style="display: none">
                                                        Parte 2 Header
                                                        <input type="color" class="form-control cor-6-1" name="cor" id="cor-6" idtable="6" table-src="tableId-6" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="https://i.imgur.com/6ceN0c3.png" name="imagem" id="imagem-6" placeholder="Imagem" onchange="onchangeImage(this.value, 6)">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botao-6" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 6)" style="display: none">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="botao" id="botaoText-6" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 6)" style="display: none">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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