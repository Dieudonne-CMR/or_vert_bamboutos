
<?php // var_dump($services) ?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/service.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='Services'; include "includes/meta.php" ?>
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
    <?php include "includes/header.php" ?>
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Nos Services</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home">Accueil</a></li>
                    <li>Nos Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Selling Area
    ============================== -->

    <!--==============================
    Service Area
    ============================== -->
    <div class="service-layout1 space">
        <div class="container">
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false">
             <?php                                                                                                        foreach($services as $values ) : ?>
                <div class="col-auto">
                    <div class="service-style1">
                     
                        <div class="service-img2"><img id="im1" src="<?= $img_service . $values->image ?>" alt="service thumbnail"></div>
                        <div class="service-img"><img id="im1" src="<?= $img_service . $values->image ?>" alt="service thumbnail"></div>
                        <div class="service-inner">
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-1.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details/<?= $values->matricule_service ?>"><?= $values->nom ?></a></h3>
                            <?php include "reduire-texte.php" ?>
                            <p class="service-text"><?= $values->description ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="service-details/<?= $values->matricule_service ?>">Lire plus<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
             <?php endforeach?>    
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
                            <div class="service-icon"><img src="assets/img/icon/service-icon-1-1.png" alt="icon"></div>
                            <h3 class="service-title h5"><a href="service-details.html"><?= $titre_s3 ?></a></h3>
                            <p class="service-text"><?= $discription_s1 ?></p>
                        </div>
                        <div class="link-btn">
                            <a href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div> */?>

            </div>
        </div>
    </div>
    <!--==============================
    Provide Area
    ============================== -->
    <?php /* <section class="provide-layout1 space" data-bg-src="https://th.bing.com/th/id/OIP.wmc5871_N_LWkySo8fJZ6gHaEK?rs=1&pid=ImgDetMain">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="provide-style1">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Bienvenue <?= $nom_entreprise ?></span>
                            <h2 class="sec-title">Ce que nous proposons</h2>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <img src="assets/img/icon/counter-icon1.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Aliments de qualité</a></h2>
                                        <p class="text">Les aliments de qualité sont ceux qui offrent un maximum de bienfaits ...</p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <img src="assets/img/icon/counter-icon2.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Tout bio</a></h2>
                                        <p class="text">Nos aliments sont cultivés selon des méthodes respectueuses de l'environnement.</p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <img src="assets/img/icon/counter-icon3.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Équipe sympathique</a></h2>
                                        <p class="text">Nous mettons à votre disposition une équipe sympathique et ...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <img src="assets/img/icon/counter-icon4.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Respectueux de l'environnement</a></h2>
                                        <p class="text">Nous Adoptons des pratiques respectueuses de l'environnement ...</p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <img src="assets/img/icon/counter-icon5.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Légumes frais</a></h2>
                                        <p class="text">Les légumes frais sont une excellente source de vitamines, Ils sont bénéfiques pour la santé</p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon"> 
                                        <img src="assets/img/icon/counter-icon6.png" alt="provide icon">
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6"><a href="service">Utilisation des produits verts</a></h2>
                                        <p class="text">Ceci fait référence à l’adoption de produits respectueux de l’environnement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> */?>
    <!--==============================
    Faq Area
    ============================== -->
       <section class="faq-layout1 space">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">Une question s'il vous plaît ?</span>
                        <h2 class="sec-title">Questions et réponses courantes</h2>
                    </div>
                    <div class="accordion-style1">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Quels sont les principaux produits fabriqués à base d’avocat par L'Or Vert des Bamboutos Sarl ?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                              <div class="accordion-body">Nous produisons de l'huile végétale d'avocat, du thé à base de feuilles d'avocat, du jus d'avocat, du compost issu des déchets d'avocat et une gamme de cosmétiques tels que des huiles pour le corps, des baumes de massage et des shampoings.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Pourquoi choisir les produits à base d’avocat pour sa consommation ?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                L’avocat est riche en nutriments essentiels tels que les acides gras, les vitamines A, E, et K, ainsi que les antioxydants. Ces éléments favorisent une bonne santé cardiovasculaire, hydratent la peau et les cheveux, et offrent des bienfaits anti-inflammatoires.
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Où cultivez-vous vos avocats ?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Nos avocats proviennent des Bamboutos, une région fertile située à l’ouest du Cameroun, notamment dans l’arrondissement de Babadjou. Cette région est réputée pour ses conditions climatiques favorables et son sol riche, garantissant des fruits de qualité supérieure.
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Les produits à base d’avocat sont-ils 100 % biologiques ?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Oui, tous nos produits sont garantis 100 % biologiques. Nous utilisons des pratiques agricoles respectueuses de l’environnement, sans produits chimiques, pour préserver la qualité et les bienfaits naturels de l’avocat.
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                      <div class="faq-img1">
                        <img src="https://th.bing.com/th/id/R.21b7f66240529332a988f702a0ca85f6?rik=n9n6cK1DPPa%2brw&pid=ImgRaw&r=0" alt="faq 1">
                      </div>
                      <div class="faq-img2">
                        <img src="https://th.bing.com/th/id/R.60f7bdca69381852a5243a6b8077b859?rik=ejZwaap%2f7GXWoA&pid=ImgRaw&r=0" alt="faq 1">
                      </div>
                      <div class="media-box1">
                        <span class="media-info">100%</span>
                        <p class="media-text">clients satisfaction</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
   
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/service.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:28 GMT -->
</html>