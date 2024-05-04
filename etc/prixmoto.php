<?php
$immat=$_POST['immat'];
$prix=$_POST['prix'];
try { 
    $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");
} 
catch (PDOException $e) {
    echo "Erreur connexion" ; $e->getMessage();
    exit(); 
}

if(!empty($_POST)){
    $req = $connexion->prepare("UPDATE location_motos SET prix=$prix WHERE immatriculation = '$immat'");
    $reponse = $req->execute();
    echo "Le prix a bien été changé!";
}
?>
<form method="post" action="squelette2.php">
        		<input id="envoi" type="submit" value="retour"/>
			</form>