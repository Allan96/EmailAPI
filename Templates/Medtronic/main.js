var i = 0;
var clone = 1;

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
            'undo redo | bold italic underline | fontsizeselect',
            'forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent',
        ],
        fontsize_formats: '18px',
        valid_elements: 'p[style],strong,em,span[style],a[href],ul,ol,li',
        valid_styles: {
            '*': 'font-size,color,text-decoration,text-align'
        },
    });
}

function AdicionaInputs() {
    return (
        `
        <div class="card clone-${clone}" id="${i}">
                <div class="card-header" >
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse${i}" aria-expanded="false" aria-controls="collapse${i}">Tabela </button>
                    </h2>
                    <div onclick="deleteItem(${i})"> 
                    <img src="../../assets/img/icons/delete.svg" alt="">
                    </div>
                    <div onclick="cloneItem(${clone})"> 
                    <img src="../../assets/img/icons/clone.svg" alt="">
                    </div>
                   
                </div>
                <div id="collapse${i}" class="collapse" aria-labelledby="${i}" data-parent="#accordion">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="form-control" name="header-text" id="tipo-${i}" onchange="onchangeType(this.value, ${i})">
                                <option value="text">Texto</option>
                                <option value="header">Header</option>
                                <option value="button">Botão</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="imagem" id="imagem-${i}" placeholder="Imagem" onchange="onchangeImage(this.value, ${i})">
                        </div>
                        <div class="form-group">
                            <input type="color" class="form-control" name="cor" id="cor-${i}" table-src="tableId-${i}" placeholder="Cor" onchange="onchangeCor(this.value, this.id)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="botao" id="botao-${i}" value="https://www.medtronic.com/br-pt/index.html" placeholder="Link do botão" onchange="onchangeButton(this.value, ${i})" style="display: none">
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="botao" id="botaoText-${i}" placeholder="Texto do botão" value="Lorem ipsum" onchange="onchangeButtonText(this.value, ${i})" style="display: none">
                    </div>
                        
                    </div>
                </div>
            </div>`
    );
}

function AdicionaTable() {
    return (
        `
        <table width="550" cellspacing="0" border="0" cellpadding="0" class="cloneTable-${clone}" border="0" align="center" id="tableId-${i}" data-toggle="collapse" aria-controls="collapse${i}" aria-expanded="true" data-target="#collapse${i}">
            <tbody>
                <tr>
                <td align="left" style=-><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0;display: block;" class="imagem-${i}-1"> </td>
                <td width="10"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto text-${i}" style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva;
                    font-size: 18px;line-height: 1.2;text-decoration: none;">TextoBase</div>
                </td>
                <td width="10" class="ultimo"></td>
                <td align="right">
                    <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0; display: block;" class="imagem-${i}-2"> </td>
                </tr>
            </tbody>
        </table>`
    );
}

function deleteItem(i) {
    console.log(i);
    $('#tableId-' + i).remove();
    $('#' + i).remove();
}

function cloneItem(value) {
    clone++;
    i++;
    var cloneTable = $('.cloneTable-' + value).clone();
    var cloneCard = $('.clone-' + value).clone();

    $('#accordion').append(cloneCard.attr('class', 'card clone-' + clone));
    $('gerador').append(cloneTable.attr('class', 'cloneTable-' + clone).attr('id', 'tableId-' + i).attr('aria-controls', 'collapse' + i).attr('data-target', '#collapse' + i));

}

function onchangeType(value, id) {
    if (value === 'text') {
        $('#cor-' + id).show();
        $('#botao-' + id).hide();
        $('#botaoText-' + id).hide();
        $('#imagem-' + id).show();
        $('#tableId-' + id).html(
            `<tbody>
                <tr>
                <td align="left"><img src="" style="max-width: 178px;padding-right: 15px;opacity: 0; display:block;" class="imagem-${id}-1"> </td>
                <td width="20"></td>
                <td style="max-width: 520px;word-break: break-word;">
                    <div class="texto text-${i}"style="font-family: Arial, Helvetica, sans-serif, Verdana, Geneva;
                    font-size: 18px;line-height: 1.2;text-decoration: none;">Texto Base</div>

                </td>
                <td width="20" class="ultimo"></td>
                <td align="right">
                    <img src="none" style="max-width: 178px;padding-left: 15px;opacity: 0;display:block;" class="imagem-${id}-2"> </td>
                </tr>
            </tbody>
            `
        );
    } else if (value === 'header') {
        $('#cor-' + id).hide();
        $('#botaoText-' + id).hide();
        $('#imagem-' + id).show();
        $('#botao-' + id).hide();
        $('#tableId-' + id).html(
            `<tbody>
                <tr>
                <td><img src="" style="max-width: 550px; width: 550px;display:block;" class="header-${id} imagem-${id}-2"> </td>
                </tr>
            </tbody>
            `
        );
    } else if (value === 'button') {
        $('#cor-' + id).hide();
        $('#imagem-' + id).hide();
        $('#botao-' + id).show();
        $('#botaoText-' + id).show();

        $('#tableId-' + id).html(
            `<tbody style="margin: 30px 0;"><tr>
        <td width="24" height="58" bgcolor="#FFFFFF"></td>
        

        <td width="491" height="58" align="center" class="tableButtonInsere-${id}" style="margin: 10px 0;display: block;">
        <a href="https://www.medtronic.com/br-pt/index.html" target="_blank" class="button buttonComponent-${id}" style="
        text-transform: uppercase;
        background: #009ae0;
        color: white;
        padding: 10px 20px;
        font-weight: bold;
        text-decoration: none!important;
    ">Lorem ipsum</a>
        </td>

        
        <td width="25" height="58" bgcolor="#FFFFFF"></td>
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
        $('.tableButtonInsere-' + id).append(`<a href="${value}" target="_blank" class="button buttonComponent-${id}" style="
        text-transform: uppercase;
        background: #009ae0;
        color: white;
        padding: 10px 50px;
        font-weight: bold;
        font-size: 20px;
        text-decoration: none!important;
    "><span class="texto">Lorem ipsum </span></a>`);
    } else {}
}

function onchangeButtonText(value, id) {
    if (value.length > 0) {
        $('.buttonComponent-' + id).html(value);
    } else {}
}

$(document).ready(function() {
    $('#AddInput').click(function(e) {
        e.preventDefault();
        clone++;
        $('#accordion').append(AdicionaInputs());
        $('gerador').append(AdicionaTable());
        AdicionaEditor();

        i++;

    });

    $('.baixar').click(function() {
        var d = new Date();
        var name = d.getFullYear() + '-' + d.getMonth() + '-' + d.getDate() + '-Email';

        var body = document.getElementById("email");
        download(body.outerHTML.replace(/contenteditable="true"/g, 'a'), name + ".html", "text/html");
    });
});