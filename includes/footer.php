<footer class="footer-wrapper  footer-layout1" data-bg-src="assets/img/bg/footer-bg-1-1.jpg">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Phone No:</h3>
                                <p class="media-info"><a href="tel:<?= $telephone ?>"><?= $telephone ?></a> <br> <?=  date('y') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-2.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Email Address:</h3>
                                <p class="media-info"><a href="mailto:<?= $emal_entreprise ?>"><?= $emal_entreprise ?></a> <br> <a href="mailto:officename@example.com">officename@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-3.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Locatoin:</h3>
                                <p class="media-info"><?=  $region .','.$ville .','. $quartier ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php /*<div class="widget-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo-2.png" alt="logo"></a>
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
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Our products</a></li>
                                <li><a href="services.html">Our cases</a></li>
                                <li><a href="blog.html">News & events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="about.html">Microgreen</a></li>
                                <li><a href="services.html">Agricultural products</a></li>
                                <li><a href="blog.html">Crops farming</a></li>
                                <li><a href="blog.html">Uncategorized</a></li>
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
        </div> */?>

        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-center align-items-center">
                    <div class="col-auto">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="home">Farmix</a>. All Rights Reserved By <a href="https://akilaweb.net">Akila Web </a></p>
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