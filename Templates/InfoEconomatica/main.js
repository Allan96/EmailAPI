var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
}

function RenderTexto(value) {
    return '<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF"><tr><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="92" width="75"></td><td align="center" valign="top" border="0" height="92" width="37"></td><td align="left" valign="top" border="0" height="92" width="633"><font style="font-family:   Arial, Helvetica, sans-serif; color: #7f7f7f; font-size: 19px; line-height: 1.6; text-align: right; font-weight: 400;">' + value + '</font></td><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="92" width="75"></td></tr></table><!--ESPAÇO--><table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f8f8f8"><tr><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75"></td><td bgcolor="#FFFFFF" align="center" valign="top" border="0" height="50" width="670"></td><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="50" width="75"></td></tr></table>'
}


function RenderAssinatura(value) {
    return '<table width="820" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#FFFFFF"><tr><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="92" width="75"></td><td align="left" valign="top" border="0" width="159"><img src="http://martinluz.com/clientes/economatica/emkt/20181203-info/images/06.png" width="159" height="102" alt="brfinancial" style="display: block; border: none; padding: none; margin: none;"></td><td align="left" valign="top" border="0" width="511"><font style="font-family:   Arial, Helvetica, sans-serif; color: #7f7f7f; font-size: 20px; line-height: 1.6; text-align: right; font-weight: 400;">' + value + '</font></td><td bgcolor="#f8f8f8" align="center" valign="top" border="0" height="92" width="75"></td></tr></table>'
}

$('#AddInput').click(function(e) {
    $('#FormSerialize').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"><option value="Texto">Texto</option><option value="Assinatura">Assinatura</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto" style="height: 38px;"></textarea></div>');
    i++;
});

$("#FormSerialize").submit(function(event) {
    event.preventDefault();
    var data = $('#FormSerialize').serializeArray();
    var Cont = 0;
    $('gerador').html('');
    while (Cont < data.length) {
        if (data[Cont]["name"] == 'Texto') {
            var tabelas = RenderTexto(data[Cont]["value"]);
        } else if (data[Cont]["name"] == 'Assinatura') {
            var tabelas = RenderAssinatura(data[Cont]["value"]);
        }
        $('gerador').append(tabelas.replace(/\n/g, '<br>').replace(/info@economatica.com.br/g, '<a href="mailto:info@economatica.com.br" target="_blank">info@economatica.com.br</a>'));

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