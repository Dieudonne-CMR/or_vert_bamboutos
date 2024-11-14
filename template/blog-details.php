<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/farmix/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:42 GMT -->
<head>
    <meta charset="utf-8">
    <base href="../">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php $titre='Detail blog'; include "includes/meta.php" ?>

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
    <div class="breadcumb-wrapper Cover all esports & gamers needs" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?=  $detai_post->titre ?></h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="home.php">Accueil</a></li>
                    <li>Details de l'article</li>
                </ul>
            </div> 
        </div>
    </div>
    <!--==============================
    Blog Details Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-8">
                    <div class="vs-blog">
                        <div class="blog-content">                            
                            <div class="mb-30">                             
                                <img src="<?= $url_image
                                . $detai_post->photo ?>" alt="blog image">
                            </div>
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i><?= info_cat_post($detai_post->id_categorie)->nom ?></a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details/<?=  $detai_post->matricule?>"><?=  $detai_post->titre ?></a></h2>
                            <p class="blog-text"><?=  $detai_post->content ?>
                            </p>                                                                                   
                        </div>
                        <div class="share-links clearfix  ">
                            <div class="row justify-content-between">
                                <div class="col-xl-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.php">Microgreen</a>
                                        <a href="blog.php">farming</a>
                                        <a href="blog.php">Uncategorized</a>
                                    </div>
                                </div>
                                <div class="col-xl-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php /*
                        <div class="vs-comments-wrap">
                            <h2 class="blog-inner-title">3 Comments</h2>
                            <ul class="comment-list">
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">Rosalina Kelian</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i> 22 April, 2022</span>
                                            <p class="text">Progressively procrastinate mission-critical action items before team building ROI.
                                                Interactively provide access to cross functional quality vectors for client-centric catalysts for change.
                                            </p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="replay-btn">Replay</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="vs-comment-item">
                                            <div class="vs-post-comment">
                                                <div class="comment-avater">
                                                    <img src="assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <h4 class="name h4">John Deo</h4>
                                                    <span class="commented-on"><i class="fal fa-calendar-alt"></i> 23 April, 2022</span>
                                                    <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets.</p>
                                                    <div class="reply_and_edit">
                                                        <a href="blog-details.html" class="replay-btn">Replay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="vs-comment-item">
                                    <div class="vs-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h4 class="name h4">Tara sing</h4>
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i> 26 April, 2022</span>
                                            <p class="text">Competently provide access to fully researched methods of empowerment without sticky models. Credibly morph front-end niche markets whereas 2.0 users. Enthusiastically seize team.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="replay-btn">Replay</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> */ ?>
                        <!-- Comment Form -->
                         <?php /*
                        <div class="vs-comment-form  ">
                            <div id="respond" class="comment-respond">
                                <div class="form-title">
                                    <h3 class="blog-inner-title">Leave a Comment</h3>
                                    <p class="form-text">Your email address will not be published. Required fields are marked*</p>
                                </div>
                                <div class="row gx-20">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Complete Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="custom-checkbox notice">
                                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                            <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button class="vs-btn">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        */ ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget  ">
                            <h3 class="widget_title">Articles recent</h3>
                            <div class="recent-post-wrap">
                               <?php $c=count($article2); if($c>3){$k=$c-3;}else{$k=0;};
                                while($c>$k){                                
                                ?> 
                                <div class="recent-post">
                                    <div class="media-img">
                                    <a href="blog-details/<?= $article2[$c-1]->matricule?>"><img src="<?= $url_image.$article2[$c-1]->photo ?>" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.php"><?= $article2[$c-1]->date?></a>
                                        </div>
                                        <?php if(strlen($article2[$c-1]->titre) > 42){ $article2[$c-1]->titre = substr($article2[$c-1]->titre,0,42)."...";} ?>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details<?= $article2[$c-1]->matricule?>"><?= $article2[$c-1]->titre ?></a></h4>
                                    </div>
                                </div>
                                <?php
                                $c--;
                                } ?>
                                <?php /*
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.php">Dec 13, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.php">Jan 08, 2024</a>
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
                                            <a href="blog.php">Nov 07, 2024</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Learn React JS Tutorial For Beginners</a></h4>
                                    </div>
                                </div> */ ?>
                            </div>
                        </div>
                        <div class="widget widget_categories   ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <?php $i=count($categories1); $k=0;
                                while($k<$i){
                                ?>
                                <li>
                                    <a href="blog.php"><?=$categories1[$k]->nom ?></a>
                                    <span>23</span>
                                </li>
                                <?php $k++; }?>
                                 <?php /*<li>
                                    <a href="blog.php">Grain</a>
                                    <span>10</span>
                                </li>
                                <li>
                                    <a href="blog.php">Agriculture</a>
                                    <span>09</span>
                                </li>
                                <li>
                                    <a href="blog.php">Fruit farming</a>
                                    <span>14</span>
                                </li>
                                <li>
                                    <a href="blog.php">Livestock farms</a>
                                    <span>12</span>
                                </li>
                                <li>
                                    <a href="blog.php">Mixed farming</a>
                                    <span>12</span>
                                </li> */ ?>
                            </ul>
                        </div>
                        <div class="widget widget_nav_menu   ">
                        <h3 class="widget_title">Services Utiles</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <?php foreach($service1 as $key=>$vs) :
                                    if(strlen($vs->nom)>25){ $vs->nom = substr($vs->nom,0,25)."...";}
                                        if($key<5){
                                        ?>
                                    <li><a href="service-details/<?= $vs->matricule_service ?>"><?= $vs->nom ?></a></li>
                                    <?php }else{
                                        break;
                                    }
                                    endforeach ?>
                                    <!--<li><a href="team.html">Rencontrez notre équipe</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.php">Infos & Media</a></li>
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


<!-- Mirrored from html.vecurosoft.com/farmix/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 23:33:46 GMT -->
</html>