$('document').ready(function () {
    
    $("#staffing-form").on('submit', function(e){

        e.preventDefault();

        var $this = $(this);
        var firstname   = $("#Firstname").val();
        var name        = $("#Name").val();
        var email       = $("#Email").val();
        var linkedin    = $("#Linkedin").val();
        var alert_msg     = "Merci de remplir tous les champs";

        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        if (!(firstname == "" || name == "" || email == "")) {

            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var data = (formdata !== null) ? formdata : $form.serialize();

            $.ajax({
                type : "POST",
                url: $this.attr("action"),
                cache : false,
                contentType : false,
                processData : false,
                dataType: 'json',
                data: data,
                success : function(data) {

                    if(data.status == 'success') {
                        $.fn.swipeFirstPart();
                        $('#userid').val(data.userid);
                        $('#countdown').addClass('active');
                        //chrono.Start(20);
                    } else {
                        $('.alert-message').html(data.message);
                    }

                },
                error: function() {
                    alert('Oups ! Un problème est survenue, essayer ultérieurement');
                }
            });
        }
        else {
            $(".alert-message").html(alert_msg);
        }

        return false;
    });

    $("#quizz-form").on('submit', function(e){

        e.preventDefault();

        var $this = $(this);

        $.ajax({
            type : "POST",
            url: $this.attr("action"),
            cache : false,
            contentType : false,
            processData : false,
            dataType: 'json',
            data: $this.serialize(),
            success : function(data) {

                if(data.status == 'success') {
                    //alert(data.status);
                    $.fn.swipeLastPart();
                } else {
                    $('.alert-message-quizz').html(data.message);
                }

            },
            error: function() {
                alert('Oups ! Un problème est survenue, essayer ultérieurement 2');
            }
        });

        return false;
    });
});