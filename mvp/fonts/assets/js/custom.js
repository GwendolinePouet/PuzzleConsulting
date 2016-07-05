
$('document').ready(function () {

    // Burger animation
    //----------------------------------
    $(function(){
        var trigger = $('#burger'),
            isClosed = true;

        trigger.click(function () {
            burgerTime();
            $('.nav-site').toggleClass('nav-open');
        });

        function burgerTime() {
            if (isClosed == true) {
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = false;
            } else {
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = true;
            }
        }
    });

    // Testing form
    //----------------------------------
    $.fn.swipePart = function() {
        $('.testing-form .active').addClass('endpart');
        $('.testing-form .active').next().addClass('active');
        $('.testing-form .endpart.active').delay(1000).removeClass('active');
    };

    $(function(){

        $('.next-btn').click(function() {
            chrono.Restart();
        });

    });

});

// Testing form
//----------------------------------
var chrono = {
    secondsLeft : 0,
    counterPart : document.getElementById("testing-form").childElementCount,
    timer : undefined,
    Start : function (secondLeft) {
        this.secondsLeft = secondLeft;
        this.timer = setInterval(this.Tick.bind(this), 1000);
    },

    Tick: function () {
        document.getElementById("timer").innerHTML = --this.secondsLeft;

        if (this.secondsLeft === 0) {

            this.Restart();
        }
    },

    Restart : function () {
        if (this.counterPart > 1) {

         clearInterval(this.timer);
         this.Start(10);
         --this.counterPart;

         $.fn.swipePart();

        } else
        {
            this.Stop();
        }
    },

    Stop : function () {
        clearInterval(this.timer);
    }
};
// Canvas animation


// CANVAS
    var canvas = document.getElementById('timer-canvas'),
        width = canvas.width,
        height = canvas.height;

// CANVAS PROPERTIES
    var ctx = canvas.getContext('2d');
    ctx.lineWidth = 45;
    ctx.strokeStyle = '#0f0';
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = 10;
    ctx.shadowColor = '#0f0';

// CANVAS MATHS
    var x = width / 2,
        y = height / 2,
        radius = 120,
        circum = Math.PI * 2,
        start = Math.PI / -2, // Start position (top)
        finish = 77, // Finish (in %)
        curr = 0; // Current position (in %)

// CANVAS ANIMATION

// Enables browser-decided smooth animation (60fps)
    var raf =
        window.requestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.msRequestAnimationFrame;
    window.requestAnimationFrame = raf;

// Animate function
    function animate(draw_to) {
        // Clear off the canvas
        ctx.clearRect(0, 0, width, height);
        // Start over
        ctx.beginPath();
        // arc(x, y, radius, startAngle, endAngle, anticlockwise)
        // Re-draw from the very beginning each time so there isn't tiny line spaces between each section (the browser paint rendering will probably be smoother too)
        ctx.arc(x, y, radius, start, draw_to, false);
        // Draw
        ctx.stroke();
        // Increment percent
        curr++;
        // Animate until end
        if (curr < finish + 1) {
            // Recursive repeat this function until the end is reached
            requestAnimationFrame(function () {
                animate(circum * curr / 100 + start);
            });
        }
    }

    animate();



/*
var options = {
    scaleColor: false,
    trackColor: 'rgba(255,255,255,0.3)',
    barColor: '#red',
    lineWidth: 6,
    lineCap: 'butt',
    size: 95
};

window.addEventListener('DOMContentLoaded', function() {
    var charts = [];
    [].forEach.call(document.querySelectorAll('.chart'),  function(el) {
        charts.push(new EasyPieChart(el, options));
    });
});*/
