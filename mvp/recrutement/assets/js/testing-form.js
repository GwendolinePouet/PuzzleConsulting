// Testing form (following)
//----------------------------------
var chrono = {
    secondsLeft : 0, //Value onclick button
    counterPart : document.getElementById("testing-form").childElementCount,
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
            this.Start(10);
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
    radius      : 50,
    seconds     : 10,
    fontColor   : '#FFFFFF',
    strokeStyle : "#FF4B7C",
    fillStyle   : "#31CDFF",
    autostart   : false,
    onComplete  : function () { console.log('done') }
});
