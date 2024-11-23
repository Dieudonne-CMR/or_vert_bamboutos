<div>
    <footer class="footer-wrapper  footer-layout1" data-bg-src="assets/img/bg/footer-bg-1-1.jpg">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="media-style1">
                            <div class="media-icon"><img src="assets/img/icon/icon-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="media-title">Téléphone:</h3>
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
    
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo">
                                    <a href="home"><img src="<?= $lien_logo . $logo ?>" style="height: 8rem; border-radius: 20px" alt="logo"></a>
                                </div>
                                <p class="footer-text"><?= $decription_entreprise ?></p>
                                <div class="footer-social">
                                    <a href="<?= !empty($lien_facebook) ? $lien_facebook :'www.facebook.com' ?>">"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?= !empty($lien_linkedin) ? $lien_linkedin: 'www.linkedin.com' ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?= !empty($instagram) ? $instagram :'www.instagramm.com' ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget widget_categories  footer-widget">
                            <h3 class="widget_title">Lien </h3>
                            <ul>
                                <li><a href="about">A propos</a></li>
                                <li><a href="product">Notre Boutique</a></li>
                                <li><a href="service">Nos Sercices</a></li>
                                <li><a href="blog">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-xl-4">
                        <div class="widget widget_newsletter footer-widget">
                            <h4 class="widget_title">S'abonner à la lettre d'information</h4>
                            <form class="newsletter-form">
                                <p class="form_text">Saisissez votre adresse électronique et recevez les dernières nouvelles et les offres récentes.</p>
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
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="home">Or Vert des Bamboutos</a>. Tous droits réservés par <a href="https://akilaweb.net">Akila Web </a></p>
                    </div>
                    <div class="col-auto">
                        <div class="copyright-menu">
                            <ul class="list-unstyled">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>  
</div>
