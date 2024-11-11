
<?php
include('db.php');

// var_dump('ok');
//-------------------------recuperation du detail d'un produits
if(isset($_POST["id_website"])):

    $id_website =verification($_POST["id_website"]);
    $mat_categorie_art='';
    // var_dump($id_website);

    if(isset($_POST["mat_categorie_art"])):
        
        $mat_categorie_art = verification($_POST["mat_categorie_art"]);
        $detail_categorie=[];
        $detail_categories = query('SELECT * FROM categories_article WHERE id_website =:matricule AND mat_categorie =:mat_categorie_art',array("matricule"=>$id_website, "mat_categorie_art"=>$mat_categorie_art));
        
        foreach($detail_categories as $value){
            $detail_categorie[]= $value;
        }

        header('Content-Type: application/json');
        echo json_encode($detail_categorie, JSON_PRETTY_PRINT);
        //------------------ Recuper tous les produits 

    else:
        
        // var_dump($id_website);  
        
        $categorie=[];
        $categories = query('SELECT * FROM categories_article WHERE id_website =:matricule',array("matricule"=>$id_website));
        
        foreach($categories as $value){
            $categorie[]= $value;
        }

        header('Content-Type: application/json');
        echo json_encode($categorie, JSON_PRETTY_PRINT);
    endif;
//------------------------fin recuperation

endif;

function verification($data){
    $data=strip_tags(trim($data));
    $data=htmlentities($data);
    $data=htmlspecialchars($data);
    return $data;
}