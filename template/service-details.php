<?php include "includes/main_header/main_header.php" ?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:28 GMT -->
<head>
    <meta charset="utf-8">
    <base href="../">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='service detail'; include "includes/meta.php" ?>

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
    Mobile Menu
    ============================== -->
    <?php include "includes/header.php" ?>
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?= $det_service[0] -> nom ?></h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home">Accueil</a></li>
                    <li>Details du service</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
     Service-details Area
    ============================== -->
    <section class="service-details space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-content">
                        <h2 class="service-title h1"><?= $det_service[0]->nom ?></h2>
                        <?php /*<p class="service-text"><?= $det_service[0]->description ?>
                        </p> */ ?>
                        <div class="service-img1">
                            <img src="<?=$img_service.$det_service[0]->image ?>" alt="service img">
                        </div>
                        <p class="service-text"><?= $det_service[0]->description ?>
                        </p>
                        <?php /*
                        <h4 class="service-title">Causes of Water Losses</h4>
                        <p class="service-text">dolorem ipsuquia dolor sit amet, consectetur, adipisci velit. Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem.</p>
                        <div class="list-style1">
                            <ul class="list-unstyled">
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>Before you can dive-in to creating an effective user experience</li>
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>intuitive user experience for your users online.</li>
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>Videos within it, each element influences</li>
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>By providing an engaging user experience</li>
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>Chances of converting your website visitors online.</li>
                                <li><span class="icon"><img src="assets/img/icon/list-icon.png" alt="icon"></span>From the overarching goal of your website, to the images and videos</li>
                            </ul>
                        </div>
                        <div class="row mt-30">
                            <div class="col-md-6 mb-30"><img src="assets/img/service/service-setails-1-2.jpg" alt="service-details"></div>
                            <div class="col-md-6 mb-30"><img src="assets/img/service/service-setails-1-3.jpg" alt="service-details"></div>
                        </div>
                        <h4 class="service-title">Process of Watercourse Improvement</h4>
                        <p class="service-text">dolorem ipsuquia dolor sit amet, consectetur, adipisci velit. Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem.</p>
                        <div class="list-style2">
                            <ul class="list-unstyled">
                                <li>Before you can dive-in to creating an effective user experience</li>
                                <li>intuitive user experience for your users online.</li>
                                <li>Videos within it, each element influences</li>
                                <li>By providing an engaging user experience</li>
                                <li>Chances of converting your website visitors online.</li>
                                <li>From the overarching goal of your website, to the images and videos</li>
                            </ul>
                        </div>
                        <h4 class="service-title">Procedure for getting the facility</h4>
                        <p class="service-text">orem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsuquia dolor sit amet, consectetur, adipisci velit. Lorem ipsum dolor sit amet, porro quisqua
                            m est, qui dolorem ipsuquia dolor sit amet, consectetur, adipisci velit. Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsuquia dolor sit amet,
                            consectetur, adipisci velit. Lorem ipsum dolor sit amet, porro quisquam
                        </p> */ ?>
                       <!-- <div class="share-links clearfix mb-0">
                            <div class="row justify-content-between">
                                <div class="col-xl-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">Microgreen</a>
                                        <a href="blog.html">farming</a>
                                        <a href="blog.html">Uncategorized</a>
                                    </div>
                                </div>
                                <div class="col-xl-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
-->
                
                    </div>
                </div>
            </div>
        </div>
    </section>
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:36 GMT -->
</html>