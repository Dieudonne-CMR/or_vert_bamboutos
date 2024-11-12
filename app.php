<?php 
// include "includes/main_header/main_header.php" ;  
include "api/cle_api.php";

$url="";

//====== Traitement de url
if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;
//====== fin

//--------Route page d'accuil
if(@$url[0]=='home' || @$url[0]==''):
    $services = recup_services();
    $equipe = info_equipe();
    $article = recup_article();
    include_once("template/home.php");
endif;

//--------Route page Apropos
if(@$url[0]=='about' ):
    include_once("template/$url[0].php");
endif;

//------- Route page boutique
if(@$url[0]=='product'):
    include_once("template/$url[0].php");
endif;

//------- Route page blog
if(@$url[0]=='blog'):
    $service11 = recup_services();
    $article1 = recup_article();
    $categories = recup_category();
    include_once("template/$url[0].php");
endif;

//------- Route page blog
if(@$url[0]=='contact'):    
    include_once("template/$url[0].php");
endif;

//------- Route page blog-details
if(@$url[0]=='blog-details'):
    $service1 = recup_services();
    $article2 = recup_article();
    $categories1 = recup_category();
    $mat_article= strip_tags(@$url[1]); //==Matricule de l'article
    $detai_post=recup_detail_post($mat_article) ;  
    if(empty($detai_post)){
        header("location:../blog");
    }else{
        include_once("template/$url[0].php");
    }
endif;

//------- Route page service
if(@$url[0]=='service'):
    $services = recup_services();
    include_once("template/$url[0].php");
endif;

//------- Route page service-details
if(@$url[0]=='service-details'):
    $mat_service= strip_tags(@$url[1]); 
    $det_service= Recuper_service_detail($mat_service);
    if(empty($det_service)){
         header("location: ../home");
    }else{
    include_once("template/$url[0].php");
    }
endif;



