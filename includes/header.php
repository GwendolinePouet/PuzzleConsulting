<?php
$useJquery = true;
$moreJS = "";

?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">


    <!-- VIEWPORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <?php
        if($moreCSS) {
            echo $moreCSS;
        }
    ?>

    <!-- LINK -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />


    <!--[if lt IE9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    if($useModernizr) {
        if($useModernizr == true ) {
            '<script src="assets/js/modernizr.js"></script>';
        }
    }
    
    ?>

</head>

<body class="<?php if($bodyClass){echo $bodyClass;}?>">

<header class="header-site">

        <a href="/" class="logo">
            <div class="logo-icon">
                <img src="assets/img/logo/logo-part-1.png" alt="Part logo 1" class="logo-part-1">
                <img src="assets/img/logo/logo-part-2.png" alt="Part logo 1" class="logo-part-2">
                <img src="assets/img/logo/logo-part-3.png" alt="Part logo 1" class="logo-part-3">
            </div>
            <h1 class="logo-txt"><span>puzzle</span></h1>
        </a>


    <nav class="nav-site">
        <div class="burger-menu">
            <span class="burger-menu-line"></span>
            <span class="burger-menu-line"></span>
            <span class="burger-menu-line"></span>
        </div>
        <ul class="menu">
            <li><a <?php if($activeEds) { echo 'class="active" ' ; }  ?>href="/espace-data-scientist">Esapce Data Scientist</a></li>
            <li><a <?php if($activeEe) { echo 'class="ee-link-menu active" ' ; }  ?>href="/espace-entreprise">Espace Entreprise</a></li>
            <li><a <?php if($activeCn) { echo 'class="active" ' ; }  ?>href="/#part2">Nous contacter</a></li>
        </ul>
    </nav>

</header>


