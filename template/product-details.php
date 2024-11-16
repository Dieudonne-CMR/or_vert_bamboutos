<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:53 GMT -->
<head>
    <meta charset="utf-8">
    <base href="../">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='Produits detail'; include "includes/meta.php" ?>

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



    <meta property="og:url" content=" " />

<?php $meer = strip_tags($courte_description) ?>
<meta property="og:type" content="website" />
<meta property="og:title" content=" <?= $nom_produit ?>" />
<meta property="og:description"
    content=" <?= strip_tags($courte_description) ?>" />
<meta property="og:image"
    content="<?= $image_produit . $lien_img_vedette  ?>" />
<!-- ....................... -->
 <?php 
        $lien_watSapp = "https://api.whatsapp.com/send?phone=$mumero&text= Bonjour j'ai besoin de ce produit: ".url();
 ?>
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
    <div class="breadcumb-wrapper" data-bg-src="<?= $image_produit . $lien_img_vedette ?>">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?= $nom_produit ?></h1>
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
    Products-details area
    ============================== -->
    <div class="vs-product-wrapper product-details space-top space-extra-bottom">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
              <div class="product-slide-row row">
                <div class="col-lg-2 col-md-3">
                    <div class="product-thumb-slide vs-carousel" data-slide-show="6" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img" data-vertical="true" data-md-vertical="true" data-sm-vertical="false">
                        <div>
                          <div class="thumb"><img src="<?= $image_produit . $lien_img_vedette ?>" alt="Product Image"></div>
                        </div>
                        <?php if(!empty($lien_img2)): ?>
                            <div>
                            <div class="thumb"><img src="<?= $image_produit . $lien_img2 ?>" alt="Product Image"></div>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($lien_img3)): ?>
                            <div>
                            <div class="thumb"><img src="<?= $image_produit . $lien_img3 ?>" alt="Product Image"></div>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($lien_img4)): ?>
                            <div>
                            <div class="thumb"><img src="<?= $image_produit . $lien_img4 ?>" alt="Product Image"></div>
                            </div>
                        <?php endif ?>

                        <?php if(!empty($lien_img5)): ?>
                            <div>
                            <div class="thumb"><img src="<?= $image_produit . $lien_img5 ?>" alt="Product Image"></div>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                        <div class="img"><img src="<?= $image_produit . $lien_img_vedette ?>" alt="Product Image"></div>

                        <?php if(!empty($lien_img2)): ?>
                            <div class="img"><img src="<?= $image_produit . $lien_img2 ?>" alt="Product Image"></div>
                        <?php endif; ?>

                        <?php if(!empty($lien_img3)): ?>
                            <div class="img"><img src="<?= $image_produit . $lien_img3 ?>" alt="Product Image"></div>
                        <?php endif; ?>

                        <?php if(!empty($lien_img4)): ?>
                            <div class="img"><img src="<?= $image_produit . $lien_img4 ?>" alt="Product Image"></div>
                        <?php endif; ?>

                        <?php if(!empty($lien_img5)): ?>
                            <div class="img"><img src="<?= $image_produit . $lien_img5 ?>" alt="Product Image"></div>
                        <?php endif; ?>

                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="product-about">
                <div class="product-rating">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                  <span class="product-rating__total">Review (03)</span>
                  <span class="available"><i class="far fa-check"></i>Disponible</span>
                </div>
                <h2 class="product-title"><?= $nom_produit ?></h2>
                <div class="actions">
                    <div class="quantity">
                      <div class="quantity__field quantity-container">
                        <input type="number" id="quantity" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                        <div class="quantity__buttons">
                          <button class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
                          <button class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
                        </div>
                      </div>
                    </div>
                    <p class="product-price"><?= $prix_reel .' '.$code_iso_devise  ?> <del><?= $prix_fictif .' '.$code_iso_devise ?></del></p>
                    <p><?= $courte_description ?></p>
                    <a href="<?= $lien_watSapp ?>" class="vs-btn">
                        <!-- <i class="far fa-shopping-basket"></i> --> 
                         <img src="https://cdn-icons-png.flaticon.com/128/1384/1384055.png" style="height: 2rem">
                        Acheter</a>
                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                </div>
                <div class="product_meta">
                  <?php /*<span class="sku_wrapper">
                  <p>SKU:</p> <span class="sku">#WE443</span>
                  </span> */?>
                  <span class="posted_in">
                  <p>Categorie:</p> <a href="#" rel="tag"><?= recup_detail_cat($mat_categorie_art)[0]-> libelle ?> </a>
                  <?php /*<a href="#" rel="tag"> food , </a> <a href="#" rel="tag"> natural</a> */?>
                </span>
                </div>
                <?php /*<div class="shep-img">
                    <img src="assets/img/service/selling-img-1-2.png" alt="selling-img">
                </div> */?>
              </div>
            </div>
          </div>
          <div class="product-description">
            <div class="product-description__tab">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                </li>
                <?php /*
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="false">Additional Information</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (03)</button>
                </li> */?>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="description">
                    <h3 class="description-title h5">description</h3>
                  <p class="text">
                  <?= $description  ?>
                  </p>
                    
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:55 GMT -->
</html>