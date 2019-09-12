var i = 0;

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

function AdicionaInputs() {
    return (
        `
        <div class="card">
                <div class="card-header" id="${i}">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse${i}" aria-expanded="false" aria-controls="collapse${i}">Tabela ${i}</button>
                    </h2>
                </div>
                <div id="collapse${i}" class="collapse" aria-labelledby="${i}" data-parent="#accordion">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control" name="header-text" id="tipo-${i}" onchange="onchangeType(this.value, ${i})">
                                <option value="text">Texto</option>
                                <option value="header">Header</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="imagem" id="imagem-${i}" placeholder="Imagem" onchange="onchangeImage(this.value, ${i})">
                        </div>
                        <div class="form-group">
                            <input type="color" class="form-control" name="cor" id="cor-${i}" table-src="tableId-${i}" placeholder="Cor" onchange="onchangeCor(this.value, this.id)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="botao" id="botao-${i}" placeholder="Link do botão" onchange="onchangeButton(this.value, ${i})">
                        </div>
                    </div>
                </div>
            </div>`
    );
}

function AdicionaTable() {
    return (
        `<table width="550" cellspacing="0" cellpadding="0" border="0" align="center" id="tableId-${i}">
            <tbody>
                <tr>
                <td align="left"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0;" class="imagem-${i}-1"> </td>
                <td width="10"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto text-${i}">TextoBase</div>
                </td>
                <td width="10" class="ultimo"></td>
                <td align="right">
                    <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0;" class="imagem-${i}-2"> </td>
                </tr>
            </tbody>
        </table>`
    );
}

function onchangeType(value, id) {
    if (value === 'text') {
        $('#cor-' + id).show();
        $('#botao-' + id).show();
        $('#tableId-' + id).html(
            `<tbody>
                <tr>
                <td align="left"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0;" class="imagem-${id}-1"> </td>
                <td width="20"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto text-${i}" style="position: relative;" id="mce_0" contenteditable="true" spellcheck="false"><p><span class="mce-spellchecker-word" aria-invalid="spelling" data-mce-bogus="1" data-mce-word="TextoBase" data-mce-index="0">TextoBase</span></p></div>
                </td>
                <td width="20" class="ultimo"></td>
                <td align="right">
                    <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0; class="imagem-${id}-2"> </td>
                </tr>
            </tbody>
            `
        );
    } else if (value === 'header') {
        $('#cor-' + id).hide();
        $('#botao-' + id).hide();
        $('#tableId-' + id).html(
            `<tbody>
                <tr>
                <td><img src="" style="max-width: 550px; width: 550px;" class="header-${id} imagem-${i}-2"> </td>
                </tr>
            </tbody>
            `
        );
    }
}

function onchangeImage(value, id) {
    var oldId = id - 1;
    if ($('#tipo-' + id).val() == 'text') {
        if (id === 0 || $('.imagem-' + oldId + '-1').attr('src') == undefined) {
            $('.imagem-' + id + '-1').attr('src', value).css('opacity', '1');
        } else if ($('.imagem-' + oldId + '-1').attr('src').length > 0) {
            $('.imagem-' + id + '-2').attr('src', value).css('opacity', '1');
        } else if ($('.imagem-' + oldId + '-2').attr('src').length > 0) {
            $('.imagem-' + id + '-1').attr('src', value).css('opacity', '1');
        }
    } else if ($('#tipo-' + id).val() == 'header') {
        $('.header-' + id).attr('src', value);

    }
}

function onchangeCor(value, id) {

    console.log($('#' + id).attr('table-src'));
    var table = $('#' + id).attr('table-src');

    $('#' + table).css('background', value);

}

function onchangeButton(value, id) {
    $('.buttonComponent-' + id).remove();
    if (value.length > 0) {
        $('.text-' + id).append(`<a href="" target="_blank" class="buttonComponent-${id}"><img src="http://martinluz.com/clientes/medtronic/emkt/20190401-conne/images/02.jpg" width="202" height="54" alt="degrade" style="display:block; border:none; padding:none; margin:none;"></a>`);
    } else {}
}

$(document).ready(function() {
    $('#AddInput').click(function(e) {
        e.preventDefault();
        $('#accordion').append(AdicionaInputs());
        $('gerador').append(AdicionaTable());
        AdicionaEditor();

        i++;
    });



    $('.baixar').click(function() {
        var d = new Date();
        var name = d.getFullYear() + '-' + d.getDate() + '-' + d.getDate() + '-' + 'estudo';

        var body = document.getElementById("email");
        download(body.outerHTML.replace(/contenteditable="true"/g, 'a'), name + ".html", "text/html");
    });
});