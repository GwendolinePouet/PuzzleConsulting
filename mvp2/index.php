<?php


$title = "Puzzle - Mieux piloter son entreprise avec la Data";
$description = "Passionnés et en quête de challenge, nos experts répondent au besoin de votre entreprise. Faire parler vos données et celles du monde extérieur, telle est notre promesse.";
$keywords = "data scientist, business intelligence, solutions it, recrutement, science des données";
$useModernizr = false;
$moreCSS = "<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />";
include('includes/header.php');
?>
<nav class="vertical-nav">
    <ul class="point-list">
    </ul>
</nav>

<section id="part1" class="sct-entry home-sct-entry page-part">
    <div class="slogan-container container">
        <h1 class="slogan-title">Quand la <strong>Data</strong> vous ouvre les bras</h1>
        <p class="slogan-txt">Puzzle offre la possibilité aux entrepreneurs de piloter leur PME de manière optimale pour se développer, grâce au consulting de Data Scientists et de la Big Data mis à disposition par notre service.</p>
        <p class="user-choice-container">
            <a href="http://puzzle-consulting.fr/mvp2/espace-data-scientist" class="btn-page btn-ds">Vous êtes <strong>Data Scientist</strong></a><a href="http://puzzle-consulting.fr/mvp2/espace-entreprise" class="btn-page btn-ee">Vous êtes <strong>une entreprise</strong></a>
        </p>
    </div>
    <div class="scroll-container">
        <a href="#part2" class="scroll-calltoaction" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    </div>
</section>
<section id="part2" class="sct-split home-sct-split page-part">
    <div class="split-box-content txt-content-style ">
        <div class="split-container">
            <h2>Une aventure inédite</h2>
            <p class="split-subtitle">Une opportunité d’épanouissement</p>
            <p class="space-after">Dites au revoir à la routine, au “train train” quotidien, Puzzle vous offre la possibilité de choisir vos missions.</p>
            <p class="split-subtitle">Une terre encore inexploitée</p>
            <p>Découvrez le monde des PME qui ne demande qu’à se développer et vivre leur évolution avec vous à leurs cotés. De nombreux challenges dans différents secteurs d'activité n'attendent que vous&nbsp;!</p>
        </div>
    </div>
    <div class="split-box-content split-infos-contact">
        <article class="infos-contact">
            <h2>Où nous trouver&nbsp;?</h2>
            <table>
                <tr>
                    <td><strong>Adresse&nbsp;:</strong> 3 Rue Breguet Sabin, 75002 Paris</td>
                    <td><strong>Site&nbsp;:</strong> http://puzzle-consulting.fr</td>
                </tr>
                <tr>
                    <td><strong>Email&nbsp;:</strong> contact@puzzle-consulting.fr</td>
                    <td><strong>Téléphone&nbsp;: </strong>01&nbsp;55&nbsp;55&nbsp;32&nbsp;61</td></tr>
            </table>
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
        </article>
        <div id="map"></div>
    </div>
    <div class="split-box-content split-form-contact">
        <form class="staffing-form" id="staffing-form" enctype="multipart/form-data" action="process.php" method="post">
            <h2>Une question, une suggestion&nbsp;?</h2>
            <p>Laissez-nous un petit mot&nbsp;!</p>
                <div class="er-infos-form">
                    <ul>
                        <li>
                            <div class="input-field input-name">
                                <input id="Prenom" type="text" name="prenom">
                                <label for="name" class="label-field">Nom</label>
                            </div>
                        </li>
                        <li>
                            <div class="input-field input-name">
                                <input id="Sujet" type="text" name="sujet">
                                <label for="name" class="label-field">Nom</label>
                            </div>
                        </li>

                        <li>
                            <div class="input-field input-email">
                                <input id="EmailContact" type="email" name="email_contact">
                                <label for="" class="label-field">Email</label>
                            </div>
                        </li>
                        <li>
                            <div class="input-field input-tel">
                                <textarea id="Message" name="message" id="message"></textarea>
                                <label for="tel" class="label-field">Téléphone</label>
                            </div>
                        </li>
                    </ul>
                    <p class="start-btn-container">
                        <input id="submit" class="btn-page btn-start" type="submit" name="submit" value="Envoyer">
                    <p class="alert-message"><?php echo $messageInfo;?></p>
                    </p>

                </div>
        </form>
    </div>
</section>
<section id="part3" class="sct-split ds-sct-2 page-part">

    <article class="split-box-content txt-content-style ">
        <div class="split-container">
            <h2>Plus qu’un métier, une passion&nbsp;!</h2>
            <ul>
                <li>Consolider la base client en s'appuyant sur les données internes et externes</li>
                <li>Contribuer à toutes les reflexions de ciblage dans le cadre d'opérations commerciales, de l'espace client et de la qualité client.</li>
                <li>Organiser la réalisation de modèles (scores d'appétence, attrition, risque...), valider la pertinence des études, en restituer les résultats dans les groupes de travail ad hoc et contribuer au développement des études.</li>
                <li>Proposer des solutions d'organisation de données issues de sources variées</li>
                <li>Faciliter l'accès aux données (moteur de recherche, indexation, métadonnées), développer des outils de présentation des données granulaires (data visualisation) </li>
            </ul>
        </div>
    </article>
    <div class="split-box-img">
        <img src="../assets/img/test-ds.jpg" alt="Environnement personalisé pour Data Scientist" title="Environnement personalisé pour Data Scientist">
    </div>
</section>

<?php
$moreJS = "<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script><script src=\"newsletter.js\"></script>";
include('includes/footer.php');
?>
