
$('document').ready(function ($) {

    $('.input-field input, .input-field select, .input-field textarea').change(function() {
        $(this).next('.label-field').addClass('active');
    });

});// /!\ END OF READY FUNCTION




