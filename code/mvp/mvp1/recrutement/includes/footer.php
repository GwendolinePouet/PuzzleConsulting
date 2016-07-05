</main>

<?php

if($useJquery==true)
{
    echo'

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/js/jquery.countdown360.js"></script>
    <script src="assets/js/custom.js"></script>
    
    
    ';
}
if($moreJS != ""){
    
    echo $moreJS;
}

?>

</body>
</html>