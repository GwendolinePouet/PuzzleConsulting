<?php $useJquery=true; ?>

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

    <!-- LINK -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />


    <!--[if lt IE9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<header class="header-site">
    <h1 class="logo"><span>Recrutement Data Scientist</span></a></h1>
    
    <nav class="nav-site">
        <ul class="menu">
            <li><a href="#">Accueil</a></li>
            <li><a href="/recrutement">Recrutement</a></li>
        </ul>
    </nav>
    
    <a href="#" class="burger-wrapper">
        <div id="burger" class="burger is-closed">
            <div class="burger-icon">
                <div class="burger-container">
                    <span class="burger-bun-top"></span>
                    <span class="burger-filling"></span>
                    <span class="burger-bun-bot"></span>
                </div>
            </div>

            <!-- svg ring containter -->
            <div class="burger-ring">
                <svg class="svg-ring">
                    <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                </svg>
            </div>
            <!-- the masked path that animates the fill to the ring -->

            <svg width="0" height="0">
                <mask id="mask">
                    <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                </mask>
            </svg>
            <div class="path-burger">
                <div class="animate-path">
                    <div class="path-rotation"></div>
                </div>
            </div>
        </div>
    </a>

</header>


