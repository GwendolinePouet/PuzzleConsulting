<?php


    $title = "Espace Entreprise, découvrez les avantages de Puzzle";
    $description = "Puzzle vous accompagne dans la prise décisionelle. Nos Data Scientists réalisent vos tableaux de bord, études sectorielles, enquêtes client etc.";
    $keywords = "business, data scientist, business intelligence, solutions it, booster son entreprise";
    $activeEe = true ;

    $useModernizr = false;
    include('includes/header.php');
?>
<nav class="vertical-nav">
    <ul class="point-list ee-point-list">
    </ul>
</nav>
<section id="part1" class="sct-entry ee-sct-entry page-part">
    <div class="slogan-container ee-slogan-container container">
        <article class="ee-slogan-box">
            <h1 class="slogan-title"><span>Découvrez</span><br>l'expérience Puzzle</h1>
            <p class="slogan-txt">Chers <strong>entrepreneurs</strong>, que diriez vous de vous lancer dans le monde incroyable du BigData ?<br>
                Trop d’entreprises sous-estiment les capacités de la data et du bénéfice qu’elles
                pourraient en tirer, le “grand méchant” Bigdata en effraie plus d’un…</p>
            <p>Pas d'inquiétude, nous sommes là&nbsp;!</p>
        </article>

    </div>
    <div class="scroll-container">
        <a href="#part2" class="scroll-calltoaction" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
    </div>
</section>
<section id="part2" class="ee-sct-avantage page-part">
    <article class="article-avantage avantage1 txt-content-style">

        <div class="avantage-txt">
            <h2>«&nbsp;La data, ça ne sert à rien&nbsp;»</h2>
            <p>Voilà bien la triste idée que ce font la plus part des entreprises notamment dans le domaine des PME/PMI, mais il en est totalement autrement, en effet la data est un des piliers de l’innovation pour les entreprises, un <strong>nouveau moyen de développement</strong> encore inexploité.</p>
             <p>La démarche Big data permet de collecter, de stocker, et d’analyser toutes ces données à des coûts nettement plus raisonnables qu’avant grâce à des technologies nouvelles de stockage et surtout d’analyse.</p>
        </div>
        <div class="avantage-img">
            <img src="../assets/img/entreprise/analyse.png" alt="Analyse Big Data Puzzle">
        </div>

    </article>
    <article class="article-avantage avantage2 txt-content-style">

        <div class="avantage-img">
            <img src="../assets/img/entreprise/progres.png" alt="Progres Puzzle">
        </div>
        <div class="avantage-txt">
            <h2>Mais en quoi allons-nous vous aider&nbsp;?</h2>
             <p>Qu'elles soient produites ou collectées par votre entreprise, les données entrent à un moment précis dans votre système d'information.</p>
             <p>Chiffres de ventes, base de données clients, commentaires de consommateurs sur site de e-commerce et sur les médias sociaux, listes de marketing, archives de courrier électronique&nbsp;; les données sont de plus en plus massives et hétérogènes. </p>
             <p>Nos data scientists dans un premier temps récolterons toutes les données nécessaire afin de les analyser.
            Suite à ces analyses nous seront capable de vous dire dans quel domaine il serait judicieux de travailler dans le but d’en tirer le plus de profit et donc permettre une réelle évolution de votre entreprise. </p>
         </div>


    </article>
    <article class="article-avantage avantage2 txt-content-style">


        <div class="avantage-txt">
            <h2>Une découverte toute en douceur</h2>
            <p>C’est votre première fois&nbsp;?</p>
            <p>Ne vous inquiétez pas, notre équipe de professionnels saura vous accompagner tout au long de votre projet afin de vous guider et de vous apprendre toutes les techniques nécessaire à votre future autonomie.</p>
            <p>L’optimisation est notre mot d’ordre, pour vous garantir un résultat à la hauteur de vos attentes et pour vous faire découvrir les opportunités de croissance qui s’offrent à vous en utilisant vos données.</p>
         </div>
        <div class="avantage-img">
            <img src="../assets/img/entreprise/guide.png" alt="Part logo 1" class="logo-part-3">
        </div>

    </article>
</section>
<section id="part3" class="ee-sct-cite page-part">

    <article class="article-citation">
        <p>“Les gagnants seront ceux qui restructurent la manière
            dont l’information circule dans leur entreprise.”</p>
        <p class="citation-name">Bill Gates</p>
    </article>
</section>
<footer class="footer-page footer-1 ee-footer">
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
        <p class="copyright">&copy; 2016 Puzzle, tous droits réservés <a href="/mentions-legales.html" title="Mentions légales">Mentions légales</a> <a href="/kit-presse.html" title="Kit Presse">Kit presse</a></p>
    </div>
    <div class="newsletter-container">
        <div class="newsletter-txt">
            <p><strong>Pour suivre l'aventure Puzzle, abonnez-vous&nbsp;!</strong>*<br>*Abonnement à la newsletter mensuelle</p>
        </div>
        <form class="newsletter-form" method="post" action="process.php" enctype="multipart/form-data">
            <div class="input-email">
                <input id="Email" name="email" type="email" placeholder="Email">
                <input class="submit-input" type="submit" value="&#xe903;" >
            </div>


        </form>

    </div>

</footer>
<?php
    include('includes/footer.php');
?>
