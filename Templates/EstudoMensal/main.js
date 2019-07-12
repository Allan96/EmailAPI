var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
    if (type == 'Lista') {
        $("textarea#" + id).val('TITULO <//> TEXTO <//> LINK <//> IMAGEM');
    }
}

function RenderHeaderImagem(imagem) {
    return ' <table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td border="0" cellpadding="0" cellspacing="0" width="700"><img src="' + imagem + '" width="700" height="287"></td></tr></table><table width="700" cellspacing="0" cellpadding="0" bgcolor="#fff" border="0" align="center"><tr></tr></tr><td width="700" height="30"></td></tr></table> <table width="700" cellspacing="0" cellpadding="0" bgcolor="#fff" border="0" align="center"><tr><td width="700" height="30"></td></tr></table>';
}


function RenderTexto(value) {
    return '<table bgcolor="#fbfbfb" width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td width="60" bgcolor="#ffffff"></td><td width="580" bgcolor="#ffffff"><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 14px; color: #4a4a4a; line-height: 1.69; text-decoration: none; ">' + value + '</b></font></td><td width="60" bgcolor="#ffffff"></td></tr></table><table width="700" cellspacing="0" cellpadding="0" bgcolor="#fff" border="0" align="center"><tr><td width="700" height="30"></td></tr></table>'
}

function RenderList(titulo, texto, link, imagem) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td width="60" bgcolor="#ffffff"></td><td border="0" cellpadding="0" cellspacing="0" width="10" bgcolor="#fff"></td><td width="402" bgcolor="#fff"><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 16px; color: #707070; line-height: 1.5; text-decoration: none;"><span style="color: #006b66 "><b>' + titulo + '<br></span></b><span style="font-size: 14px;">' + texto + '</span><br><a href="' + link + '" target="_blank" style="text-decoration: none; color: #c49900; font-size: 14px; font-style: italic; " >Continue lendo ></a></font></td><td border="0" cellpadding="0" cellspacing="0" width="262"><a href="' + link + '"target="_blank" border="0" style="color: #000"><img src="' + imagem + '" width="262" height="173"></a></td></tr></table><table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td width="700" height="20" bgcolor="#ffffff"></td></table>'
}

function RenderLink(linkpost) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff"><tr><td width="700" height="80" bgcolor="#ffffff"></td></table><table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="60" height="55"> </td><td width="580" height="55"><a href="' + linkpost + '" target="_blank"><img src="http://martinluz.com/clientes/economatica/emkt/20190701-insights/images/cta.png" alt="Learn more" style="display:block; border:none; padding:none; margin:none;"></a></td><td width="60" height="55"> </td></tr></tbody></table>';
}

$('#AddInput').click(function(e) {

    $('#FormSerialize').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"><option value="Texto">Texto</option><option value="HImagem">Header Imagem</option><option value="Lista">Lista</option><option value="Link">Botao</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto" style="height: 38px;"></textarea></div>');
    i++;

});

$("#FormSerialize").submit(function(event) {
    event.preventDefault();
    var data = $('#FormSerialize').serializeArray();
    var Cont = 0;
    $('gerador').html('');
    while (Cont < data.length) {
        if (data[Cont]["name"] == 'Texto') {
            var tabelas = RenderTexto(data[Cont]["value"].replace(/\n/g, '<br>'));
        } else if (data[Cont]["name"] == 'HImagem') {
            var tabelas = RenderHeaderImagem(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Link') {
            var tabelas = RenderLink(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Lista') {
            var array = data[Cont]["value"].split('<//>');
            // console.log(array[1]);
            var tabelas = RenderList(array[0], array[1], array[2], array[3]);
        }
        $('gerador').append(tabelas.replace(/info@economatica.com.br/g, '<a href="mailto:info@economatica.com.br" target="_blank">info@economatica.com.br</a>'));

        Cont++;
    }


    console.log(data);
});
$('.baixar').click(function() {
    var d = new Date();
    var name = d.getFullYear() + '-' + d.getDate() + '-' + d.getDate() + '-' + 'estudo';

    var body = document.getElementById("email");
    download(body.outerHTML, name + ".html", "text/html");
});