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
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home.php"><img src="assets/img/logo.png" alt="Farmix"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="home.php">Acceuil</a>
                        <ul class="sub-menu"> 
                            <li><a href="home.php">Home Style 1</a></li>
                            <li><a href="index-2.html">Home Style 2</a></li>
                            <li><a href="index-3.html">Home Style 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php">À propos de nous</a>
                    </li> 
                    <li class="menu-item-has-children">
                        <a href="service.php">Service</a>
                        <ul class="sub-menu"> 
                            <li><a href="service.php">Service</a></li>
                            <li><a href="service-details.php">Détails du servcie</a></li>
                        </ul>
                    </li> 
                    <li class="menu-item-has-children">
                        <a href="blog.php">Article</a>
                        <ul class="sub-menu"> 
                            <li><a href="blog.php">Article</a></li>
                            <li><a href="blog-details.php">Détails de l'article</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children mega-menu-wrap">
                        <a href="#">Pages</a>
                        <ul class="mega-menu">
                            <li><a href="shop.html">Pagelist 1</a>
                                <ul>
                                    <li><a href="home.php">Home Style 1</a></li>
                                    <li><a href="index-2.html">Home Style 2</a></li>
                                    <li><a href="index-3.html">Home Style 3</a></li>
                                    <li><a href="about.php">À propos de nous</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pagelist 2</a>
                                <ul>
                                    <li><a href="blog.php">Article</a></li>
                                    <li><a href="blog-details.php">Détails de l'article</a></li>
                                    <li><a href="service.php">service</a></li>
                                    <li><a href="service-details.php">Détails du servcie</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pagelist 3</a>
                                <ul>
                                    <li><a href="project.html">Projects</a></li>
                                    <li><a href="project-details.html">project details</a></li>
                                    <li><a href="team-details.html">Team Details</a></li>
                                    <li><a href="contact.php">Contactez nous</a></li>
                                </ul>
                            </li> 
                            <li><a href="#">Pagelist 4</a>
                                <ul> 
                                    <li><a href="product.php">Produits</a></li>
                                    <li><a href="product-details.php">Détails du produit</a></li>
                                    <li><a href="cart.php">Panier</a></li>
                                    <li><a href="checkout.php">Vérifier</a></li>
                                </ul>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Cart Side bar
    ============================== -->
    <div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
        <button class="closeButton border-theme bg-theme-hover sideMenuCls2"><i class="far fa-times"></i></button>
        <div class="widget widget_shopping_cart">
            <h3 class="widget_title">Panier</h3>
            <div class="widget_shopping_cart_content">
            <ul class="cart_list">
                <li class="mini_cart_item">
                <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html">
                    <img src="assets/img/product/product-1-1.png" alt="Cart-Image">Fishing Reels Spin</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>100.00</span>
                </span>
                </li>
                <li class="mini_cart_item">
                <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html">
                    <img src="assets/img/cart/cart-img-2.png" alt="Cart-Image">Spoon lure tackle Baits</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>19.00</span>
                </span>
                </li>
                <li class="mini_cart_item">
                <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="shop.html">
                    <img src="assets/img/cart/cart-img-3.png" alt="Cart-Image">Fishing Reels Globeride</a>
                <span class="quantity">
                    1 × <span class="amount"><span>$</span>10.00</span>
                </span>
                </li>
            </ul>
            <div class="total">
                <strong>Subtotal:</strong> <span class="amount"><span>$</span>129.00</span>
            </div>
            <div class="buttons">
                <a href="cart.php" class="vs-btn">View cart</a>
                <a href="checkout.php" class="vs-btn">Vérifier </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>California, TX 70240</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="far fa-phone-alt"></i><a href="tel:+4733378901">+473 3378 901</a></li>
                                <li><i class="far fa-clock"></i>Mon - Sat: 09.00 to 06.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-style1">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="home.php">
                                        <img src="assets/img/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="home.php">Acceuil</a>
                                            <ul class="sub-menu">
                                                <li><a href="home.php">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.php">À propos de nous</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="service.php">Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.php">Service</a></li>
                                                <li><a href="service-details.php">Détails du servcie</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="blog.php">Article</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.php">Détails de l'article</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children mega-menu-wrap">
                                            <a href="#">Pages</a>
                                            <ul class="mega-menu">
                                                <li><a href="shop.html">Pagelist 1</a>
                                                    <ul>
                                                        <li><a href="home.php">Home Style 1</a></li>
                                                        <li><a href="index-2.html">Home Style 2</a></li>
                                                        <li><a href="index-3.html">Home Style 3</a></li>
                                                        <li><a href="about.php">À propos de nous</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pagelist 2</a>
                                                    <ul>
                                                        <li><a href="blog.php">Article</a></li>
                                                        <li><a href="blog-details.php">Détails de l'article</a></li>
                                                        <li><a href="service.php">service</a></li>
                                                        <li><a href="service-details.php">Détails du servcie</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pagelist 3</a>
                                                    <ul>
                                                        <li><a href="project.html">Projects</a></li>
                                                        <li><a href="project-details.html">project details</a></li>
                                                        <li><a href="team-details.html">Team Details</a></li>
                                                        <li><a href="contact.php">Contactez nous</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pagelist 4</a>
                                                    <ul>
                                                        <li><a href="product.php">Produits</a></li>
                                                        <li><a href="product-details.php">Détails du produit</a></li>
                                                        <li><a href="cart.php">Panier</a></li>
                                                        <li><a href="checkout.php">Vérifier </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto d-lg-none">
                                <button class="vs-menu-toggle d-inline-block">
                                    <i class="fal fa-bars"></i>                                           
                               </button>
                            </div>
                            <div class="col-auto d-xl-block d-none">
                                <div class="header-icons">
                                    <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                    <a href="#" class="icon-btn sideCartToggler">
                                        <i class="far fa-shopping-basket"></i>
                                        <span class="badge">0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Nos produits</h1>
            </div> 
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home.php">Acceuil</a></li>
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
                          <div class="thumb"><img src="assets/img/product/product-d-1-1.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="assets/img/product/product-d-1-2.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="assets/img/product/product-d-1-3.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="assets/img/product/product-d-1-4.png" alt="Product Image"></div>
                        </div>
                        <div>
                          <div class="thumb"><img src="assets/img/product/product-d-1-5.png" alt="Product Image"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                        <div class="img"><img src="assets/img/product/product-d-1-1.png" alt="Product Image"></div>
                        <div class="img"><img src="assets/img/product/product-d-1-2.png" alt="Product Image"></div>
                        <div class="img"><img src="assets/img/product/product-d-1-3.png" alt="Product Image"></div>
                        <div class="img"><img src="assets/img/product/product-d-1-4.png" alt="Product Image"></div>
                        <div class="img"><img src="assets/img/product/product-d-1-5.png" alt="Product Image"></div>
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
                <h2 class="product-title">Coconut Oil Jar</h2>
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
                    <p class="product-price">$155.00 <del>$23.85</del></p>
                    <p>Free Shipping On This Item</p>
                    <a href="cart.php" class="vs-btn"><i class="far fa-shopping-basket"></i>Add to Cart</a>
                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                </div>
                <div class="product_meta">
                  <span class="sku_wrapper">
                  <p>SKU:</p> <span class="sku">#WE443</span>
                  </span>
                  <span class="posted_in">
                  <p>Category:</p> <a href="#" rel="tag">organic , </a><a href="#" rel="tag"> food , </a> <a href="#" rel="tag"> natural</a>
                </span>
                </div>
                <div class="shep-img">
                    <img src="assets/img/service/selling-img-1-2.png" alt="selling-img">
                </div>
              </div>
            </div>
          </div>
          <div class="product-description">
            <div class="product-description__tab">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="false">Additional Information</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews (03)</button>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="description">
                    <h3 class="description-title h5">description</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit ame
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                  </p>
                  <p class="text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod
                    orci. Cum
                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ultricies
                    aliquam. Done ultricies nec, pellent, consectetur adipiscing elit. Ieuismod orci. Cum sociis natoque
                    penatibus et magnis dis parturient montes
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci</p>
                     
                    <div class="d-flex mb-5">
                        <div class="list-style1 me-5">
                            <h3 class="description-title h5">Love veg, not waste</h3>
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Before you can dive-in to creating an effective user experience</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>intuitive user experience for your users online.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Videos within it, each element influences</li>
                            </ul>
                        </div>
                        <div class="list-style1">
                            <h3 class="description-title h5">Love veg, not waste</h3>
                            <ul class="list-unstyled">
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Before you can dive-in to creating an effective user experience</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>intuitive user experience for your users online.</li>
                                <li><span class="icon"><i class="far fa-check-circle"></i></span>Videos within it, each element influences</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description-img">
                        <img src="assets/img/bg/product-details-bg.jpg" alt="product-details">
                    </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                <div class="product-information">
                    <h3 class="description-title h5">Additional Information</h3>
                    <table class="product-information__item table">
                        <tbody>
                          <tr>
                            <th class="product-information__name" scope="row">Type</th>
                            <td>Veg Box, Organic</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Size</th>
                            <td>400ml</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Brand</th>
                            <td colspan="2">Fosroc</td>
                          </tr>
                          <tr>
                            <th class="product-information__name" scope="row">Organic</th>
                            <td colspan="2">100%</td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h3 class="description-title h5">Reviews</h3>
                <div class="row woocommerce-reviews">
                    <h2 class="h5 mt-4">0.5 Reviews</h2>
                    <div class="product-rating">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                      <span class="product-rating__total">Review (03)</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="vs-comments-wrap">
                            <ul class="comment-list">
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Thomas Walkar</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> 22 April, 2022</span>
                                    </div>
                                    <p class="text">Delivered ye sportsmen zealously arranging frankness estimabl
                                        any article enabled musical shyness yet sixteen. </p>
                                  </div>
                                </div>
                              </li>
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Crish Thomas</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> 22 April, 2022</span>
                                    </div>
                                    <p class="text">Delivered ye sportsmen zealously arranging frankness estimabl
                                        any article enabled musical shyness yet sixteen. </p>
                                  </div>
                                </div>
                              </li>
                              <li class="review vs-comment-item">
                                <div class="vs-post-comment">
                                  <div class="comment-avater">
                                    <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                  </div>
                                  <div class="comment-content">
                                    <div class="comment-content__header">
                                      <div class="review-rating">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                      </div>
                                      <h4 class="name h4">Millem Jakson</h4>
                                      <span class="commented-on"><i class="fal fa-calendar-alt"></i> 23 April, 2022</span>
                                    </div>
                                    <p class="text">Delivered ye sportsmen zealously arranging frankness estimabl
                                        any article enabled musical shyness yet sixteen. </p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vs-comment-form review-form">
                            <div id="respond" class="comment-respond">
                              <div class="form-title mb-4">
                                <h3 class="description-title h5">Post Review</h3>
                                <div class="rating-select">
                                  <label>Your Rating</label>
                                  <p class="stars">
                                    <span>
                                    <a class="star-1" href="#">1</a>
                                    <a class="star-2" href="#">2</a>
                                    <a class="star-3" href="#">3</a>
                                    <a class="star-4" href="#">4</a>
                                    <a class="star-5" href="#">5</a>
                                  </span>
                                  </p>
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" placeholder="Complete Name">
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 form-group">
                                    <textarea class="form-control" placeholder="Review"></textarea>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                    <div class="custom-checkbox notice">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser for
                                        the next time I comment.</label>
                                    </div>
                                    <button class="vs-btn"> <span class="vs-btn__bar"></span>Submit</button>
                                    </div>
                                </div>
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
    <footer class="footer-wrapper  footer-layout1" data-bg-src="assets/img/bg/footer-bg-1-1.jpg">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Phone No:</h3>
                                <p class="media-info"><a href="tel:+88013004451">+88 013 00 44 51</a> <br> Mon - Sat: 09.00 to 06.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-2.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Email Address:</h3>
                                <p class="media-info"><a href="mailto:example@domain.com">example@domain.com</a> <br> <a href="mailto:officename@example.com">officename@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-3.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Locatoin:</h3>
                                <p class="media-info">5919 Trussville,Birmingham, United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo">
                                    <a href="home.php"><img src="assets/img/logo-2.png" alt="logo"></a>
                                </div>
                                <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore et dolo aliqua.</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Company</h3>
                            <ul>
                                <li><a href="about.php">À propos</a></li>
                                <li><a href="team.html">Nos produits</a></li>
                                <li><a href="service.php">Our cases</a></li>
                                <li><a href="blog.php">News & events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="about.php">Microgreen</a></li>
                                <li><a href="service.php">Agricultural products</a></li>
                                <li><a href="blog.php">Crops farming</a></li>
                                <li><a href="blog.php">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-xl-4">
                        <div class="widget widget_newsletter footer-widget">
                            <h4 class="widget_title">Subscribe Newsletter</h4>
                            <form class="newsletter-form">
                                <p class="form_text">Enter your email and get recent news & recent offers update.</p>
                                <div class="search-btn">
                                    <input class="form-control" type="email" placeholder="Enter your email....">
                                    <button type="submit" class="icon-btn"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-center align-items-center">
                    <div class="col-auto">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="home.php">Farmix</a>. All Rights Reserved By <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="copyright-menu">
                            <ul class="list-unstyled">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>  
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