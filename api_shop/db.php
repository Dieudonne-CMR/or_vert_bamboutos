<?php 
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname="bayihatech2";

$servername= '127.0.0.1';
$username="u488221834_engine_root";
$password= "7t!8i&hR";
$dbname="u488221834_engine_akila";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

 function query($ql, $data = array())
{
    global $conn;
    $rep = $conn->prepare($ql);
    $rep->execute($data);

    return $rep->fetchAll(PDO::FETCH_OBJ);
}

// function nbre_vues($matricule_posts) // Calcule le nombre de vues d'un post
// {
//     // global $conn;
//     $visiteur_blogs= query("SELECT * FROM visiteurs_blog  WHERE  id_blog=:id ",array('id'=>$matricule_posts));
//     return  @$visiteur_blogs[0]->nbre;

// }
?>
