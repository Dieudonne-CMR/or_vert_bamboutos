<?php 
session_start();
//65707eb0c3041 //6561d3dd3bbf7 65c3e2b8e0756 / 662f2c0f2234e / 

//--------- lien des images de Service 
$img_service="https://akila.blog/img_service/";
//--------- lien des images des articles 
$url_image="https://akila.blog/@ressouce/mg_etablissement/"; 
//---------lien du logo de l'entreprise
$lien_logo ="https://akila.blog/logo_site/"; 
//---------lien pour les bannieres de l'entreprise
$image_banniere="https://akila.blog/image_baniere/";

include "bd/query.php" ;
$matricule_entreprise = "65c3e2b8e0756";
include "api/api_info_entreprise.php";
include "api/api_header.php";
include "api/fonctionne.php";
include "api/api_services.php";

// include "api/api_services.php";


// [ville] => Douala
//     [region] => Littoral
//     [email] => lamaisondesbillets@gmail.com
//     [quartier] => Bonadiotto
//=====informations du fichier api_header.php o
$logo         =       @$info_header->logo;
$page1_menu1  =       @$info_header->page1;
$page_nemu2   =       @$info_header->page2;
$page_nemu3   =       @$info_header->page4;
$whatsapp     =       @$info_header->whatsapp;

$region        =       @$info_header->region;
$quartier     =       @$info_header->quartier;
$ville     =       @$info_header->ville;

$telephone    =       @$info_header->telephone;
$lien_facebook=       @$info_header->lien_fb;
$lien_twitter =       @$info_header->twitter;
$youtube      =       @$info_header->youtube;
$instagram    =       @$info_header->instagram;
$titre_service=       @$info_header->titre_service;
$titre_member =       @$info_header->titre_member;
$titre_page_blog=     @$info_header->titre_blog;
$nom_entreprise=      @$info_header->nom_entreprise;
$decription_entreprise = @$info_header->decription;
$emal_entreprise =       @$info_header->email;
$google_map_entreprise = @$info_header->google_map;
$couleur1_entreprise =   @$info_header->color1;
$couleur2_entreprise =   @$info_header->color2;

//=======information du fichier api_info_entreprise.php
$banniere1  =           @$dataEntreprise->about_image1;
$banniere2 =            @$dataEntreprise->banniere_image2;
$banniere3 =            @$dataEntreprise->banniere_image3;
$titre_banniere1 =      @$dataEntreprise->t_baniere1;
$description_baniere1=  @$dataEntreprise->d_baniere1;

$titre_banniere2 =      @$dataEntreprise->t_baniere2;
$description_baniere2=  @$dataEntreprise->d_baniere2;

$titre_banniere3 =      @$dataEntreprise->t_baniere3;
$description_baniere3=  @$dataEntreprise->d_baniere3;

$titre_s1=              @$dataEntreprise->titre_s1;
$discription_s1 =       @$dataEntreprise->discription_s1;

$titre_s2=              @$dataEntreprise->titre_s2;
$discription_s2 =       @$dataEntreprise->description_s2;

$titre_s3   =           @$dataEntreprise->titre_s3;
$discription_s3 =       @$dataEntreprise->description_s3;
$apropos_entreprise=    @$dataEntreprise->propos;

$motivation_titre =     @$dataEntreprise->motivation_titre;
$motivation_desription =@$dataEntreprise->motivation_desription;

$image_about =          @$dataEntreprise->banniere_site1;
$motivation_img =       @$dataEntreprise->motivation_img;

//=== information sur les memebres : api_equipe

?>

<?php /*<style>
    :root {
        --bs-prima: <?= $couleur1_entreprise ?> ;
    }
</style> */?>