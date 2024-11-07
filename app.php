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
    include_once("template/home.php");
endif;

//--------Route page Apropos
if(@$url[0]=='about'):
    include_once("template/$url[0].php");
endif;

//------- Route page boutique
if(@$url[0]=='product'):
    include_once("template/$url[0].php");
endif;

//------- Route page blog
if(@$url[0]=='blog'):
    include_once("template/$url[0].php");
endif;

//------- Route page blog
if(@$url[0]=='contact'):
    include_once("template/$url[0].php");
endif;

//------- Route page blog-details
if(@$url[0]=='blog-details'):
    include_once("template/$url[0].php");
endif;

//------- Route page service
if(@$url[0]=='service'):
    $services = recup_services();
    include_once("template/$url[0].php");
endif;

//------- Route page service-details
if(@$url[0]=='service-details'):
    include_once("template/$url[0].php");
endif;



