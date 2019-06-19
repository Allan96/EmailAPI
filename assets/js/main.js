$('.erro span').click(function() {
    $('.erro').css('top', '-45px');
});

$('.box').click(function(e) {
    e.preventDefault();
    $("#modalEmail").load('./sistema/emails.php?tipo=EstudoValue');

});



$('.box').click(function(e) {
    e.preventDefault();
    var id = '#modalEmail',
        menuHeight = $('nav').innerHeight(),
        targetOffset = $(id).offset().top;
    $('html, body').animate({
        scrollTop: targetOffset - 50
    }, 1500);
});


$('.baixar').click(function() {
    var d = new Date();
    var name = d.getFullYear() + '-' + d.getDate() + '-' + d.getDate() + '-' + 'estudo';

    var body = document.getElementById("email");
    download(body.outerHTML, name + ".html", "text/html");
});




function RenderImagem(imagem) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<td width="600" height="374">' +
        '<center><img src="' + imagem + '" alt="Quantidade de empresas" style="max-width: 600px;display:block; border:none; padding:none; margin:none; "></center>' +
        '</td>' +
        '<td width="19" height="374"></td>' +
        '</table>';
}

function RenderText(titulo, texto, imagem) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<tr>' +
        '<td width="40" height="2"></td>' +

        '<td width="100" height="2"><img width="100" height="2" src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/line.png" alt="" style="display:block; border:none; padding:none; margin:none;"></td>' +

        '<td width="460" height="20"></td>' +
        '</tr>' +
        '</table>' +
        '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<tr>' +
        '<td width="40"></td>' +
        '<td width="520">' +
        '<font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; color: #4a4a4a; line-height: 1.5; text-decoration: none;"><b>' +
        titulo + '</b>' +
        '</font><br><br>' +
        '<font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 13px; color: #4a4a4a; line-height: 1.69; text-decoration: none; ">' +
        texto + '</font> <br><br>' +
        '</td>' +
        '<td width="40"></td>' +
        '</tr>' + imagem +
        '</table>' +
        '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<tr>' +
        '<td width="600" height="15">' +
        '</td>' +
        '</tr>' +
        '</table>';
}

function RenderLink(linkpost) {
    return '<table width="650" cellspacing="0" cellpadding="0" border="0" align="center">' +
        ' <tbody>' +
        ' <tr>' +
        ' <td width="70" height="70">' +
        ' </td>' +
        '  <td width="255" height="100">' +
        '     <a href="' + linkpost + '" target="_blank">' +
        '     <img src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/btn.png" alt="" style="display:block; border:none; padding:none; margin:none;">' +
        '      </a>' +
        '    </td>' +
        ' </tr>' +
        '</tbody>' +
        ' </table>';
}



function TextFinal(textfinal) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<tr>' +
        ' <td width="40"></td>' +
        '<td width="520">' +
        '<font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; color: #4a4a4a; line-height: 1.5; text-decoration: none;">' +
        '</font>' +
        '<br>' +
        '<br>' +
        '<font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 13px; color: #4a4a4a; line-height: 1.69; text-decoration: none; ">' +
        textfinal +
        '<br><br>' +
        '</font>' +
        ' </td>' +
        '<td width="40"></td>' +
        '</tr>' +
        '</table>' +
        '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<tr>' +
        '<td width="600" height="20">' +
        '</td>' +
        '</tr>' +
        ' </table>';
}

$.ajax({
    type: 'GET',
    url: 'https://api.sheetson.com/v1/sheets/LivingQuality?spreadsheetId=1SK4NJIpVlqIHxY2Jivpf1aDuVdJsiguS1AJiFlDWs4U',
    data: { get_param: 'value' },
    dataType: 'json',
    success: function(data) {
        var i = 0;
        while (i < data['results'].length) {
            //DEFINE AS VARIAVEIS
            var url = data['results'][i]['URL'];
            var textofinal = data['results'][i]['TFinal'];

            if (data['results'][i]['Imagem'] != 'nulo') { var imagem = RenderImagem(data['results'][i]['Imagem']); } else { var imagem = ''; }
            var tabelas = RenderText(data['results'][i]['Titulo'], data['results'][i]['Texto'].replace(/\n/g, '<br>'), imagem);

            //GERA AS TABELAS
            $('gerador').append(tabelas);
            //CONTADOR
            i++;
        }
        console.log(TextFinal(textofinal))
        $('gerador').append(TextFinal(textofinal));
        $('gerador').append(RenderLink(url));
    }
});