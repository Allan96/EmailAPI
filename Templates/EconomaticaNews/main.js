var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
}

function HeaderImagem(imagem) {
    return '<table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="700"><img width="700" src="' + imagem + '" alt="economatica"style="display:block; border:none; padding:none; margin:none;"></td></tr></tbody></table><table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="700" height="30"></td></tr></tbody></table>';
}

function RenderTitutlo(value) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td border="0" cellpadding="0" cellspacing="0" display:="" "block"="" width="520"><font style=" font-family: Arial, Helvetica, sans-serif; color: #00867f; font-size: 30px; line-height: 1.30">' + value + '</font></td></tr></tbody></table><table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="700" height="30"></td></tr></tbody></table>';
}

function RenderTexto(value) {
    return '<table width="600" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="520"><font style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva; font-size: 15px; color: #3A3A3A; line-height: 1.7; text-decoration: none;">' + value + '</font></td></tr></tbody></table>'
}

function RenderLink(linkpost) {
    return ' <table width="605" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="605" height="72"><a href="' + linkpost + '" target="_blank"><img src="http://clientes.martinluz.com.br/economatica/emkt/value-reports-img/find-out-how.jpg" alt="Learn more" style="display:block; border:none; padding:none; margin:none;"></a></td></tr></tbody></table><table width="700" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="700" height="80"></td></tr></tbody></table>';
}

$('#AddInput').click(function(e) {
    $('#FormSerialize').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"><option value="Texto">Texto</option><option value="HeaderImagem">Header Imagem</option><option value="Titulo">Titulo</option><option value="Link">Botao</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto" style="height: 38px;"></textarea></div>');
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
        } else if (data[Cont]["name"] == 'HeaderImagem') {
            var tabelas = HeaderImagem(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Link') {
            var tabelas = RenderLink(data[Cont]["value"]);
        }
        $('gerador').append(tabelas);

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