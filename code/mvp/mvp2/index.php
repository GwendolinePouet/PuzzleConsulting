<?php


$title = "Puzzle - Mieux piloter son entreprise avec la Data";
$description = "Passionnés et en quête de challenge, nos experts répondent au besoin de votre entreprise. Faire parler vos données et celles du monde extérieur, telle est notre promesse.";
$keywords = "data scientist, business intelligence, solutions it, recrutement, science des données";
$useModernizr = false;
$moreCSS = "<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />";
include('includes/header.php');
?>
<nav class="vertical-nav home-vertical-nav">
    <ul class="point-list">
    </ul>
</nav>

<section id="part1" class="sct-entry home-sct-entry page-part">
    <div class="slogan-container container">
        <h1 class="slogan-title">Quand la <strong>Data</strong> vous ouvre les bras</h1>
        <p class="slogan-txt">Puzzle offre la possibilité aux entrepreneurs de piloter leur PME de manière optimale pour se développer, grâce au consulting de Data Scientists et de la Big Data mis à disposition par notre service.</p>
        <p class="user-choice-container">
            <a href="espace-data-scientist" class="btn-page btn-ds">Vous êtes <strong>Data Scientist</strong></a><a href="espace-entreprise" class="btn-page btn-ee">Vous êtes <strong>une entreprise</strong></a>
        </p>
    </div>
    <div class="scroll-container">
        <a href="#part2" class="scroll-calltoaction" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    </div>
</section>
<section id="part2" class="sct-split home-sct-split page-part">

    <div class=" split-box-content split-infos-contact">
        <article class="infos-contact">
            <h2>Où nous trouver&nbsp;?</h2>
            <address>
                <p class="adress-cell"><strong>Adresse&nbsp;:</strong> 3 Rue Breguet Sabin, 75002 Paris</p>
                <p class="adress-cell"><strong>Site&nbsp;:</strong> http://puzzle-consulting.fr</p>
                <p class="adress-cell"><strong>Email&nbsp;:</strong> contact@puzzle-consulting.fr</p>
                <p class="adress-cell"><strong>Téléphone&nbsp;: </strong>01&nbsp;55&nbsp;55&nbsp;32&nbsp;61</p>
            </address>

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
        <article class="split-form-title">
            <h2>Une question, une suggestion&nbsp;?</h2>
            <p>Laissez-nous un petit mot&nbsp;!</p>
        </article>
        <form class="home-form" id="contact-form" enctype="multipart/form-data" action="contact.php" method="post">
                <div class="fiels-form">
                    <ul>
                        <li>
                            <div class="input-field input-name">
                                <input id="Nom" type="text" name="nom">
                                <label for="name" class="label-field">Prénom et nom</label>
                            </div>
                        </li>
                        <li>
                            <div class="input-field input-email">
                                <input id="EmailContact" type="email" name="email">
                                <label for="" class="label-field">Email</label>
                            </div>
                        </li>
                        <li>
                            <div class="input-field select-object">
                                <select id="Objet" name="objet">
                                    <option value="" selected></option>
                                    <option value="Demande d'informations">Demande d'informations</option>
                                    <option value="Demande de rendez-vous">Demande de rendez-vous</option>
                                    <option value="Remarque sur le site">Remarque sur le site</option>
                                    <option value="Autres">Autres</option>
                                </select>
                                <label for="" class="label-field">Objet</label>
                            </div>
                        </li>
                        <li>
                            <div class="input-field textarea-message">
                                <textarea id="Message" name="message" id="message"></textarea>
                                <label for="tel" class="label-field">Message</label>
                            </div>
                        </li>
                    </ul>
                    <p class="submit-btn-container">
                        <input id="submit" class="btn-page btn-start" type="submit" name="submit" value="Envoyer">
                    </p>
                    <p class="contact-message"></p>


                </div>
        </form>
    </div>
</section>

<?php
$moreJS = "<script src=\"https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js\"></script><script src=\"assets/js/custom-map.js\"></script><script src=\"send-form.js\"></script>";
include('includes/footer.php');
?>
