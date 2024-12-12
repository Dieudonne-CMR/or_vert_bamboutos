<?php 
// include "includes/main_header/main_header.php" ;  
include "api/cle_api.php";
include "api_shops/cle_api_shop.php";
include "includes/fonctions/fonctions.php";
//======


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
    $category = recup_category();
    $produits = recup_produict();
    include_once("template/home.php");
endif;

//--------Route page Apropos
if(@$url[0]=='about' ):
    info_offres();
    // var_dump($offres);
    $offre=[];
    $i=0;
    foreach(info_offres() as $value):
        if($value->page_vente=='non'):
            $i++;
            if($i==1):
                $offre[]= $value;
            else:
                break;
            endif;
        endif;
    endforeach;
    // var_dump($offre);
    include_once("template/$url[0].php");
endif;

//------- Route page boutique
if(@$url[0]=='product'):
    $produits = recup_produict();
    // if(!emplty($produits))
    include_once("template/$url[0].php");
endif;

//------- Route page detail produit
if(@$url[0]=='product-details'):
    $mat_produit= strip_tags($url[1]);

    $detail_pro= recup_produict_detail($mat_produit);
    if(!empty($detail_pro)):
        $nom_produit        =    $detail_pro[0]->nom_art;
        $courte_description =    $detail_pro[0]->courte_description;
        $description        =    $detail_pro[0]->description;
        $lien_img_vedette   =    $detail_pro[0]->lien_img_vedette;
        $lien_img2          =    $detail_pro[0]->lien_img2;
        $lien_img3          =    $detail_pro[0]->lien_img3;
        $lien_img4          =   $detail_pro[0]->lien_img4;
        $lien_img5          =   $detail_pro[0]->lien_img5;
        $mat_categorie_art  =   $detail_pro[0]->mat_categorie_art;
        $prix_reel          =    $detail_pro[0]->prix_reel;
        $prix_fictif        =    $detail_pro[0]->prix_fictif;
        $mumero             =    info_boutique()[0]->numero_whatsapp_aide;
        $code_iso_devise               =    info_boutique()[0]->code_iso_devise;

        include_once("template/$url[0].php");
    else:
        header('location');
    endif;
endif;

//------- Route page blog
if(@$url[0]=='blog'):
    $service11 = recup_services();
    $article1 = $obj_tous_post;
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
    // var_dump($detai_post);
    if(empty($detai_post)){
        header("location:../blog");
    }else{
        include_once("template/$url[0].php");
    }
endif;

//------- Route page service
//je viens

if(@$url[0]=='service'):
    $article3 = recup_article();
    $services = recup_services();
    $article2 = recup_article();
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



