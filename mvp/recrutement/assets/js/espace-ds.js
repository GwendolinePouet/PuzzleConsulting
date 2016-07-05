

$(document).ready(function() {

    /* Copyright (c) 2013 Alvaro Trigo <alvaro@alvarotrigo.com> */

    //Start splitscreen with parameters
    $('#multiscroll').multiscroll({
        verticalCentered : true,
        scrollingSpeed: 700,
        easing: 'easeInQuart',
        sectionsColor: ['transparent', '#FFF', '#2BD2FF', '#FFF'],
        navigation: true,
        navigationPosition: 'right',
        navigationColor: '#FFF',
        navigationTooltips: [],
        loopBottom: false,
        loopTop: false,
        css3: false,
        paddingTop: 0,
        paddingBottom: 0,
        normalScrollElements: null,
        keyboardScrolling: true,
        touchSensitivity: 5,

        // Custom selectors
        sectionSelector: '.ms-section',
        leftSelector: '.ms-left',
        rightSelector: '.ms-right',

        //Menu
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
        menu: '#myMenu',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){}
    });


});