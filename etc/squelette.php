<!DOCTYPE html> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

	<head>
		<meta charset="UTF-8"/> 
		<title>agence location véhicules</title>
		<meta name="author" content="simon lambert"/>
		<meta name="keywords" content="agence_location"/>
		<link rel="stylesheet" type="text/css" href="style/squelette2.css" title="agence_location"/> 
		<script src="script/script.js"></script>
	</head>

<body>

<img src="style/mycar.png" onerror="this.src='../style/mycar.png'"/>

<nav>
	<div class="dropdown" id="voitures">
		<h1>Voitures</h1>
		<input class="Buttonstyled" id="inserVoiture" type="submit" value="insérer une voiture" onClick="AfficherMasquer('aMasquerInsertVoiture')"/><br>
		<div id="aMasquerInsertVoiture" style="display:none;">
			<form method="post" action="etc/insertVoiture.php">
				<label for="marque">marque de la voiture à insérer:</label>
        		<input type="text" id="marque" name="marque"/><br>
        		<label for="modele">modèle de la voiture à insérer:</label>
        		<input type="text" id="modele" name="modele"/><br>
        		<label for="immat">immatriculation de la voiture à insérer:</label>
        		<input type="text" id="immat" name="immat"/><br>
				<label for="prix">prix du véhicule à louer:</label>
				<input type="text" id="prix" name="prix"/><br>
        		<input id="envoi" type="submit" value="insérer véhicule"/>
			</form>
		</div>

		<input class="Buttonstyled" id="supprimeVoiture" type="submit" value="supprimer une voiture" onClick="AfficherMasquer('aMasquerSupprimeVoiture')"/><br>
		<div id="aMasquerSupprimeVoiture" style="display:none;">
			<form method="post" action="etc/suppriVoiture.php"> 
        		<label for="immat">immatriculation de la voiture à supprimer:</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="supprimer voiture"/>
			</form>
		</div>
		<input class="Buttonstyled" id="prixVoiture" type="submit" value="changer prix d'une voiture" onClick="AfficherMasquer('aMasquerPrixVoiture')"/><br>
		<div id="aMasquerPrixVoiture" style="display:none;">
			<form method="post" action="etc/prixVoiture.php">
        		<label for="immat">immatriculation de la voiture dont vous voulez changer le prix:</label>
        		<input type="text" id="immat" name="immat"/><br>
				<label for="prix">nouveau prix</label>
				<input type="text" id="prix" name="prix">
        		<input id="envoi" type="submit" value="changer le prix"/>
			</form>
		</div>
			
		<input class="Buttonstyled" id="assignVoiture" type="submit" value="assigner loueur à une voiture" onClick="AfficherMasquer('aMasquerAssigneVoiture')"/><br>
		<div id="aMasquerAssigneVoiture" style="display:none;">
			<form method="post" action="etc/assignVoiture.php"> 
        		<label for="identifiant">identifiant du loueur</label>
        		<input type="text" id="identifiant" name="identifiant"/><br>
				<label for="prenom">prénom du loueur</label>
        		<input type="text" id="prenom" name="prenom"/><br>
				<label for="nom">nom du loueur</label>
        		<input type="text" id="nom" name="nom"/><br>
				<label for="immat">immatriculation</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="assigner"/>
			</form>
		</div>

		<input class="Buttonstyled" id="assignVoiture" type="submit" value="loueur rend une voiture" onClick="AfficherMasquer('aMasquerRendVoiture')"/><br>
		<div id="aMasquerRendVoiture" style="display:none;">		
			<form method="post" action="etc/rendVoiture.php"> 		
        		<label for="immat">immatriculation de la voiture rendue:</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="rendre"/>
			</form>
		</div>
		
	</div>



	<div class="dropdown" id="motos">
		<h1>Motos</h1>
		<input class="Buttonstyled" id="insermoto" type="submit" value="insérer une moto" onClick="AfficherMasquer('aMasquerInsertmoto')"/><br>
		<div id="aMasquerInsertmoto" style="display:none;">
			<form method="post" action="etc/insertmoto.php">
				<label for="marque">marque de la moto à insérer:</label>
        		<input type="text" id="marque" name="marque"/><br>
        		<label for="modele">modèle de la moto à insérer:</label>
        		<input type="text" id="modele" name="modele"/><br>
        		<label for="immat">immatriculation de la moto à insérer:</label>
        		<input type="text" id="immat" name="immat"/><br>
				<label for="prix">prix du véhicule à louer:</label>
				<input type="text" id="prix" name="prix"/><br>
        		<input id="envoi" type="submit" value="insérer véhicule"/>
			</form>
		</div>

		<input class="Buttonstyled" id="supprimemoto" type="submit" value="supprimer une moto" onClick="AfficherMasquer('aMasquerSupprimemoto')"/><br>
		<div id="aMasquerSupprimemoto" style="display:none;">
			<form method="post" action="etc/supprimoto.php"> 
        		<label for="immat">immatriculation de la moto à supprimer:</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="supprimer moto"/>
			</form>
		</div>
		<input class="Buttonstyled" id="prixmoto" type="submit" value="changer prix d'une moto" onClick="AfficherMasquer('aMasquerPrixmoto')"/><br>
		<div id="aMasquerPrixmoto" style="display:none;">
			<form method="post" action="etc/prixmoto.php">
        		<label for="immat">immatriculation de la moto dont vous voulez changer le prix:</label>
        		<input type="text" id="immat" name="immat"/><br>
				<label for="prix">nouveau prix</label>
				<input type="text" id="prix" name="prix">
        		<input id="envoi" type="submit" value="changer le prix"/>
			</form>
		</div>
			
		<input class="Buttonstyled" id="assignmoto" type="submit" value="assigner loueur à une moto" onClick="AfficherMasquer('aMasquerAssignemoto')"/><br>
		<div id="aMasquerAssignemoto" style="display:none;">
			<form method="post" action="etc/assignmoto.php"> 
        		<label for="identifiant">identifiant du loueur</label>
        		<input type="text" id="identifiant" name="identifiant"/><br>
				<label for="prenom">prénom du loueur</label>
        		<input type="text" id="prenom" name="prenom"/><br>
				<label for="nom">nom du loueur</label>
        		<input type="text" id="nom" name="nom"/><br>
				<label for="immat">immatriculation</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="assigner"/>
			</form>
		</div>

		<input class="Buttonstyled" id="assignmoto" type="submit" value="loueur rend une moto" onClick="AfficherMasquer('aMasquerRendmoto')"/><br>
		<div id="aMasquerRendmoto" style="display:none;">		
			<form method="post" action="etc/rendmoto.php"> 		
        		<label for="immat">immatriculation de la moto rendue:</label>
        		<input type="text" id="immat" name="immat"/><br>
        		<input id="envoi" type="submit" value="rendre"/>
			</form>
		</div>
	</div>
	<div id="tousVehicules">
	<h1>Voir tous les véhicules confondus</h1>
	<form method="post" action="etc/voirTous.php"><input class="Buttonstyled" type="submit" value="voir les véhicules"></form>
	<form method="post" action="etc/voirTousLibre.php"><input class="Buttonstyled" type="submit" value="voir les véhicules libres"></form>
	<form method="post" action="etc/voirTousLoues.php"><input class="Buttonstyled" type="submit" value="voir les véhicules loués"></form>
	</div>
</nav>
</body>


</html>
