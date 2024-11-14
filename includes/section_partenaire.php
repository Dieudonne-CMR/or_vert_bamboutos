<?php if(!empty(info_partenaire())): ?>
        <div class="brand-layout1 space-bottom">
            <div class="container">
                <div class="row vs-carousel z-index-common" data-arrows="false" data-wow-delay="0.4s" data-slide-show="6"
                    data-lg-slide-show="4" data-md-slide-show="4" data-xs-slide-show="2" data-center-mode="true" data-autoplay="true">
                        <?php foreach(  info_partenaire() as $value) :?>
                        <div class="col-auto">
                            <div class="bran-img">
                                <img src="<?= $logo_partenaire . $value-> logo ?>" alt="brand">
                            </div>
                        </div>
                        <?php endforeach ?>

                    </div>
            </div>
        </div>
    <?php else: ?>
        <div class="brand-layout1 space-bottom">
        <div class="container">
            <div class="row vs-carousel z-index-common" data-arrows="false" data-wow-delay="0.4s" data-slide-show="6"
                data-lg-slide-show="4" data-md-slide-show="4" data-xs-slide-show="2" data-center-mode="true" data-autoplay="true">
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-2.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-3.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-4.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-5.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-6.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-1.png" alt="brand">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="bran-img">
                            <img src="assets/img/brand/brand-2.png" alt="brand">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php endif ?>