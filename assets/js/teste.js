var i = 0;

function TypeChange(type, id) {
    // alert('aaaaaaa');
    $("input#" + id).attr("name", type);
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
$('#teste1button').click(function(e) {

    $('#teste1').append('<div class="input-group mb-3"><div class="input-group-prepend"><select class="custom-select" id="inputGroupSelect01" id="' + i + '" onchange="TypeChange(this.value, ' + i + ');"<option selected>Titulo</option><option value="Texto">Texto</option><option value="Imagem">Imagem</option><option value="Titulo">Titulo</option></select></div><input type="text" class="form-control" id="' + i + '" name="' + i + '"></div>');
    i++;

});

$(document).ready(function() {
    $('.text').click(function(e) {
        console.log($(this).attr('id'));

    });
});

$("form").submit(function(event) {
    console.log($(this).serializeArray());
    event.preventDefault();
});