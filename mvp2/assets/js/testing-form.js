
$('document').ready(function () {
    

    //Move screen 1 and start quizz
    $.fn.swipeFirstPart = function() {

        $('.er-screen-1 ').addClass('screen-out');
        $('.er-screen-2 ').addClass('screen-in');
        chrono.Start(15);
    };

    //Move last screen to confirm
    $.fn.swipeLastPart = function() {

        $('.end-screen').addClass('screen-out');
        $('.confirm-screen').addClass('screen-in');
        $('.end-screen').removeClass('screen-in');
    };

    //Select radion button
    $('.er-answer-list li').click(function() {
        $(this).find('input').prop('checked', true);
    });


    $.fn.swipePart = function() {
        $('.screen-in').addClass('screen-out');
        $('.screen-in').next('.question-screen').addClass('screen-in');
        $('.screen-in.screen-out').removeClass('screen-in');
    };

    $(function(){

        $('.er-answer-list li').click(function() {
            chrono.Restart();
        });

    });



    // Timer et chrono
    //----------------------------------
    var chrono = {
        secondsLeft : 0, //Value onclick button
        counterPart : document.getElementById("quizz-form").childElementCount,
        timer : undefined,
        Start : function (secondLeft) {
            this.secondsLeft = secondLeft;
            countdown.start(); //Start canvas animation
            this.timer = setInterval(this.Tick.bind(this), 1000); // To calculate second
        },

        Tick: function () {
            //document.getElementById("timer").innerHTML = --this.secondsLeft;
            --this.secondsLeft;
            if (this.secondsLeft === 0) {

                this.Restart();
            }
        },

        Restart : function () {
            if (this.counterPart > 1) { //Nummber of survey part

                clearInterval(this.timer);
                this.Start(15);
                --this.counterPart;

                $.fn.swipePart(); //Swipe survey part

            } else
            {
                this.Stop();
            }
        },

        Stop : function () {
            clearInterval(this.timer);
        }
    };

    //Options for canvas animation
    var countdown =  $("#countdown").countdown360({
        radius      : 40,
        seconds     : 15,
        fontColor   : '#31CDFF',
        strokeStyle : "#31CDFF",
        fillStyle   : "#FFFFFF",
        autostart   : false,
        onComplete  : function () { console.log('done') }
    });

});// /!\ END OF READY FUNCTION

