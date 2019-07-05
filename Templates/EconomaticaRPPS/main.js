var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
}

function RenderImagemHeader(imagem) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td border="0" cellpadding="0" cellspacing="0" width="700"><img src="' + imagem + '" width="700" alt=""></td></tr></table><table width="700" cellspacing="0" bgcolor="#ffffff" cellpadding="0" border="0" align="center"><tr><td border="0" height="20" cellpadding="0" cellspacing="0" width="700" align="center"></td></tr></table>';
}

function RenderImagem(imagem) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff"><tr><td border="0" cellpadding="0" cellspacing="0" width="700"><center><img src="' + imagem + '" style="max-width: 570px;display:block; border:none; padding:none; margin:none; "></td></tr></table><table width="700" cellspacing="0" bgcolor="#ffffff" cellpadding="0" border="0" align="center"><tr><td border="0" height="20" cellpadding="0" cellspacing="0" width="700" align="center"></td></tr></table>';
}

function RenderTexto(value) {
    return '<table bgcolor="#fbfbfb" width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tr><td width="60" bgcolor="#ffffff"></td><td width="640" bgcolor="#ffffff"><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 16px; color: #707070; line-height: 1.69; text-decoration: none;"><br><br>' + value + '</font></td></tr></table> <table width="700" cellspacing="0" bgcolor="#ffffff" cellpadding="0" border="0" align="center"><tr><td border="0" height="20" cellpadding="0" cellspacing="0" width="700" align="center"></td></tr></table>'
}

function RenderLink(linkpost) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff"><tr><td border="0" cellpadding="0" cellspacing="0" width="700" align="center"><a href="' + linkpost + '"><img src="http://martinluz.com/clientes/economatica/emkt/20190514-rpps/images/03.png" width="575" height="60" alt="facebook"></a></td></tr></table><table width="700" cellspacing="0" bgcolor="#ffffff" cellpadding="0" border="0" align="center"><tr><td border="0" height="50" cellpadding="0" cellspacing="0" width="700" align="center"></td></tr></table>';
}

$('#AddInput').click(function(e) {
    $('#FormSerialize').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"><option value="Texto">Texto</option><option value="HImagem">Header Imagem</option><option value="Imagem">Imagem</option><option value="Link">Botao</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto" style="height: 38px;"></textarea></div>');
    i++;

});

$("#FormSerialize").submit(function(event) {
    event.preventDefault();
    var data = $('#FormSerialize').serializeArray();
    var Cont = 0;
    $('gerador').html('');
    while (Cont < data.length) {
        if (data[Cont]["name"] == 'HImagem') {
            var tabelas = RenderImagemHeader(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Texto') {
            var tabelas = RenderTexto(data[Cont]["value"].replace(/\n/g, '<br>'));
        } else if (data[Cont]["name"] == 'Imagem') {
            var tabelas = RenderImagem(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Link') {
            var tabelas = RenderLink(data[Cont]["value"]);
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