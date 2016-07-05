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
    <meta name="robots" content="noindex">

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
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />


    <!--[if lt IE9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
        <ul class="menu">
            <li><a href="#">Je suis data scientist</a></li>
            <li><a href="#">Je suis une entreprise</a></li>
        </ul>
    </nav>

</header>


