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