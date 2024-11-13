<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:36 GMT -->
<head>
    <meta charset="utf-8"> 
    <?= isset($url[1]) ? "<base href=''> ":'' ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='blog'; include "includes/meta.php" ?>

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
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">NOS ARTICLES</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Acceuil</a></li>
                    <li>Nos articles</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php foreach($article1 as $v) : ?>
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= $url_image.$v->photo ?>" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i><?= info_cat_post($v->id_categorie)->nom ?></a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details/<?= $v->matricule?>"><?= $v->titre ?></a></h2>
                            <?php if(strlen($v->content)>300){ $v->content = substr($v->content,0,300)."...";} ?>
                            <p class="blog-text"><?= strip_tags($v->content) ?></p>
                            <div class="blog-inner-author">
                                <img src="<?= !empty(info_admin($v->matricule_admin)->profil) ? $lien_profil. info_admin($v->matricule_admin)->profil : 'https://cdn-icons-png.flaticon.com/128/3135/3135715.png'?>" alt="<?= info_admin($v->matricule_admin)->nom?>">
                                Par <a href="javascript:void(0)"><?= info_admin($v->matricule_admin)->nom?></a>
                                <a href="blog-details/<?= $v->matricule?>" class="blog-date"><?= $v->date ?></a>
                            </div>
                        </div>
                    </div> 
                    <?php endforeach ?>
                    <?php /* <div class="vs-blog blog-single">
                        <div class="blog-img vs-carousel" data-arrows="true" data-autoplay="true" data-slide-show="1" data-fade="true">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.png" alt="Blog Image"></a>
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="blog.html">Jakki James</a>
                                <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div> 
                    <div class="vs-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="blog.html">Jakki James</a>
                                <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div> 
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-3.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="blog.html">Jakki James</a>
                                <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div> 
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-4.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="blog.html">Jakki James</a>
                                <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div> 
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-5.png" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Fresh Vegetables</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Harvest London Publishes Its First Annua</a></h2>
                            <p class="blog-text">Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar ulum bib volutpat. Sociis, a eget mollis, exercitationem famesSu dapibus ac tellus.</p>
                            <div class="blog-inner-author">
                                <img src="assets/img/blog/blog-auth-1-1.png" alt="blog author">
                                by <a href="blog.html">Jakki James</a>
                                <a href="blog.html" class="blog-date">Dec 13, 2024</a>
                            </div>
                        </div>
                    </div> */ ?>
                    <div class="vs-pagination">
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
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget  ">
                            <h3 class="widget_title">Articles Recents</h3>
                            <div class="recent-post-wrap">
                                <?php $c=count($article1); if($c>3){$k=$c-3;}else{$k=0;};
                                while($c>$k){                                
                                ?>
                                <div class="recent-post">
                                    <div class="media-img">
                                    <a href="blog-details/<?= $article1[$c-1]->matricule?>"><img src="<?= $url_image.$article1[$c-1]->photo ?>" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><?= $article1[$c-1]->date?></a>
                                        </div>
                                        <?php if(strlen($article1[$c-1]->titre) > 42){ $article1[$c-1]->titre = substr($article1[$c-1]->titre,0,42)."...";} ?>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details<?= $article1[$c-1]->matricule?>"><?= $article1[$c-1]->titre ?></a></h4>
                                    </div>
                                </div>
                                <?php
                                $c--;
                                } ?>
                             <?php /*   
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html">Jan 08, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html">Nov 07, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div> 
                                </div> */ ?>
                            </div>
                        </div>
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <?php $i=count($categories); $k=0;
                                while($k<$i){
                                ?>
                                <li>
                                    <a href="blog/<?= $categories[$k]->matricule_cat ?>"><?=$categories[$k]->nom ?></a>
                                    <span><?= count_produit_cat($categories[$k]->matricule_cat) ?></span>
                                </li>
                                <?php $k++; }?>
                                 <?php /*<li>
                                    <a href="blog.html">Grain</a>
                                    <span>10</span>
                                </li>
                                <li>
                                    <a href="blog.html">Agriculture</a>
                                    <span>09</span>
                                </li>
                                <li>
                                    <a href="blog.html">Fruit farming</a>
                                    <span>14</span>
                                </li>
                                <li>
                                    <a href="blog.html">Livestock farms</a>
                                    <span>12</span>
                                </li>
                                <li>
                                    <a href="blog.html">Mixed farming</a>
                                    <span>12</span>
                                </li> */ ?>
                            </ul>
                        </div>
                        <div class="widget widget_nav_menu   ">
                            <h3 class="widget_title">Services Utiles</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <?php foreach($service11 as $key=>$vs1) :
                                    if(strlen($vs1->nom)>25){ $vs1->nom = substr($vs1->nom,0,25)."...";}
                                        if($key<5){
                                        ?>
                                    <li><a href="service-details/<?= $vs1->matricule_service ?>"><?= $vs1->nom ?></a></li>
                                    <?php }else{
                                        break;
                                    }
                                    endforeach ?>
                                    <!--<li><a href="team.html">Rencontrez notre équipe</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Infos & Media</a></li>
                                    <li><a href="contact.html">Contactez-nous</a></li> -->
                                </ul>
                            </div>
                        </div>
                         <!-- <div class="widget widget_meta   ">
                            <h3 class="widget_title">Meta</h3>
                            <ul>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Entries feed</a></li>
                                <li><a href="#">Comments feed</a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                          </div> -->
                        <div class="widget widget_newsletter  ">
                            <h4 class="widget_title">Bulletin</h4>
                            <form class="newsletter-form">
                                <p class="form_text">Entrez votre e-mail et recevez les nouvelles récentes et les mises à jour des offres récentes.</p>
                                <input class="form-control" type="email" placeholder="Entrez votre email....">
                                <button type="submit" class="vs-btn">S'abonner</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:42 GMT -->
</html>