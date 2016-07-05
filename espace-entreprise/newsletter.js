$('document').ready(function () {

    $("#newsletter-form").on('submit', function(e){

        e.preventDefault();

        var $this = $(this);
        var email       = $("#Email").val();
        var emailOk = false;
        var alert_msg     = "Merci de remplir correctement le champ";
        
        function ValidateEmail(email)
        {
            var mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(email.match(mailformat))
            {
                emailOk = true;
            }
            else
            {
                emailOk = false;
            }
        }

        if (!(email == "")) {

            ValidateEmail(email);
            
            if(emailOk == true) {
                
                var $form = $(this);
                $.ajax({
                    type : "POST",
                    url: $this.attr("action"),
                    dataType: 'json',
                    data: $form.serialize(),
                    success : function(data) {

                        if(data.status == 'success') {
                            $('.newsletter-msg').addClass('ok');
                            $(".newsletter-msg").html('Votre email a bien été enregistrée !');
                            $("#Email").val('');

                        } else {
                            $('.newsletter-msg').addClass('nook');
                            $(".newsletter-msg").html(data.message);
                        }

                    },
                    error: function() {
                        alert('Oups ! Un problème est survenue, essayer ultérieurement');
                    }
                });
            }

        }
        else {
            $(".newsletter-msg").html(alert_msg);
        }

        return false;
    });

});