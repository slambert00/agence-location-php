<?php

try {      $connexion= new PDO("mysql:host=simonlambert.work.mysql;dbname=simonlambert_workagence_location", "simonlambert_workagence_location", "root1234");
} catch (PDOException $e) {
    echo("Erreur connexion".$e->getMessage() );
    exit();
}
$stmt = $connexion->prepare(
"select * from location_voitures where disponible='free'"
);
echo "les voitures dans la base de données sont:<br/><br/>";
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
echo "marque--modele--identifiant véhicule--plaque immatriculation--prix--disponibilité--identifiant du loueur";
echo "<table>";
while ($ligne = $stmt->fetch()) {
echo 
"<tr>
<td>{$ligne['marque']} --</td>".
"<td>{$ligne['modele']} --</td>".
"<td>{$ligne['identifiant_vehicule']} --</td>".
"<td>{$ligne['immatriculation']} --</td>".
"<td>{$ligne['prix']} --</td>".
"<td>{$ligne['disponible']} --</td>".
"<td>{$ligne['identifiant_loueur']}</td>
</tr>";
}
echo"</table>";


$stmt = $connexion->prepare(
    "select * from location_motos where disponible='free'"
    );
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo "<br/><br/>";
    echo "les motos dans la base de données sont:<br/><br/>";
    echo "marque--modele--identifiant véhicule--plaque immatriculation--prix--disponibilité--identifiant du loueur";
    echo "<table>";
    while ($ligne = $stmt->fetch()) {
    echo 
    "<tr>
    <td>{$ligne['marque']} --</td>".
    "<td>{$ligne['modele']} --</td>".
    "<td>{$ligne['identifiant_vehicule']} --</td>".
    "<td>{$ligne['immatriculation']} --</td>".
    "<td>{$ligne['prix']} --</td>".
    "<td>{$ligne['disponible']} --</td>".
    "<td>{$ligne['identifiant_loueur']}</td>
    </tr>";
    }
    echo"</table>";




?>

<form method="post" action="squelette2.php">
    <input id="envoi" type="submit" value="retour"/>
</form>