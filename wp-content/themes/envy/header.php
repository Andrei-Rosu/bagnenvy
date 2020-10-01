<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Bagneux environnement accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112491838-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112491838-5');
    </script>
<?php wp_head();?>

    <!-- Favicons -->
    <link href="<?php echo get_theme_file_uri('img/Bagnenv_logo_s_tr.png')?>" rel="icon">
    <link href="<?php echo get_theme_file_uri('img/Bagnenv_logo_s_tr.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">



</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>



<!--/ Nav Star /-->
<header>
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="img-fluid logo_img" src="<?php echo get_theme_file_uri('img/Bagnenv_logo_s_tr.png')?>" alt="logo Bagneux Environnement">
            </a>
            <a class="navbar-brand text-brand" href="<?php echo site_url('/home')?>">Bagneux<span class="color-b"> Environnement</span></a>
            <!--<button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
              data-target="#navbarTogglerDemo01" aria-expanded="false">
              <span class="fa fa-search" aria-hidden="true"></span>
            </button>-->
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Nous connaître</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/nos-objectifs')?>" id="navbarDropdowns" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Nos objectifs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdowns">
                            <a class="dropdown-item" href="<?php echo site_url('/sensibiliser')?>"">Sensibiliser</a>
                            <a class="dropdown-item" href="<?php echo site_url('/resilience')?>">Développer des projets résilients</a>
                            <a class="dropdown-item" href="<?php echo site_url('/partager')?>">Partager le savoir faire</a>
                        </div>
                    </li>





                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/nos-actions')?>" id="navbarDropdowns" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Nos initiatives
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdowns">
                            <a class="dropdown-item" href="<?php echo site_url('/nature-en-ville')?>"">Nature en ville</a>
                            <a class="dropdown-item" href="<?php echo site_url('/alimentation-agriculture')?>">Agriculture et alimentation</a>
                            <a class="dropdown-item" href="<?php echo site_url('/climat-energie')?>">Climat et énergie</a>
                            <a class="dropdown-item" href="<?php echo site_url('/reduction-dechets')?>">Réduction des déchets</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/actualites')?>">Actualités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdowns" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Agir
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdowns">
                            <a class="dropdown-item" href="<?php echo site_url('/benevolat')?>"">Je deviens bénévole</a>
                            <a class="dropdown-item" href="<?php echo site_url('/adherer')?>">Je deviens membre</a>
                            <a class="dropdown-item" href="<?php echo site_url('/donations')?>">Je fais un don</a>
                            <a class="dropdown-item" href="<?php echo site_url('/partenariats')?>">Je deviens partenaire</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/contact')?>">Contact</a>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
            <!--<button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
              data-target="#navbarTogglerDemo01" aria-expanded="false">
              <span class="fa fa-search" aria-hidden="true"></span>
            </button>-->
        </div>
    </nav>
</header>
<!--/ Nav End /-->