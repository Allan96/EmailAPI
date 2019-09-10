var i = 0;

function TypeChange(type, id) {
    $("textarea#" + id).attr("name", type);
}

function Header(value) {
    return '<table width="550" cellspacing="0" cellpadding="0" border="0" align="center" style="background: url(' + value + ');background-repeat: no-repeat;">' +
        '<td width="550">' +
        '<center><img src="' + value + '" alt="" style="max-width: 550px;width: 550px; display:block; border:none; padding:none; margin:none; opacity: 0;"></center> <br>' +
        '</td>' +
        '</table>';
}

function MudaCor(cor, id) {
    $('#tableId-' + id).css('background', cor);
    console.log('mudou');
}

function Texto(value, id) {
    return '<table width="550" cellspacing="0" cellpadding="0" border="0" align="center"><tbody id="tableId-' + id + '"><tr><td width="40"></td><td>' +
        '<img src="' + value + '" style="max-width: 178px;padding-rigth: 15px;"> </td><td style="max-width: 520px;word-break: break-word;">' +
        '<div class="texto" style="width: 520px;">TextoBase</div></td><td width="40" class="ultimo"></td></tr></tbody></table>';
}


$('#AddInput').click(function(e) {

    $('#FormSerialize').append('<div class="input-group mb-3 table-' + i + '"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"><option value="Texto">Texto</option><option value="Header">Header</option></select></div><textarea type="text" class="form-control" id="' + i + '" name="Texto"></textarea> <input class="form-control" type="color" value="#563d7c" onchange="MudaCor(this.value, ' + i + ')" id="example-color-input"> <button type="button" value="' + i + '" class="delete">Delete</button> <button type="button" value="' + i + '" class="AddTable">Add ' + i + '</button> </div>');
    $('gerador').append(Texto('texto', i));
    i++;
    AdicionaEditor();

    $('.delete').click(function(e) {
        e.preventDefault();
        var id = $(this).val();
        $('.table-' + id).remove();
        AdicionaEditor();
    });
    $('.AddTable').click(function(e) {
        e.preventDefault();
        var id = $(this).val();
        $('.table-' + id + ' .ultimo').prepend('<td style="max-width: 520px;">' + '<div class="texto">texto</div></td>');
        AdicionaEditor();

    });
});

$("#FormSerialize").submit(function(event) {
    event.preventDefault();
    var data = $('#FormSerialize').serializeArray();
    var Cont = 0;
    $('gerador').html('');
    while (Cont < data.length) {
        if (data[Cont]["name"] == 'Texto') {
            var tabelas = Texto(data[Cont]["value"].replace(/\n/g, '<br>'));
        } else if (data[Cont]["name"] == 'Header') {
            var tabelas = Header(data[Cont]["value"]);
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
    download(body.outerHTML.replace(/contenteditable="true"/g, 'a'), name + ".html", "text/html");
});

function AdicionaEditor() {
    tinymce.init({
        selector: '.texto',
        menubar: false,
        inline: true,
        plugins: [
            'link',
            'lists',
            'powerpaste',
            'autolink',
            'tinymcespellchecker'
        ],
        toolbar: [
            'undo redo | bold italic underline | fontselect fontsizeselect',
            'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent'
        ],
        valid_elements: 'p[style],strong,em,span[style],a[href],ul,ol,li',
        valid_styles: {
            '*': 'font-size,font-family,color,text-decoration,text-align'
        },
        powerpaste_word_import: 'clean',
        powerpaste_html_import: 'clean'
    });
}