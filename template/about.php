<?php include "includes/main_header/main_header.php" ?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='A propos'; include "includes/meta.php" ?>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&amp;family=DM+Sans:wght@400&amp;display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
    
    <?php include "includes/header.php" ?>

    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">À PROPOS DE NOUS</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home.php">Accueil</a></li>
                    <li>À propos de nous</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ============================== -->
    <?php include "includes/section_about.php" ?>
    <!--==============================
    Process Area
    ============================== -->
    <?php include 'includes/section_equipe.php' ?>
    <!--==============================
    History Area
    ============================== -->
    <section class="history-layout1 space" data-bg-src="assets/img/bg/history-bg-1.jpg">
        <div class="container">
            <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="title-left">
                        <span class="sec-subtitle">NOTRE PROJET DE TRAVAIL</span>
                        <h2 class="sec-title">Dernières nouvelles de notre travail</h2>
                    </div>
                    <div class="title-arraw">
                        <button class="icon-btn slick-prev" data-slick-prev=".project-slider"><i class="fas fa-angle-double-left"></i></button>
                        <button class="icon-btn slick-next" data-slick-next=".project-slider"><i class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel project-slider" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-center-mode="true">
                <div class="col-lg-4">
                    <div class="history-style1">
                        <h2 class="history-title">Valorisation de l’Avocat</h2>
                        <p class="history-text">
                        Nous développons une gamme complète de produits alimentaires et cosmétiques à base d’avocat
                        </p>
                        <span class="year">2020</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="history-style1">
                        <h2 class="history-title">Agroalimentaire et Cosmétique</h2>
                        <p class="history-text">
                        En innovant dans la transformation de l’avocat, nous introduisons de nouvelles habitudes de consommation et de soins au Cameroun.
                        </p>
                        <span class="year">2020</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="history-style1">
                        <h2 class="history-title">Producteurs Locaux</h2>
                        <p class="history-text">
                        Nous travaillons en étroite collaboration avec les producteurs d'avocats de la région des Bamboutos pour leur fournir les outils, la formation et l’assistance nécessaires à une production durable.
                        </p>
                        <span class="year">2022</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="history-style1">
                        <h2 class="history-title">Sensibilisation et Éducation</h2>
                        <p class="history-text">
                        Notre projet inclut des actions de sensibilisation pour éduquer le public sur les bienfaits de l’avocat et encourager sa consommation responsable.
                        </p>
                        <span class="year">2023</span>
                    </div>
                </div>
            </div>
            <div class="border-shep">
                <img src="assets/img/shep/history-border.png" alt="shep">
            </div>
        </div>
    </section>
    <!--==============================
    Counter Area
    ============================== -->
    <?php include "includes/section_counter.php" ?>
    <!--==============================
    Testmonial Area
    ============================== -->
    <?php include('includes/section_testimonial.php') ?>
    <!--==============================
    Brand Area
    ============================== -->
    <?php include "includes/section_partenaire.php" ?>
    
    <!--==============================
			Footer Area
	==============================-->
    <?php include "includes/footer.php" ?>
    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from html.vecurosoft.com/farmix/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:28 GMT -->
</html>