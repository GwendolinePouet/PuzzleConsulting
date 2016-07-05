<?php


$title = "Espace recrutement ";
$description = "Rejoignez la communauté Puzzle, postuler en ligne.";
$keywords = "data scientist, business intelligence, solutions it, recrutement, science des données";
$activeEds = true ;
$useModernizr = false;

include('includes/header.php');
?>
<main class="staffing-page">
    <section id="part1" class="sct-entry er-sct">
        <div class="er-container">
            <div id="countdown"></div>
            <?php
                include_once('includes/recrutement/er-starter.php');
                include_once('includes/recrutement/er-quizz.php');
                include_once('includes/recrutement/er-confirmation.php');
            ?>
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
</main>
<?php
 $moreJS = "
<script src='../assets/js/jquery.countdown360.js'></script>
<script src=\"../assets/js/testing-form.js\"></script>
<script src=\"send-form.js\"></script></script>";
include('includes/footer.php');

?>
