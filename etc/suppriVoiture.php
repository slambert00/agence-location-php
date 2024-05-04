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
    $req = $connexion->prepare("delete from location_voitures where immatriculation='$immat'");
    $reponse = $req->execute();
    echo "la voiture a été supprimée dans la base de données!";
}
?>
<form method="post" action="squelette2.php">
        		<input id="envoi" type="submit" value="retour"/>
			</form>
