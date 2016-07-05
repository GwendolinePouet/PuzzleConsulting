
$('document').ready(function ($) {

    $('.input-field input, .input-field select, .input-field textarea').change(function() {
        $(this).next('.label-field').addClass('active');
    });

    $('.burger-menu').click(function() {
       $('.nav-site .menu').toggle('slow');
    });

});// /!\ END OF READY FUNCTION




