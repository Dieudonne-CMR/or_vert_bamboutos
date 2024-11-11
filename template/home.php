<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:28:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Farmix - Agriculture & Farming Food Template - Home One</title>
    <meta name="author" content="Vecuro">
    <meta name="description" content="Farmix - Agriculture & Farming Food Template">
    <meta name="keywords" content="Farmix - Agriculture & Farming Food Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <style>
        :root {
  
  --title-font: "Fredoka", sans-serif !important;
  --body-font: "DM Sans", sans-serif !important;
  --icon-font: "Font Awesome 5 Pro";

}
    </style>
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
    Hero Area 
    ============================== -->
    <div class="hero-layout1">
        <div class="position-relative">
          <div class="vs-carousel hero-slider1" data-slide-show="1" data-autoplay="true" data-fade="true">
            <div class="hero-slide" data-bg-src="<?= $image_banniere . $banniere1 ?>">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-lg-7 mx-auto">
                    <div class="hero-content text-center">
                      <h1 class="hero-title"><?= $titre_banniere1 ?></h1>
                      <p class="hero-text"><?= $description_baniere1 ?></p>
                      <a href="about.html" class="vs-btn">Discovre More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-slide" data-bg-src="<?= $image_banniere . $banniere2 ?>">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-lg-7 mx-auto">
                    <div class="hero-content text-center">
                      <h1 class="hero-title"><?= $titre_banniere2 ?></h1>
                      <p class="hero-text"><?= $description_baniere2 ?></p>
                      <a href="about.html" class="vs-btn">Discovre More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-slide" data-bg-src="<?= $image_banniere . $banniere3 ?>">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-lg-7 mx-auto">
                    <div class="hero-content text-center">
                      <h1 class="hero-title"><?= $titre_banniere3 ?></h1>
                      <p class="hero-text"><?= $description_baniere3 ?></p>
                      <a href="about.html" class="vs-btn">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button class="icon-btn slick-prev" data-slick-prev=".hero-slider1"><i class="fas fa-angle-double-left"></i></button>
            <button class="icon-btn slick-next" data-slick-next=".hero-slider1"><i class="fas fa-angle-double-right"></i></button>
          </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ============================== -->
    <div class="service-layout1">
        <div class="container">
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false">
                <?php  foreach($services as $key=>$values) :?>
                    <?php if ($key<4) :?>
                <div class="col-auto">
                    <div class="service-style1">
                        <div class="service-img2"><img src="<?= $img_service . $values->image ?>" alt="service thumbnail"></div>
                        <div class="service-img"><img src="<?= $img_service . $values->image ?>" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-1.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $values->nom ?></a></h3>
                            <?php include "reduire-texte.php" ?>    
                            <p class="service-text"><?= $values->description ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php else: break ?>
                <?php endif ?>
                <?php endforeach ?>
                <?php /*
                <div class="col-auto">
                    <div class="service-style1">
                        <div class="service-img2"><img src="assets/img/service/service-1-2.jpg" alt="service thumbnail"></div>
                        <div class="service-img"><img src="assets/img/service/service-1-2.jpg" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-2.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $titre_s2 ?></a></h3>
                            <p class="service-text"><?= $discription_s2 ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="service-style1">
                        <div class="service-img2"><img src="assets/img/service/service-1-3.jpg" alt="service thumbnail"></div>
                        <div class="service-img"><img src="assets/img/service/service-1-3.jpg" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-3.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $titre_s3 ?></a></h3>
                            <p class="service-text"><?= $discription_s3 ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="service-style1">
                        <div class="service-img2"><img src="assets/img/service/service-1-4.jpg" alt="service thumbnail"></div>
                        <div class="service-img"><img src="assets/img/service/service-1-4.jpg" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-4.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $titre_s3 ?></a></h3>
                            <p class="service-text"><?= $discription_s3 ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="service-style1">
                        <div class="service-img2"><img src="assets/img/service/service-1-5.jpg" alt="service thumbnail"></div>
                        <div class="service-img"><img src="assets/img/service/service-1-5.jpg" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-5.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $titre_s3 ?></a></h3>
                            <p class="service-text"><?= $discription_s3 ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div> */ ?>
            </div>
        </div>
    </div>
    <!--==============================
    About Area
    ============================== -->
    <section class="about-layout1 space">
        <div class="container">
            <div class="row gx-5 justify-content-end">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="<?= $image_banniere . $image_about ?>" alt="about-image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Bienvenue chez <?= $nom_entreprise ?></span>
                            <?php /*<h2 class="sec-title">Agriculture & Organic Product Farm</h2> */?>
                        </div>
                        <p class="about-text"> <?= $apropos_entreprise ?>
                        </p>
                    </div>
                    <div class="auther-info">
                        <div class="auther-inner">
                            <?php /*<div class="auther-img">
                                <img src="assets/img/about/about-author.png" alt="about">
                            </div> */?>
                            <?php /*<div class="auther-content">
                                <h6 class="name">Thomas Walkar</h6>
                                <span class="designation">founde - CEO</span>
                            </div> */?>
                        </div>
                        <div class="author-signature">
                            <img src="assets/img/about/about-signature.png" alt="about-signature">
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-12 col-md-12">
                    <div class="about-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="item-img">
                                    <img src="https://i0.wp.com/www.santepeaunoir.com/wp-content/uploads/2021/05/les-avocats-du-cameroun.jpg?resize=683%2C1024&ssl=1" alt="about img">
                                    <a href="https://i0.wp.com/www.santepeaunoir.com/wp-content/uploads/2021/05/les-avocats-du-cameroun.jpg?resize=683%2C1024&ssl=1" class="play-btn popup-video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-style1 border1">
                                    <div class="about-inner">
                                        <div class="about-icon"><img src="assets/img/icon/about-icon-1-1.png" alt="icon"></div>
                                        <h3 class="about-title"><a href="service-details.html"><?= $titre_s1 ?></a></h3>
                                        <p class="about-text"><?= $discription_s1 ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-style1">
                                    <div class="about-inner">
                                        <div class="about-icon"><img src="assets/img/icon/about-icon-1-2.png" alt="icon"></div>
                                        <h3 class="about-title"><a href="service-details.html"><?= $titre_s2 ?></a></h3>
                                        <p class="about-text"><?= $discription_s2 ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index-n1 d-none d-xl-block" style="right: 9%; bottom: 22%;"><img src="assets/img/shep/about-shep-1.png" alt="shapes"></div>
    </section>
    <!--==============================
    Selling Area
    ============================== -->
    <section class="selling-layout1 bg-smoke space-bottom">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="selling-style1 space-top">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Bienvenue chez <?= $nom_entreprise ?></span>
                            <h2 class="sec-title"><?= !empty($motivation_titre) ? $motivation_titre: 'Agriculture et agriculture biologique' ?> </h2>
                        </div>
                        <div class="list-style1"> 
                            <?php if(!empty($motivation_desription)):?>
                            <?= $motivation_desription ?>
                            <?php else: ?>
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Before you can dive-in to creating an effective user experience</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>intuitive user experience for your users online.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Videos within it, each element influences</li>
                            </ul>
                            <?php endif ?>
                        </div>
                        <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                            <div class="col-auto">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-1.png" alt="Blog Image"></a>
                            </div>
                            <div class="col-auto">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            </div>
                            <div class="col-auto">
                                <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="selling-img">
                        <img src="<?= !empty($motivation_img)? $motivation_img :'assets/img/service/selling-img-1-1.png' ?> " style="border-radius: 0 0 40% 40%;" alt="selling-img">
                        <div class="img1">
                            <img src="assets/img/service/selling-img-1-2.png" alt="selling-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index d-none d-xxl-block" style="right: 0%; bottom: 22%;"><img src="assets/img/shep/selling-shep-1.png" alt="shapes"></div>
    </section>
    <!--==============================
    Process Area
    ============================== -->
    <?php if(!empty($equipe)): //  affiche l'equipe si elle existe  ?>
        <section class="process-layout1 space">
            <div class="container">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <div class="title-img">
                        <img src="assets/img/icon/title-logo.png" alt="title logo">
                    </div>
                    <span class="sec-subtitle">Welcome to Farmix</span>
                    <h2 class="sec-title">How We Do Agricultural Work</h2>
                </div>
                <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
                <?php foreach($equipe as $val) : ?>
                    <div class="col-lg-3">
                        <div class="process-style1">
                            <div class="process-img">
                                <img src="<?= $photo_equipe . $val->photo_memb ?>" alt="process-image">
                            </div>
                            <div class="process-content">
                                <h3 class="process-title h5"><a href="service-details.html"><?= $val->nom ?></a></h3>
                                <p class="process-text"><?= $val->email ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <?php /* <div class="col-lg-3">
                        <div class="process-style1">
                            <div class="process-img">
                                <img src="assets/img/process/process-1-2.png" alt="process-image">
                            </div>
                            <div class="process-content">
                                <h3 class="process-title h5"><a href="service-details.html">Expert Farmer</a></h3>
                                <p class="process-text">Veritatis eligendi, dignissimo fermentum mus aute pulvinar platea massa rutrum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process-style1">
                            <div class="process-img">
                                <img src="assets/img/process/process-1-3.png" alt="process-image">
                            </div>
                            <div class="process-content">
                                <h3 class="process-title h5"><a href="service-details.html">Quality Pdoduct</a></h3>
                                <p class="process-text">Veritatis eligendi, dignissimo fermentum mus aute pulvinar platea massa rutrum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process-style1">
                            <div class="process-img">
                                <img src="assets/img/process/process-1-4.png" alt="process-image">
                            </div>
                            <div class="process-content">
                                <h3 class="process-title h5"><a href="service-details.html">We Deliver</a></h3>
                                <p class="process-text">Veritatis eligendi, dignissimo fermentum mus aute pulvinar platea massa rutrum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="process-style1">
                            <div class="process-img">
                                <img src="assets/img/process/process-1-5.png" alt="process-image">
                            </div>
                            <div class="process-content">
                                <h3 class="process-title h5"><a href="service-details.html">More Plan</a></h3>
                                <p class="process-text">Veritatis eligendi, dignissimo fermentum mus aute pulvinar platea massa rutrum.</p>
                            </div>
                        </div>
                    </div> */ ?>
                </div>
            </div>
            <div class="shape-mockup moving z-index d-none d-xl-block" style="left: 0%; top: 5%;"><img src="assets/img/shep/process-shep-1.png" alt="shapes"></div>
        </section>
    <?php endif ?>
    <!--==============================
    Project Area
    ============================== -->
    <section class="project-layout1 space-bottom">
        <div class="container">
            <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="title-left">
                        <span class="sec-subtitle">Our WOrking PROJECT</span>
                        <h2 class="sec-title">Latest From Our Work</h2>
                    </div>
                    <div class="title-arraw d-lg-block d-none">
                        <button class="icon-btn slick-prev" data-slick-prev=".project-slider"><i class="fas fa-angle-double-left"></i></button>
                        <button class="icon-btn slick-next" data-slick-next=".project-slider"><i class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel project-slider" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-center-mode="true">
                <div class="col-lg-4">
                    <div class="project-style1">
                        <div class="project-img">
                            <img src="assets/img/project/project-img-1-1.jpg" alt="project-img">
                            <span class="price">$50.00</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><a href="service-details.html">Agriculture</a></h3>
                            <p class="project-text"><i class="far fa-map-marker-alt"></i>California, TX 70240</p>
                            <div class="link-btn">
                                <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-style1">
                        <div class="project-img">
                            <img src="assets/img/project/project-img-1-2.jpg" alt="project-img">
                            <span class="price">$50.00</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><a href="service-details.html">Old Hall Farm</a></h3>
                            <p class="project-text"><i class="far fa-map-marker-alt"></i>California, TX 70240</p>
                            <div class="link-btn">
                                <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-style1">
                        <div class="project-img">
                            <img src="assets/img/project/project-img-1-3.jpg" alt="project-img">
                            <span class="price">$50.00</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><a href="service-details.html">Gosberton Bank Nursery</a></h3>
                            <p class="project-text"><i class="far fa-map-marker-alt"></i>California, TX 70240</p>
                            <div class="link-btn">
                                <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-style1">
                        <div class="project-img">
                            <img src="assets/img/project/project-img-1-5.jpg" alt="project-img">
                            <span class="price">$50.00</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><a href="service-details.html">Starcross Farm</a></h3>
                            <p class="project-text"><i class="far fa-map-marker-alt"></i>California, TX 70240</p>
                            <div class="link-btn">
                                <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-style1">
                        <div class="project-img">
                            <img src="assets/img/project/project-img-1-4.jpg" alt="project-img">
                            <span class="price">$50.00</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><a href="service-details.html">Agriculture</a></h3>
                            <p class="project-text"><i class="far fa-map-marker-alt"></i>California, TX 70240</p>
                            <div class="link-btn">
                                <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <span class="notice">Need help converting to organic or farming more sustainably? <a href="tel:+4733378901">Phone No: +4733378901</a> </span>
        </div>
    </section>
    <!--==============================
    Counter Area
    ============================== -->
    <section class="counter-layout1 space"  data-bg-src="https://gardeninglatest.com/wp-content/uploads/2022/08/developing-fruit-on-avocado-tree.jpg">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7">
                    <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <div class="title-img">
                            <img src="assets/img/icon/title-logo.png" alt="title logo">
                        </div>
                        <h2 class="sec-title"><?= $mention_titre ?></h2>
                        <span class="sec-subtitle"> <?= $mention_des ?></span>
                        <a href="#" class="vs-btn">Start Discussion!</a>
                    </div>
                </div>
            </div>
            <div class="row z-index-common g-5 justify-content-lg-between justify-content-center">
                <div class="col-xl-auto col-lg-4 col-md-6">
                    <div class="media-style">
                        <div class="media-inner">
                            <div class="media-icon">
                                <div class="icon">
                                    <img src="assets/img/icon/counter-icon1.png" alt="counter-icon">
                                </div>
                            </div>
                            <div class="media-counter">
                                <div class="media-count">
                                    <h2 class="media-title counter-number" data-count="<?= $mention1 ?>">02</h2>
                                    <span class="media-count_icon"><i class="far fa-plus"></i></span>
                                </div>
                                <p class="media-text"><?= $mention_titre1 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6">
                    <div class="media-style">
                        <div class="media-inner">
                            <div class="media-icon">
                                <div class="icon">
                                    <img src="assets/img/icon/counter-icon2.png" alt="counter-icon">
                                </div>
                            </div>
                            <div class="media-counter">
                                <div class="media-count">
                                    <h2 class="media-title counter-number" data-count="<?= $mention2 ?>">00</h2>
                                    <span class="media-count_icon"><i class="far fa-percent"></i></span>
                                </div>
                                <p class="media-text"><?= $mention_titre2 ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6">
                    <div class="media-style">
                        <div class="media-inner">
                            <div class="media-icon">
                                <div class="icon">
                                    <img src="assets/img/icon/counter-icon3.png" alt="counter-icon">
                                </div>
                            </div>
                            <div class="media-counter">
                                <div class="media-count">
                                    <h2 class="media-title counter-number" data-count="<?= $mention3 ?>">00</h2>
                                    <span class="media-count_icon"><i class="far fa-plus"></i></span>
                                </div>
                                <p class="media-text"><?= $mention_titre3 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6">
                    <div class="media-style">
                        <div class="media-inner">
                            <div class="media-icon">
                                <div class="icon">
                                    <img src="assets/img/icon/counter-icon4.png" alt="counter-icon">
                                </div>
                            </div>
                            <div class="media-counter">
                                <div class="media-count">
                                    <h2 class="media-title counter-number" data-count="<?= $mention4 ?>">00</h2>
                                    <span class="media-count_icon"><i class="far fa-plus"></i></span>
                                </div>
                                <p class="media-text"><?= $mention_titre4 ?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index d-none d-lg-block" style="right: 8%; bottom: 22%;"><img src="assets/img/shep/about-shep-1.png" alt="shapes"></div>
    </section>
    <!--==============================
    Testmonial Area
    ============================== -->
    <section class="testimonial-layout1 space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">CLIENT TESTIMONIAL</span>
                        <h2 class="sec-title">Que dit le client ?</h2>
                    </div>
                    <div class="vs-carousel" data-arrows="false" data-center-mode="left" data-dots="true" data-autoplay="true" data-slide-show="1">
                        <div class="testi-style1">
                            <div class="auther-inner">
                                <div class="auther-img">
                                    <img src="assets/img/testimonial/testi-img-1-1.png" alt="testimonial">
                                    <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                                </div>
                                <div class="auther-content">
                                    <h6 class="name">Thomas Willimes</h6>
                                    <span class="designation">Organic Real Farmer</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testi-text">Une entreprise qui transforme l'avocat 
                                en véritable atout pour la santé et le bien-être ! L'Or Vert des
                                 Bamboutos s'engage à offrir des produits de qualité tout en soutenant 
                                les producteurs locaux. Bravo pour cette initiative !
                            </p>
                        </div>
                        <div class="testi-style1">
                            <div class="auther-inner">
                                <div class="auther-img">
                                    <img src="assets/img/testimonial/testi-img-1-1.png" alt="testimonial">
                                    <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                                </div>
                                <div class="auther-content">
                                    <h6 class="name">Thomas Willimes</h6>
                                    <span class="designation">Organic Real Farmer</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testi-text">L'Or Vert des Bamboutos fait preuve 
                                d'innovation en valorisant l'avocat sous toutes ses formes. 
                                Des produits alimentaires aux cosmétiques, cette entreprise 
                                propose des solutions durables et respectueuses 
                                de l'environnement. Félicitations pour ce modèle exemplaire !
                            </p>
                        </div>
                        <div class="testi-style1">
                            <div class="auther-inner">
                                <div class="auther-img">
                                    <img src="assets/img/testimonial/testi-img-1-1.png" alt="testimonial">
                                    <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                                </div>
                                <div class="auther-content">
                                    <h6 class="name">Thomas Willimes</h6>
                                    <span class="designation">Organic Real Farmer</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testi-text">Impressionné par l'engagement de L'Or 
                                Vert des Bamboutos pour le développement durable. Leur approche 
                                biologique et leur soutien aux producteurs locaux sont un modèle 
                                pour l'industrie agroalimentaire. 
                                Hâte de découvrir leurs produits !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-img">
                        <img src="assets/img/testimonial/testi-img.png" alt="testimonial">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index-n1 d-none d-xl-block" style="right: 0%; bottom: 5%;"><img src="assets/img/shep/testmonial-shep-1.png" alt="shapes"></div>
    </section>
    <!--==============================
    Blog Area
    ============================== -->
    <section class="blog-layout1 space-bottom">
        <div class="container">
            <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="title-img">
                    <img src="assets/img/icon/title-logo.png" alt="title logo">
                </div>
                <span class="sec-subtitle">Blog & News</span>
                <h2 class="sec-title">Recent Articles</h2>
            </div>
            <?php ?>
            <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
            <?php 
            foreach($article as $key=> $value1) :
              if($key<6){ ?>
                <div class="col-lg-4">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= $url_image . $value1->photo ?>" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i><?= $value1->id_categorie ?></a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details/<?=  $value1->matricule ?>"><?= $value1->titre ?></a></h2>
                            <div class="blog-inner-author">
                                <img src="<?= $url_image . $value1->photo ?>" alt="blog author">
                                <div class="text">
                                    Par <a href="blog.html"><?= info_admin($value1->matricule_admin)->nom                     
                                    ?></a>
                                    <a href="blog.html" class="blog-date"><?= $value1->date ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php }
             else{
                break;
             }
             endforeach
            ?>  
                
                
                
                
                
                <?php /* $i=0;
                //var_dump($article);
                 while($i<6){  
                 $value1 = $article[$i];                             
                ?>
                <div class="col-lg-4">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= $url_image . $value1->photo ?>" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html"><?= $value1->titre ?></a></h2>
                            <div class="blog-inner-author">
                                <img src="<?= $url_image . $value1->photo ?>" alt="blog author">
                                <div class="text">
                                    by <a href="blog.html"><?= $value1->user_admin ?></a>
                                    <a href="blog.html" class="blog-date"><?= $value1->date ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                 $i++; } */?>
                <?php /*
                <div class="col-lg-4">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Releases Their Initial Annual</a></h2>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                <div class="text">
                                    by <a href="blog.html">Jakki James</a>
                                    <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">First Annual Report by Harvest is Published</a></h2>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                <div class="text">
                                    by <a href="blog.html">Jakki James</a>
                                    <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-img-1-4.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest Issues London Its  Annual Report</a></h2>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                <div class="text">
                                    by <a href="blog.html">Jakki James</a>
                                    <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                */ ?>
            </div>
            <div class="blog-btn">
                <a href="blog.html" class="vs-btn">View All News</a>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Area
    ============================== -->
    <div class="brand-layout1 space-bottom">
        <div class="container">
            <div class="row vs-carousel z-index-common" data-arrows="false" data-wow-delay="0.4s" data-slide-show="6"
                data-lg-slide-show="4" data-md-slide-show="4" data-xs-slide-show="2" data-center-mode="true" data-autoplay="true">
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-2.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-3.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-4.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-5.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-6.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-2.png" alt="brand">
                        </div>
                    </div>
                </div>
        </div>
    </div>




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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:31:07 GMT -->
</html>