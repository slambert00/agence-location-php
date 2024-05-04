<?php

$immat=$_POST['immat'];

try { 
    $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");
} 
catch (PDOException $e) {
    echo "Erreur connexion" ; $e->getMessage();
    exit(); 
}

if(!empty($_POST)){
    $req = $connexion->prepare("update location_voitures set disponible='free' where immatriculation='$immat'");
    $req->execute();
    $req2 = $connexion->prepare("update location_voitures set identifiant_loueur=0 where immatriculation='$immat'");
    $req2->execute();
}
?>
<form method="post" action="squelette2.php">
        		<input id="envoi" type="submit" value="retour"/>
			</form>
