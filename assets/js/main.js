$('.erro span').click(function() {
    $('.erro').css('top', '-45px');
});

$('.box').click(function(e) {
    e.preventDefault();
    $("#modalEmail").load('./sistema/emails.php?tipo=EstudoValue');

});



$('.box').click(function(e) {
    e.preventDefault();
    var id = '#modalEmail',
        menuHeight = $('nav').innerHeight(),
        targetOffset = $(id).offset().top;
    $('html, body').animate({
        scrollTop: targetOffset - 50
    }, 1500);
});


$('.baixar').click(function() {
    var d = new Date();
    var name = d.getFullYear() + '-' + d.getDate() + '-' + d.getDate() + '-' + 'estudo';

    var body = document.getElementById("email");
    download(body.outerHTML, name + ".html", "text/html");
});