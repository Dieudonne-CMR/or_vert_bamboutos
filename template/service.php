
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
    <?php /*<section class="selling-layout1 bg-white space-bottom">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="selling-style1 space-top">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Welcome to Farmix</span>
                            <h2 class="sec-title">Agriculture & Organic Product Farm</h2>
                        </div>
                        <div class="list-style1">
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Before you can dive-in to creating an effective user experience</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>intuitive user experience for your users online.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Videos within it, each element influences</li>
                            </ul>
                        </div>
                        <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                            <div class="col-auto">
                                <a href="blog-details.php"><img src="assets/img/blog/blog-s-1-1.png" alt="Blog Image"></a>
                            </div>
                            <div class="col-auto">
                                <a href="blog-details.php"><img src="assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            </div>
                            <div class="col-auto">
                                <a href="blog-details.php"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="selling-img">
                        <img src="assets/img/service/selling-img-1-1.png" alt="selling-img">
                        <div class="img1">
                            <img src="assets/img/service/selling-img-1-2.png" alt="selling-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup moving z-index d-none d-lg-block" style="right: 0%; bottom: 22%;"><img src="assets/img/shep/selling-shep-1.png" alt="shapes"></div>
    </section> */?>

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
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Avant de pouvoir vous lancer dans la création d'une expérience utilisateur efficace.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Expérience utilisateur intuitive pour vos utilisateurs en ligne.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Vidéos à l'intérieur, chaque élément influence.</li>
                            </ul>
                            <?php endif ?>
                        </div>
                        <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                        <?php foreach($article2 as $key=>$val2) :
                               if($key<3) { ?>                            
                            <div class="col-auto">
                                <a href="blog-details/<?= $val2->matricule?>"><img src="<?= $url_image.$val2->photo ?>" alt="Blog Image"></a>
                            </div>
                              <?php }else{
                                break;
                              }
                              endforeach  ?>
                         <?php /*   
                            <div class="col-auto">
                                <a href="blog-details"><img src="assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            </div>
                            <div class="col-auto">
                                <a href="blog-details"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                            </div>
                            */ ?>
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
    Service Area
    ============================== -->
    <div class="service-layout1 space-bottom mt-4">
        <div class="container">
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false">
             <?php                                                                                                        foreach($services as $values ) : ?>
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
    <section class="provide-layout1 space" data-bg-src="https://th.bing.com/th/id/OIP.wmc5871_N_LWkySo8fJZ6gHaEK?rs=1&pid=ImgDetMain">
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
    </section>
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
                              Une alimentation 100% naturelle et 100% biologique ?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                              L'avocat est un fruit extrêmement nutritif et populaire, apprécié dans une multitude de plats, des salades aux guacamoles, en passant par les smoothies. 
                              Mais lorsqu'on parle d'un avocat 100% naturel et 100% biologique, il s'agit de deux aspects essentiels : 
                              la naturelle fait référence à l'absence de traitements chimiques ou de modifications génétiques, 
                              tandis que la biologique renvoie à des méthodes de culture respectueuses de l'environnement, 
                              sans l'utilisation de produits chimiques de synthèse (engrais chimiques, pesticides, herbicides) et
                              dans le respect des normes biologiques certifiées.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Quels produits agricoles sont produits ?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Nous produisons des produits végétaux tels que <br/> Les Céréales : blé, maïs, riz, orge, avoine, seigle <br/>
                              Légumineuses : pois, lentilles, haricots, pois chiches <br/>
                              Fruits : pommes, bananes, oranges
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Quels sont les 5 principaux produits agricoles ?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Les principaux produits agricoles sont les suivants : Maïs, Blé, Riz, Pommes de terre, Soja
                                </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Quel produit agricole est le plus important et pourquoi ?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Le maïs est souvent considéré comme le produit agricole le plus important au monde. Voici pourquoi : <br\>

                                 1.Aliment de base mondial : Le maïs est une source majeure de calories et de nutriments pour l'alimentation humaine dans de nombreuses régions, notamment en Amérique latine, en Afrique et en Asie. <br\>

                                 2.Utilisation diversifiée : En plus de son utilisation directe pour l'alimentation humaine (en grains, farine, huile, etc.), il est aussi largement utilisé pour l'alimentation animale, ce qui en fait une composante clé de l'agriculture animale. <br\>

                                 3.Industrie et biocarburants : Le maïs est un ingrédient clé dans la production d’éthanol (biocarburant), ce qui en fait un produit stratégique dans les domaines de l’énergie et de l’industrie chimique. <br\>

                                 4.Production à grande échelle : Il est cultivé dans presque tous les continents, avec de vastes surfaces agricoles dédiées à sa culture, particulièrement aux États-Unis, qui sont le premier producteur mondial. <br\>

                                 5.Adaptabilité : Le maïs peut être cultivé dans une large gamme de climats et de sols, ce qui en fait une culture adaptable et résistante.
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                      <div class="faq-img1">
                        <img data-bg-src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.santemagazine.fr%2Falimentation%2Faliments-et-sante%2Flegumes%2Favocat-tous-les-bienfaits-sante-de-ce-fruit-192865&psig=AOvVaw0f4ME3ZQhqRV--CqQcVVmX&ust=1731587447061000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMj_1Myo2YkDFQAAAAAdAAAAABAE" alt="faq 1">
                      </div>
                      <div class="faq-img2">
                        <img src="assets/img/faq/faq-1-2.jpg" alt="faq 1">
                      </div>
                      <div class="media-box1">
                        <span class="media-info">100%</span>
                        <p class="media-text">satisfaction des clients</p>
                      </div>
                    </div>
                  </div>
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/service.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:28 GMT -->
</html>