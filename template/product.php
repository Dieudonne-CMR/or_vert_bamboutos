<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='Produit'; include "includes/meta.php" ?>

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
                <h1 class="breadcumb-title">Nos produits</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home">Acceuil</a></li>
                    <li>Nos produits</li>
                </ul>
            </div> 
        </div>
    </div>
    <!--==============================
    Products area
    ============================== -->
    <section class="products space">
        <div class="container">
            <div class="vs-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <div class="col-auto">
                            <p class="woocommerce-result-count">Affichage de 1 à 12 sur 13 résultats</p>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="row justify-content-center">
                            <div class="col-sm-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <?php foreach(recup_categories() as $value): ?>
                                            <option value="<?= $value ->id_website  ?>"><?= $value -> libelle ?></option>
                                        <?php endforeach; ?>
                                            <!-- <option value="menu_order" selected="selected">Default Sorting</option> -->
                                        
                                    </select>
                                </form>
                            </div>
                            <div class="col-auto">
                                <div class="nav" role=tablist>
                                    <a href="#" class="icon-btn" id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-list"></i></a>
                                    <a href="#" class="icon-btn active" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach( $produits as $value):?>
   
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-style1">
                            <div class="product-img">
                                <img src="<?= $image_produit . $value->lien_img_vedette ?>" alt="product img">
                            </div>
                            <div class="product-meta">30% Off</div>
                            <div class="product-about">
                                <p class="text"><?=  recup_detail_cat($value ->mat_categorie_art)[0]  -> libelle; ?></p>
                                <h2 class="product-title"><a href="product-details/<?=  $value -> mat_article ?>"><?= $value ->nom_art ?></a></h2>
                                <span class="price"> <del><?=  $value ->prix_fictif ?></del><?=  $value ->prix_reel ?></span>
                                <div class="rating"> 
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="social-style">
                                <ul>
                                    <li>
                                        <a class="main-icon" href="#"><i class="far fa-shopping-basket"></i></a>
                                        <ul class="sub-list">
                                            <li><a href="#"><i class="fas fa-exchange"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="vs-pagination text-center mb-0 mt-4">
                <ul>
                    <li class="arrow"><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">6</a></li>
                    <li class="arrow"><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--==============================
    Offer Area
    ============================== -->
    <div class="space-bottom">
        <div class="container">
            <div class="row">
                <div class="offer-deal">
                    <div class="row gy-5 gx-5 align-items-center">
                        
                            <div class="col-lg-6">
                                <div class="row align-items-center" data-bg-src="assets/img/about/about-bg-1-2.jpg">
                                    <div class="col-lg-6 col-md-6 px-0">
                                        <div class="deal-offer white-style">
                                            <span class="offer-subtitle"><?= $produits[0]->nom_art ?></span>
                                            <h2 class="offer-title h3"><?=  recup_detail_cat($produits[0] ->mat_categorie_art)[0]  -> libelle; ?></h2>
                                            <p class="offer-text"><?= court_text($produits[0]->courte_description, 50 ) ?></p>
                                            <span class="price"> <del><?= $produits[0]->prix_fictif ?></del><?= $produits[0]->prix_reel ?></span>
                                            <a href="product-details/<?=  $produits[0] -> mat_article ?>" class="vs-btn">Acheter</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 px-0">
                                        <div class="offer-img">
                                            <img src="<?= $image_produit . $produits[0]->lien_img_vedette ?>" alt="offer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                       <div class="col-lg-6">
                            <div class="row align-items-center" data-bg-src="assets/img/about/about-bg-1-1.jpg">
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="deal-offer">
                                        <span class="offer-subtitle"><?= $produits[1]->nom_art ?></span>
                                        <h2 class="offer-title h3"><?=  recup_detail_cat($produits[0] ->mat_categorie_art)[0]  -> libelle; ?></h2>
                                        <p class="offer-text"><?= court_text($produits[1]->courte_description, 50 ) ?></p>
                                        <span class="price"> <del><?= $produits[1]->prix_fictif ?></del><?= $produits[1]->prix_reel ?></span>
                                        <a href="product-details/<?=  $produits[0] -> mat_article ?>" class="vs-btn">Acheter</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 px-0">
                                    <div class="offer-img">
                                        <img src="<?= $image_produit . $produits[1]->lien_img_vedette ?>" alt="offer">
                                    </div>
                                </div>
                            </div>
                        </div> 
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:53 GMT -->
</html>