<?php
$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];




try {
    
    $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");
}  
catch (PDOException $e) {
    echo "Erreur connexion" ; $e->getMessage();
    exit(); 
}

if(!empty($_POST)){
    $req = $connexion->prepare("select mot_passe from utilisateur where identifiant='".$pseudo."'");
    $reponse = $req->execute();
    $ligne = $req->fetch(PDO::FETCH_ASSOC);
    if($ligne){;
        require "etc/squelette.php";
}
    else echo "Accès refusé!";
}

?>

