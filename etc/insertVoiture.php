<?php
$modele=$_POST['modele'];
$marque=$_POST['marque'];
$immat=$_POST['immat'];
$prix=$_POST['prix'];

echo $modele;
echo $marque;
echo $immat;
echo $prix;

$hasard=rand();
try { 
    $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");
} 
catch (PDOException $e) {
    echo "Erreur connexion" ; $e->getMessage();
    exit(); 
}

if(!empty($_POST)){
    $req = $connexion->prepare("insert into location_voitures values ('$marque','$modele',$hasard,'$immat',$prix,'free',0);");
    $reponse = $req->execute();
    echo "la voiture a été insérée dans la base de données!";

}
?>
<form method="post" action="squelette2.php">
        		<input id="envoi" type="submit" value="retour"/>
			</form>
