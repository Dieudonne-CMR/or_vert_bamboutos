<?php 
include('db.php');
$request_method=$_SERVER["REQUEST_METHOD"];


if(isset($_POST["id_website"])):
     $id_website =verification($_POST["id_website"]);
  
        // var_dump($id_website);
        
        $info_boutique=[];
        $website = query('SELECT * FROM websites WHERE id_website =:matricule',array("matricule"=>$id_website));
        
        foreach($website as $value){
            $info_boutique[]= $value;
        }

        header('Content-Type: application/json');
        echo json_encode($info_boutique, JSON_PRETTY_PRINT);
endif;
//------------------------fin recuperation

function verification($data){
    $data=strip_tags(trim($data));
    $data=htmlentities($data);
    $data=htmlspecialchars($data);
    return $data;
}


