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
        <p class="copyright">&copy; 2016 Puzzle, tous droits réservés <a href="/mentions-legales.html" title="Mentions légales">Mentions légales</a> <a href="/kit-presse.html" title="Kit Presse">Kit&nbsp;presse</a></p>
    </div>
    <div class="newsletter-container">
        <div class="newsletter-txt">
            <p><strong>Pour suivre l'aventure Puzzle, abonnez-vous&nbsp;!</strong>*<br>*Abonnement à la newsletter mensuelle</p>
        </div>
        <form id="newsletter-form" class="newsletter-form" method="post" action="newsletter.php" enctype="multipart/form-data">
            <div class="input-email">
                <input id="Email" name="email" type="email" placeholder="Email">
                <input class="submit-input" type="submit" value="&#xe903;" >
            </div>
            <span class="newsletter-msg"></span>


        </form>

    </div>

</footer>
</main>

<?php

if($useJquery==true)
{
    echo'

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>    
    
    
    ';
    if($moreJS != ""){

        echo $moreJS;
    }
    echo'

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/helper.js"></script>
    
    
    ';
}

?>

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