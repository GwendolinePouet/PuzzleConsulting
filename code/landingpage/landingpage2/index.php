<?php

    require('php/config.php');

    if(isset($_POST['submit'])) {

        if(!empty($_POST)) {

            $email=htmlspecialchars($_POST['email']);

            $insert = $mysql->prepare("INSERT INTO `lp-emails`(`email`) VALUES (:email)");
            $insert->execute(array(
                ':email'=>$email
            ));

            if($insert)
              {
                  $message = 'Merci, votre email a bien été enregistré.<br>Vous allez trés prochainement être immersé dans l\'univers Puzzle';
                  $okClass = 1;
              }
              else
              {
                  $message='Désolé, le service rencontre un problème, essayez ultérieurement';
                  $okClass = 0;
              }
        }
        else
       {
        $message = 'Oups ! L\'adresse email est invalide';
        $okClass = 0;
       }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset=utf-8 />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Puzzle - Mieux piloter son entreprise avec la Data</title>
    <meta name="description" content="Passionnés et en quête de challenge, nos experts répondent au besoin de votre entreprise. Faire parler vos données et celles du monde extérieur, telle est notre promesse." />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
    <link rel="stylesheet" href="assets/css/main.css">
    <script>
        /**
         * Fonction de suivi des clics sur des liens sortants dans Analytics
         * Cette fonction utilise une chaîne d'URL valide comme argument et se sert de cette chaîne d'URL
         * comme libellé d'événement. Configurer la méthode de transport sur 'beacon' permet d'envoyer le clic
         * au moyen de 'navigator.sendBeacon' dans les navigateurs compatibles.
         */
        var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', url, {
                'transport': 'beacon',
                'hitCallback': function(){window.open(url);}
            });
        }
    </script>
</head>
<body>
<header class="header-site">
        <a href="/" class="logo">
            <div class="logo-icon">
                <img src="assets/img/logo/logo-part-1.png" alt="Part logo 1" class="logo-part-1">
                <img src="assets/img/logo/logo-part-2.png" alt="Part logo 1" class="logo-part-2">
                <img src="assets/img/logo/logo-part-3.png" alt="Part logo 1" class="logo-part-3">
            </div>
            <h1 class="logo-txt"><span>puzzle</span></h1>
        </a>
</header>
<section class="lp-sct-entry">
    <article class="slogan-container">
        <h1 class="lp-slogan slogan">Bienvenue à bord de votre succès</h1>
        <p>Vous êtes le pilote, nous sommes le gouvernail</p>
    </article>
    <div class="lp-sct-scroll">
        <a href="#part2" class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    </div>
</section>
<section id="part2" class="lp-sct-2">

    <div class="lp-sct-map">
        <h2>Demandez-leur, ils vous le confirmeront</h2>
       <div id='map'></div> 
    </div>
    <div id="contactBloc" class="lp-sct-meet">
        <div class="lp-contact">
            <h2>Vous aimeriez savoir comment ils ont fait ?</h2>
            <p>Laissez-nous votre email pour découvrir le concept de Puzzle</p>
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="email" name="email" class="email-input" placeholder="Votre email ici" require>
                <input type="submit" name="submit" class="submit-input" value="">
                <?php

                 if($message) { 

                    if($okClass == 1)
                    echo '<p class="submit-message ok">'.$message.'</p>';
                    }
                    else {
                        echo '<p class="submit-message">'.$message.'</p>';
                    }

                 ?>
            </form>
        </div>
    </div>
</section>


<footer class="footer-page fullscreen">
    <div class="social-container">
        <ul class="social-list">
            <li class="social-linkedin">
                <a href="http://bit.ly/2995cxz" target="_blank" class="social-link icon-linkedin" title="Page Linkedin de la société Puzzle" rel="author" onclick="trackOutboundLink('https://www.linkedin.com/company/puzzle-consulting-esn'); return false;"><span>Linkedin</span></a>
            </li>
            <li class="social-facebook">
                <a href="http://bit.ly/299RqNU" target="_blank" class="social-link icon-facebook" title="Page Facebook de la société Puzzle" rel="author" onclick="trackOutboundLink('https://www.facebook.com/Puzzle.Consulting.ESN/'); return false;"><span>Facebook</span></a>
            </li>
            <li class="social-twitter">
                <a href="http://bit.ly/299EN1M" target="_blank" class="social-link icon-twitter" title="Page Twitter de la société Puzzle" rel="author" onclick="trackOutboundLink('https://twitter.com/Puzzle_consult'); return false;"><span>Twitter</span></a>
            </li>
        </ul>
    </div>
    <div class="copyright-container">
        <p class="copyright">&copy; 2016 Puzzle <a href="/mentions-legales.html" title="Mentions légales">Mentions légales</a> <a href="/kit-presse.html" title="Kit Presse">Kit presse</a></p>
    </div>
</footer>


<!-- SCRIPTS -->
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/js/custom-landing.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79433549-1', 'auto');
    ga('send', 'pageview');


</script>


</body>
</html>
