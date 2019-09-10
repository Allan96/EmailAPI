var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
}

function RenderImagem(imagem) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">' +
        '<td width="19"></td>' +
        '<td width="600">' +
        '<center><img src="' + imagem + '" alt="" style="max-width: 550px;display:block; border:none; padding:none; margin:none; "></center> <br>' +
        '</td>' +
        '<td width="19"></td>' +
        '</table>';
}

function RenderTitutlo(value) {
    return '<table width="550"cellspacing="0" id="titulo"  cellpadding="0" border="0" align="center"  style="max-width: 550px;"><tbody><tr><td width="40" height="2"></td><td width="100" height="2"><img width="100" height="2" src="http://martinluz.com/clientes/economatica/emkt/20190429-estudo/images/line.png" alt="" style="display:block; border:none; padding:none; margin:none;"></td><td width="460" height="20"></td></tr></tbody></table><table width="600" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="40"></td><td width="520"  class="titulo" ><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 18px; color: #4a4a4a; line-height: 1.5; text-decoration: none;"><div class="titulo"> <b>' + value + '</b> </div></font> </td><td width="40"></td></tr></tbody></table>';
}

function RenderTexto(value) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="40"></td><td width="520"><br><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 13px; color: #4a4a4a; line-height: 1.69; text-decoration: none; "><div class="texto">' + value + '</div></font> <br><br></td><td width="40"></td></tr></tbody></table>'
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

function TextFooter(textfinal) {
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

$('#AddInput').click(function(e) {

    $('#FormSerialize').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"<option selected>Titulo</option><option value="Texto">Texto</option><option value="Imagem">Imagem</option><option value="Titulo">Titulo</option><option value="Link">Botao</option><option value="TFooter">Texto Footer</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto" style="height: 38px;"></textarea></div>');
    i++;

});

$("#FormSerialize").submit(function(event) {
    event.preventDefault();
    var data = $('#FormSerialize').serializeArray();
    var Cont = 0;
    $('gerador').html('');
    while (Cont < data.length) {
        if (data[Cont]["name"] == 'Titulo') {
            var tabelas = RenderTitutlo(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Texto') {
            var tabelas = RenderTexto(data[Cont]["value"].replace(/\n/g, '<br>'));
        } else if (data[Cont]["name"] == 'Imagem') {
            var tabelas = RenderImagem(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Link') {
            var tabelas = RenderLink(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'TFooter') {
            var tabelas = TextFooter(data[Cont]["value"]);
        }
        $('gerador').append(tabelas.replace(/info@economatica.com.br/g, '<a href="mailto:info@economatica.com.br" target="_blank">info@economatica.com.br</a>'));

        Cont++;
    }
    tinymce.init({
        selector: '.titulo',
        inline: true
    });
    tinymce.init({
        selector: '.texto',
        inline: true
    });
    console.log(data);
});


$('.baixar').click(function() {
    var d = new Date();
    var name = d.getFullYear() + '-' + d.getDate() + '-' + d.getDate() + '-' + 'estudo';

    var body = document.getElementById("email");
    download(body.outerHTML.replace(/contenteditable="true"/g, 'a').replace(/<img/g, '<img style="max-width: 100%;"'), name + ".html", "text/html");
});