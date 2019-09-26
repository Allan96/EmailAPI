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
                            <tbody><tr>
                                <td>
                                    <!-- GERAR EMAIL -->
                                    <gerador width="550">
                                    
        <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-21 collapsed" align="center" id="tableId-10" data-toggle="collapse" aria-controls="collapse10" aria-expanded="false" data-target="#collapse10" style="background: rgb(179, 231, 248);"><tr>
                <td border="0" cellpadding="0" cellspacing="0" display:="" width="350" height="50" class="header-10-0" style="background: rgb(1, 75, 135);">
                    <div class="texto text-10 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_7" contenteditable="true" spellcheck="false"><p style="padding-left: 80px;"><span style="color: rgb(0, 204, 255); text-decoration: none;" data-mce-style="color: #00ccff; text-decoration: none;"><strong><span style="font-size: 36px;" data-mce-style="font-size: 36px;"><br>BLUE</span></strong></span><br><span style="color: rgb(0, 204, 255); text-decoration: none;" data-mce-style="color: #00ccff; text-decoration: none;"><strong><span style="font-size: 36px;" data-mce-style="font-size: 36px;">ROAD</span></strong></span><br><span style="color: rgb(185, 217, 235);" data-mce-style="color: #b9d9eb;"><strong><span style="font-size: 36px;" data-mce-style="font-size: 36px;">HEM</span></strong></span></p></div>
                </td>
                <td border="0" cellpadding="0" cellspacing="0" display:="" width="250" height="50" class="header-10-1" style="background: rgb(179, 231, 248); text-align: center;">
                    <img src="https://i.imgur.com/rJt9dFq.png" alt="" class="imagemHeader-10-1" style="width: 100px;margin: 15px;"></td>
            </tr></table>
        <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-22" align="center" id="tableId-11" data-toggle="collapse" aria-controls="collapse11" aria-expanded="true" data-target="#collapse11">
            <tbody>
                <tr>
                <td align="left" style="-"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0;display: block;" class="imagem-11-1"> </td>
                <td width="10"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto text-11 mce-content-body" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; line-height: 1.2; text-decoration: none; position: relative;" id="mce_8" contenteditable="true" spellcheck="false"><p><span style="font-size: 18px; color: rgb(0, 75, 135); text-decoration: none;" data-mce-style="font-size: 18px; color: #004b87; text-decoration: none;"><strong><br>Data:</strong> 20/09/2019</span></p><p><span style="font-size: 18px; color: rgb(0, 75, 135); text-decoration: none;" data-mce-style="font-size: 18px; color: #004b87; text-decoration: none;"><strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Horário" data-mce-index="0">Horário</span>:</strong> 15h20 <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="ás" data-mce-index="1">ás</span> 16h20</span></p><p><span style="font-size: 18px; color: rgb(0, 75, 135); text-decoration: none;" data-mce-style="font-size: 18px; color: #004b87; text-decoration: none;"><strong>Local:</strong> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Sala" data-mce-index="0">Sala</span> 1 do Terminal <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Marítimo" data-mce-index="1">Marítimo</span> de <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Passageitos" data-mce-index="2">Passageitos</span> (Local do <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="CBCP" data-mce-index="3">CBCP</span>).</span></p><p><span style="font-size: 18px; color: rgb(0, 75, 135); text-decoration: none;" data-mce-style="font-size: 18px; color: #004b87; text-decoration: none;"><strong><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Coordenação" data-mce-index="0">Coordenação</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Cientifíca" data-mce-index="1">Cientifíca</span>:</strong> Dr <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Sérgio" data-mce-index="2">Sérgio</span> <span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="Regadas" data-mce-index="3">Regadas</span><br><br><br></span></p></div>
                </td>
                <td width="10" class="ultimo"></td>
                <td align="right">
                    <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0; display: block;" class="imagem-11-2"> </td>
                </tr>
            </tbody>
        </table>
        <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-23 collapsed" align="center" id="tableId-12" data-toggle="collapse" aria-controls="collapse12" aria-expanded="false" data-target="#collapse12"><tbody>
                <tr>
                <td><img src="https://i.imgur.com/6ceN0c3.png" style="max-width: 550px; width: 550px;display:block;" class="footer-12 imagem-12-2"> </td>
                </tr>
            </tbody>
            </table></gerador>
                                    <!-- GERAR EMAIL -->


                                </td>
                            </tr>
                        </tbody></table>
                        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody><tr>
                                <td border="0" cellpadding="0" cellspacing="0" display:="" "block"="" width="550" height="50"></td>
                            </tr>
                        </tbody></table>
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
                                    
        <div class="card clone-21" id="10">
                <div class="card-header">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">Tabela </button>
                    </h2>
                    <div onclick="deleteItem(10)"> 
                    <img src="../../assets/img/icons/delete.svg" alt="">
                    </div>
                    <div onclick="cloneItem(21)" style="display: none;"> 
                    <img src="../../assets/img/icons/clone.svg" alt="">
                    </div>
                   
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="10" data-parent="#accordion" style="">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control" name="header-text" id="tipo-10" onchange="onchangeType(this.value, 10)">
                                <option value="text">Texto</option>
                                <option value="header">Header</option>
                                <option value="button">Botão</option>
                                <option value="footer">Footer</option>
                            </select>
                        </div>
                        <div class="form-group cor-texto-input-10" style="display: none;">
                            <input type="color" class="form-control cor-10-0" name="cor" id="cor-10" idtable="10" table-src="tableId-10" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                        </div>
                        <div class="form-group cor-header-10" style="">
                        Parte 1 Header
                            <input type="color" class="form-control cor-10-0" name="cor" id="cor-10" idtable="10" table-src="tableId-10" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                        </div>
                        <div class="form-group cor-header-10" style="">
                        Parte 2 Header
                            <input type="color" class="form-control cor-10-1" name="cor" id="cor-10" idtable="10" table-src="tableId-10" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="imagem" id="imagem-10" placeholder="Imagem" onchange="onchangeImage(this.value, 10)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="botao" id="botao-10" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 10)" style="display: none">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="botao" id="botaoText-10" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 10)" style="display: none">
                    </div>
                        
                    </div>
                </div>
            </div>
        <div class="card clone-22" id="11">
                <div class="card-header">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">Tabela </button>
                    </h2>
                    <div onclick="deleteItem(11)"> 
                    <img src="../../assets/img/icons/delete.svg" alt="">
                    </div>
                    <div onclick="cloneItem(22)" style="display: none;"> 
                    <img src="../../assets/img/icons/clone.svg" alt="">
                    </div>
                   
                </div>
                <div id="collapse11" class="collapse show" aria-labelledby="11" data-parent="#accordion" style="">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control" name="header-text" id="tipo-11" onchange="onchangeType(this.value, 11)">
                                <option value="text">Texto</option>
                                <option value="header">Header</option>
                                <option value="button">Botão</option>
                                <option value="footer">Footer</option>
                            </select>
                        </div>
                        <div class="form-group cor-texto-input-11">
                            <input type="color" class="form-control cor-11-0" name="cor" id="cor-11" idtable="11" table-src="tableId-11" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)">
                        </div>
                        <div class="form-group cor-header-11" style="display: none">
                        Parte 1 Header
                            <input type="color" class="form-control cor-11-0" name="cor" id="cor-11" idtable="11" table-src="tableId-11" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                        </div>
                        <div class="form-group cor-header-11" style="display: none">
                        Parte 2 Header
                            <input type="color" class="form-control cor-11-1" name="cor" id="cor-11" idtable="11" table-src="tableId-11" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="imagem" id="imagem-11" placeholder="Imagem" onchange="onchangeImage(this.value, 11)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="botao" id="botao-11" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 11)" style="display: none">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="botao" id="botaoText-11" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 11)" style="display: none">
                    </div>
                        
                    </div>
                </div>
            </div>
        <div class="card clone-23" id="12">
                <div class="card-header">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">Tabela </button>
                    </h2>
                    <div onclick="deleteItem(12)"> 
                    <img src="../../assets/img/icons/delete.svg" alt="">
                    </div>
                    <div onclick="cloneItem(23)" style="display: none;"> 
                    <img src="../../assets/img/icons/clone.svg" alt="">
                    </div>
                   
                </div>
                <div id="collapse12" class="collapse" aria-labelledby="12" data-parent="#accordion" style="">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control" name="header-text" id="tipo-12" onchange="onchangeType(this.value, 12)">
                                <option value="text">Texto</option>
                                <option value="header">Header</option>
                                <option value="button">Botão</option>
                                <option value="footer">Footer</option>
                            </select>
                        </div>
                        <div class="form-group cor-texto-input-12">
                            <input type="color" class="form-control cor-12-0" name="cor" id="cor-12" idtable="12" table-src="tableId-12" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 5)" style="display: none;">
                        </div>
                        <div class="form-group cor-header-12" style="display: none">
                        Parte 1 Header
                            <input type="color" class="form-control cor-12-0" name="cor" id="cor-12" idtable="12" table-src="tableId-12" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 0)">
                        </div>
                        <div class="form-group cor-header-12" style="display: none">
                        Parte 2 Header
                            <input type="color" class="form-control cor-12-1" name="cor" id="cor-12" idtable="12" table-src="tableId-12" placeholder="Cor" onchange="onchangeCor(this.value, this.id, 1)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="imagem" id="imagem-12" placeholder="Imagem" onchange="onchangeImage(this.value, 12)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="botao" id="botao-12" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, 12)" style="display: none">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="botao" id="botaoText-12" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, 12)" style="display: none">
                    </div>
                        
                    </div>
                </div>
            </div></div>
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