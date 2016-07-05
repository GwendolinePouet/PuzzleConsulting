</main>
<footer class="footer container"></footer>


<?php
if($useJquery==true)
{
    echo'

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/custom.js"></script>
    
    ';
}
if($moreJS==true){
    
    $numberFile = count($jsPath);
    
    for( $i = 0 ; $i < $numberFile; $i++) {
        echo ' <script src="'.$jsPath[$i].'"></script> ';
    }
}
?>
</body>
</html>