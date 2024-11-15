<!-- Mobile Menu -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home">
                <img src="<?= $lien_logo . $logo ?>" alt="logo" style="position: absolute; top: 0px; max-width: 80px;">
                </a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                <li>
                    <a href="home">Accueil</a>
                </li>
                    <?php /*<li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Style 1</a></li>
                            <li><a href="index-2.html">Home Style 2</a></li>
                            <li><a href="index-3.html">Home Style 3</a></li>
                        </ul>
                    </li> */?>

                    <li>
                        <a href="about">A Propos</a>
                    </li>
                    <li>
                        <a href="service">Service</a>
                    </li>
                    <li>
                        <a href="product">Boutique</a>
                    </li>
                    <li>
                        <a href="blog">blog</a>
                    </li>

                    <li>
                        <a href="contact">Contact</a>
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
            <h3 class="widget_title">Shopping cart</h3>
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
                <a href="cart.html" class="vs-btn">View cart</a>
                <a href="checkout.html" class="vs-btn">Checkout</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="container">
            <div class="header-top">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>

                                <li><i class="far fa-map-marker-alt"></i><?=  $region .','.$ville .','. $quartier ?></li>
                                <li><i class="far fa-envelope"></i><a href="mailto:<?= $emal_entreprise ?>"><?= $emal_entreprise ?></a></li>
                                <li><i class="far fa-phone-alt"></i><a href="tel:<?= $telephone  ?>"><?= $telephone ?></a></li>
                                <li><i class="far fa-clock"></i><?=  date('Y') ?></li>
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
                <div class="container">
                    <div class="menu-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="home"> 
                                        <img src="<?= $lien_logo . $logo ?>" alt="logo" style="position: absolute; top: 0px; max-width: 80px;">
                                        <!-- <img src="assets/img/logo.png" alt="logo"> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>

                                    <li>
                                        <a href="home">Accueil</a>
                                    </li>
                                        <?php /*<li class="menu-item-has-children">
                                            <a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li> */?>

                                        <li>
                                            <a href="about">A Propos</a>
                                        </li>
                                        <li>
                                            <a href="service">Service</a>
                                        </li>
                                        <li>
                                            <a href="product">Boutique</a>
                                        </li>
                                        <li>
                                            <a href="blog">blog</a>
                                        </li>

                                        <li>
                                            <a href="contact">Contact</a>
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
                                   <?php /* <a href="#" class="icon-btn sideCartToggler">
                                        <i class="far fa-shopping-basket"></i>
                                        <span class="badge">0</span> */?>
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