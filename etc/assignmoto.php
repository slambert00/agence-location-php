<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$identifiant=$_POST['identifiant'];
$immat=$_POST['immat'];
$hasard=rand();
$prenom=strtoupper($prenom);
$nom=strtoupper($nom);
try { 
    $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");   
} 
catch (PDOException $e) {
    echo "Erreur connexion" ; $e->getMessage();
    exit(); 
}

if(!empty($_POST)){
    $req = $connexion->prepare("select nom_loueur,prenom_loueur from loueur_vehicule where id_loueur=$identifiant");
    $reponse = $req->execute();
    $ligne = $req->fetch(PDO::FETCH_ASSOC);
    if($ligne){
        $req2= $connexion->prepare("update location_motos set identifiant_loueur=$identifiant where immatriculation='$immat'");
        $req2->execute();
        $req3= $connexion->prepare("update location_motos set disponible='busy' where immatriculation='$immat'");
        $req3->execute();
        echo "voiture louée!";
    }
    else {
        $req2= $connexion->prepare("insert into loueur_vehicule values ('$prenom','$nom',$hasard)");
        $req2->execute();
        $req4= $connexion->prepare("update location_motos set identifiant_loueur=$hasard where immatriculation='$immat'");
        $req4->execute();
        $req3= $connexion->prepare("update location_motos set disponible='busy' where immatriculation='$immat'");
        $req3->execute();
        echo "loueur intégré dans la base de données et voiture louée!";
    }

    

}


?>
<form method="post" action="squelette2.php">
    <input id="envoi" type="submit" value="retour"/>
</form>