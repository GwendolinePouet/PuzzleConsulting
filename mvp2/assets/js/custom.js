
$('document').ready(function ($) {

    //----------------------------------
    // Vertical Nav

    function createNav() {

        //Create vertical nav HTML
        var pagePart = $('.page-part').length;
        var count = 1;

        for(var i = 1; i <= pagePart; i++){

            $('.vertical-nav .point-list').append('<li class="p'+count+'">'+
                '<a class="bullets" href="#part'+count+'" data-number="'+count+'"></a>'+
                '</li>');

            count++;
        };
    }

    createNav();


    //Animate vertical nav
    var contentSections = $('.page-part'),
        navigationItems = $('.vertical-nav .bullets');

    updateNavigation();
    $(window).on('scroll', function(){
        updateNavigation();
    });

    //smooth scroll to the section
    navigationItems.on('click', function(event){
        event.preventDefault();
        scrollPart($(this.hash));
    });
    //smooth scroll to second section
    $('.page-part, .scroll-calltoaction').on('click', function(event){
        event.preventDefault();
        scrollPart($(this.hash));
    });

    function updateNavigation() {
        contentSections.each(function(){
            $this = $(this);
            var activeSection = $('.vertical-nav a[href="#'+$this.attr('id')+'"]').data('number') - 1;
            if ( ( $this.offset().top - $(window).height()/2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height()/2 > $(window).scrollTop() ) ) {
                navigationItems.eq(activeSection).addClass('active-point');
            }else {
                navigationItems.eq(activeSection).removeClass('active-point');
            }
        });
    }

    function scrollPart(target) {
        $('body,html').animate(
            {'scrollTop':target.offset().top},
            600
        );
    }

    //----------------------------
    //--SMOOTH SCROLL
    
});// /!\ END OF READY FUNCTION

 


