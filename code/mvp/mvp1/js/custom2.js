$(function(){
    $("#btimportcv").on("click",function(){               //Pour l import du cv
        $(this).hide();
        $("#importcv").show();
    });


    $('.icon-menu').click(function(){       //ouverture burger menu
        $('nav ul').slideToggle(1000);
    });


    $(window).on('scroll', function() {     //pour que la nav rapetisse lors du scroll
        console.log($(this).scrollTop());
        scrolling($(this));
    });
    scrolling($(window));

    function scrolling(obj){
        if (obj.scrollTop() > 150 ) {
            $('.nav').addClass('visible');
        } else if (obj.scrollTop() <= 150 ) {
            $('.nav').removeClass('visible');
        }
    }

    //remet le ul en display block apres avoir ete mis en display none avec jquery quand on clic sur le burger au format mobile. Le cas de figure n'est pas sencé se produire et la portion de code suivante ne fait qu'alourdir inutilement le code
    $(window).resize(function(){
        var w = $(window).width();
        if (w > 640){
            $("nav ul").show();
            $('.boutonsE3 a').removeClass('col-xs-12');
        }
    });

    $(window).resize(function(){
        var w = $(window).width();
        if (w < 640){
            $('.boutonsE3 a').addClass('col-xs-12');
        }
    });

    $( ".ecran1" ).hover(               //Version barbare pour les points
        function() {
            $('.p1').addClass('active-point');
        }, function() {
            $('#point .active-point').removeClass('active-point');
        }
    );
    $( ".article1" ).hover(               //Version barbare pour les points
        function() {
            $('.nvb1').addClass('nav-active nav-active-rouge');
        }, function() {
            $('.nvb1').removeClass('nav-active');
        }
    );

    $('.article2').on({                    //pour le petit noir des ecrans
        mouseenter: function(){
            $(".p2").addClass('active-point-form');
            $('.p3').addClass('active-point-form-circle');
            $('.p1').addClass('active-point-form-circle');
            $('.nvb2').addClass('nav-active');
        },
        mouseleave: function(){
            $(".p2").removeClass('active-point-form');
            $('.p3').removeClass('active-point-form-circle');
            $('.p1').removeClass('active-point-form-circle');
            $('.nvb2').removeClass('nav-active');
        }
    });

    $('.ecran4').on({                    //pour le petit noir des ecrans
        mouseenter: function(){
            $(".p3").addClass('active-point-form');
            $('.p2').addClass('active-point-form-circle');
            $('.p1').addClass('active-point-form-circle');
            $('.nvb3').addClass('nav-active');
        },
        mouseleave: function(){
            $(".p3").removeClass('active-point-form');
            $('.p2').removeClass('active-point-form-circle');
            $('.p1').removeClass('active-point-form-circle');
            $('.nvb3').removeClass('nav-active');
        }
    });

    $('.point').on('hover',function(){
        $('.point').removeClass('active-point');
        $(this).addClass("active-point-") ;
    });


    $('#goEcran1').click(function() {
        $('html,body').animate({scrollTop: $(".ecran1").offset().top}, 'slow'      );
    });
    $('#goEcran2').click(function() {
        $('html,body').animate({scrollTop: $(".ecran2").offset().top}, 'slow'      );
    });
    $('#goEcran3, .nvb3').click(function() {
        $('html,body').animate({scrollTop: $(".ecran4").offset().top}, 'slow'      );
    });


    $(".plusData, .nvb1").on("click", function () {                //bouton pour data scientist sur laccueil
        $(".article1").css("z-index", "1");
        $(".blocDisp1").hide();
        $(".slideData").css("display", "block");
        $(".article1").css("right", "0");
        $(".article1").css("margin-right", "0");
        $(".article1").css("width", "100%");
        $('.ecran2').addClass('partieEntreprise');
        $('.ecran4').addClass('partieEntreprise-contact');
        $(".article2").hide();
        $(".ecran1Accueil").hide();
        $(".ecran1Entreprise").show();
        $('.wrapper').addClass('pageEntreprise');
    });
    $(".moinsData").on("click", function () {
        $(".blocDisp1").show();
        $(".slideData").css("display", "none");
        $(".article1").css("right", "50%");
        $(".article1").css("z-index", "0");
        $(".article1").css("width", "50%");
    });

    $(".plusEntrep").on("click", function () {                //bouton pour data entrepreneur sur laccueil
        $(".blocDisp").hide();
        $(".slideEntrep").css("display", "block");
        $(".article2").css("left", "0");
        $(".article2").css("margin-left", "0");
        $(".article2").css("width", "100%");
    });
    $(".moinsEntrep").on("click", function () {
        $(".blocDisp").show();
        $(".slideEntrep").css("display", "none");
        $(".article2").css("left", "50%");
        $(".article2").css("width", "50%");
    });



});