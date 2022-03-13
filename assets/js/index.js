$(document).ready(function(){
    $('a.nav-link').click(function(){
        let idHerf = $(this).attr('href');

        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        $('.content').removeClass('page-active');
        $('.content'+idHerf).addClass('page-active');
    });
});