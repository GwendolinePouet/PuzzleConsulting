<?php

$moreCSS = "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/jquery.multiscroll.css\" />";
$bodyClass ="entry";
$title ="Esapce Data Scientist, pourquoi travailler chez Puzzle";
include('includes/header.php');
require('php/config.php');

?>
    <ul id="myMenu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First section</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">Third section</a></li>
    </ul>

    <div class="clearfix staffing-page entry" id="multiscroll">
        <div class="ms-left">
            <section class="ms-section entry-1">
                <article class="fullscreen">
                    <div class="slogan-container">
                        <h1 class="slogan">Plus forts ensemble</h1>
                        <p>Puzzle recrute des jeunes data scientist pour son lancement sur le marché</p>
                    </div>
                </article>
                <nav class="user-choice fullscreen">
                    <ul>
                        <li><a href="test-rh.php">Partir à l'aventure</a></li>
                        <li><a href="#">Découvrir d'avantage</a></li>
                    </ul>
                </nav>

            </section>
            <section class="ms-section split-txt split-2">
                <h2>Diversité des missions</h2>
                <p>Ouvert à une large gamme de domaines différents,<br> c'est vous qui choisissez le projet le plus aspirant</p>
            </section>
            <section class="ms-section">
                <h1>Section n°3</h1>
            </section>
            <section class="ms-section last-section">
                <footer class="footer-page fullscreen">
                    <div class="social-container">
                        <p>Toute l'actualité de Puzzle sur les réseaux sociaux&nbsp;:</p>
                        <ul class="social-list">
                            <li class="social-linkedin">
                                <a href="https://www.linkedin.com/company/puzzle-consulting-esn" target="_blank" class="social-link icon-linkedin"><span>Linkedin</span></a>
                            </li>
                            <li class="social-facebook">
                                <a href="https://www.facebook.com/Puzzle.Consulting.ESN/" target="_blank" class="social-link icon-facebook"><span>Facebook</span></a>
                            </li>
                            <li class="social-twitter">
                                <a href="https://twitter.com/Puzzle_consult" target="_blank" class="social-link icon-twitter"><span>Twitter</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-container">
                        <p class="copyright">© 2016 Puzzle - <a href="/mentions-legales">Mentions légales</a> - <a href="/kit-presse">Kit presse</a></p>
                    </div>
                </footer>
            </section>
        </div>
        <div class="ms-right">
            <section class="ms-section entry-2"></section>
            <section class="ms-section split-img split-2">
                <img src="assets/img/diversite.jpg" alt="Diversité des missions">
            </section>
            <section class="ms-section">
                <h1>Section n°6</h1>
            </section>
            <section class="ms-section last-section"></section>
        </div>
    </div>

<?php

$moreJS ="
    <script src=\"assets/js/jquery.easings.min.js\"></script>
    <script src=\"assets/js/jquery.multiscroll.min.js\"></script>
    <script src=\"assets/js/espace-ds.js\"></script>
";

include('includes/footer.php');

?>
