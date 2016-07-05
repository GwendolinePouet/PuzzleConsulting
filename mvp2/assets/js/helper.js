
$('document').ready(function ($) {

    $('.input-field input').change(function() {
        $(this).next('.label-field').addClass('active');
    });

});// /!\ END OF READY FUNCTION




