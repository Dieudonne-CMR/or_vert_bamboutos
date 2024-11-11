<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:28:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='Accueil'; include "includes/meta.php" ?>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <h3 class="service-title h5"><a href="service-details/<?= $values->matricule_service ?>"><?= $values->nom ?></a></h3>
                            <?php include "reduire-texte.php" ?>    
                            <p class="service-text"><?= $values->description ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="service-details/<?= $values->matricule_service ?>">Lire Plus <i class="far fa-arrow-right"></i></a>
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
    <?php include "includes/section_about.php" ?>
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
   <?php include 'includes/section_equipe.php' ?>
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
            <span class="notice">Besoin d'aide pour passer à l'agriculture biologique ou pratiquer une agriculture plus durable ? <a href="tel:+<?= $telephone  ?>">Téléphone:<?= $telephone  ?> </a> </span>
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
                                <img src="<?= info_admin($value1->matricule_admin)->profil ?>" alt="blog author">
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
                <a href="blog" class="vs-btn">View All News</a>
            </div>
        </div>
    </section>
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:31:07 GMT -->
</html>