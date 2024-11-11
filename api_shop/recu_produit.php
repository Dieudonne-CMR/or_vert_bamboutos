<?php 
include('db.php');
$request_method=$_SERVER["REQUEST_METHOD"];


if(isset($_POST["id_website"])):
     $id_website =verification($_POST["id_website"]);
    $mat_article='';
    // var_dump($id_website);

    if(isset($_POST["mat_article"])):
        
        $mat_article = verification($_POST["mat_article"]);
        $detail_produits=[];
        $detail_produit = query('SELECT * FROM articles WHERE id_website =:matricule AND mat_article =:mat_article',array("matricule"=>$id_website, "mat_article"=>$mat_article));
        // $detail_produit = query('SELECT * FROM articles WHERE mat_article =:matricule',array("matricule"=>$mat_article));
        
        foreach($detail_produit as $value){
            $detail_produits[]= $value;
        }

        header('Content-Type: application/json');
        echo json_encode($detail_produits, JSON_PRETTY_PRINT);
        //------------------ Recuper tous les produits 
    else:
        
        // var_dump($id_website);
        
        $produits=[];
        $produit = query('SELECT * FROM articles WHERE id_website =:matricule',array("matricule"=>$id_website));
        
        foreach($produit as $value){
            $produits[]= $value;
        }

        header('Content-Type: application/json');
        echo json_encode($produits, JSON_PRETTY_PRINT);
    endif;
//------------------------fin recuperation

endif;
//------------------------fin recuperation

function verification($data){
    $data=strip_tags(trim($data));
    $data=htmlentities($data);
    $data=htmlspecialchars($data);
    return $data;
}


