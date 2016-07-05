<?php


    $title = "Espace Data Scientist, postes valorisant à pourvoir";
    $description = "Puzzle propose de nombreux postes de Data Scientists, Data Analytics et experts en Business Intelligence. De nombreux challenges et missions diverses, le tout dans une ambiance startup vous attendent. ";
    $keywords = "data scientist, business intelligence, solutions it, recrutement, science des données";
    $activeEds = true ;

    $useModernizr = false;
    include('includes/header.php');
?>
<nav class="vertical-nav">
    <ul class="point-list">
    </ul>
</nav>
<a href="/recrutement.php" class="btn-page btn-recrutement icon-candidature" title="Postuler en ligne">Je poste ma candidature</a>
<section id="part1" class="sct-entry ds-sct-entry page-part">
    <div class="slogan-container container">
        <h1 class="slogan-title">Vivez l'expérience Puzzle</h1>
        <p class="slogan-txt">Chers <strong>Data Scientists</strong>, ce message est pour vous&nbsp;!<br>Que diriez-vous d’un travail sans routine, d’un salaire confortable  et de la possibilité de choisir vos missions&nbsp;?<br>Vous pensez que ce n’est que rêve et illusion&nbsp;? Tentez l’aventure, qui sait, l’avenir est plein de surprises…</p>
    </div>
    <div class="scroll-container">
        <p class="scroll-txt">Voir ce que nous avons à vous proposer</p>
        <a href="#part2" class="scroll-calltoaction" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    </div>
</section>
<section id="part2" class="sct-split ds-sct-1 page-part">
    <div class="split-box-img">
        <img src="assets/img/test-ds.jpg" alt="Environnement personalisé pour Data Scientist" title="Environnement personalisé pour Data Scientist">
    </div>
    <article class="split-box-content txt-content-style ">
        <div class="split-container">
            <h2>Une aventure inédite</h2>
            <p class="split-subtitle">Une opportunité d’épanouissement</p>
            <p class="space-after">Dites au revoir à la routine, au “train train” quotidien, Puzzle vous offre la possibilité de choisir vos missions.</p>
            <p class="split-subtitle">Une terre encore inexploitée</p>
            <p>Découvrez le monde des PME qui ne demande qu’à se développer et vivre leur évolution avec vous à leurs cotés. De nombreux challenges dans différents secteurs d'activité n'attendent que vous&nbsp;!</p>
        </div>
    </article>
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
        <img src="assets/img/test-ds.jpg" alt="Environnement personalisé pour Data Scientist" title="Environnement personalisé pour Data Scientist">
    </div>
</section>
<footer class="footer-page fullscreen ds-footer">
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
        <p class="copyright">&copy; 2016 Puzzle, tous droits réservés <a href="/mentions-legales.html" title="Mentions légales">Mentions légales</a> <a href="/kit-presse.html" title="Kit Presse">Kit presse</a></p>
    </div>
</footer>
<?php
    $moreJS = "<script src=\"assets/js/isInViewport.min.js\"></script>";
    include('includes/footer.php');
?>
