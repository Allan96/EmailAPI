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
                            <select class="form-control" name="header-text" id="tipo-${i}">
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
                            <input type="text" class="form-control" name="botao" id="botao-${i}" placeholder="Link do botão">
                        </div>
                    </div>
                </div>
            </div>`
    );
}

function AdicionaTable() {
    return (
        `
        <table width="550" cellspacing="0" cellpadding="0" border="0" align="center" id="tableId-${i}">
            <tbody>
                <tr>
                <td><img src="" style="max-width: 178px;padding-right: 15px;" class="imagem-${i}-1"> </td>
                <td width="40"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto" style="width: 520px;">TextoBase</div>
                </td>
                <td width="40" class="ultimo"></td>
                <td>
                    <img src="" style="max-width: 178px;padding-left: 15px;" class="imagem-${i}-2"> </td>
                </tr>
            </tbody>
        </table>`
    );
}

function onchangeImage(value, id) {
    var oldId = id - 1;
    if (id === 0) {
        $('.imagem-' + id + '-1').attr('src', value);
    } else if ($('.imagem-' + oldId + '-1').attr('src').length > 0) {
        $('.imagem-' + id + '-2').attr('src', value);
    } else if ($('.imagem-' + oldId + '-2').attr('src').length > 0) {
        $('.imagem-' + id + '-1').attr('src', value);
    }
    console.log('foii');
}

function onchangeCor(value, id) {

    console.log($('#' + id).attr('table-src'));
    var table = $('#' + id).attr('table-src');

    $('#' + table).css('background', value);

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