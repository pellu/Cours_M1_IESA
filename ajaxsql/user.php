<?php
$userID = intval($_GET['userID']); //Retourne valeur numérique

$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //Gestion de l'encodage
	PDO :: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Gestion des erreurs
	);
$pdo = new PDO('mysql:host=localhost;dbname=cours','root','',$options);
$resultat=$pdo->query("SELECT * FROM user WHERE id_user=$userID");

$recupUsers = $resultat->fetch(PDO::FETCH_ASSOC);
echo'<table><tr><th>Prénom</th><th>Nom</th><th>Age</th><th>Ville</th><th>Métier</th></tr>';
echo "<tr>";
echo '<td>'.$recupUsers['prenom'].'</td>';
echo '<td>'.$recupUsers['nom'].'</td>';
echo '<td>'.$recupUsers['age'].'</td>';
echo '<td>'.$recupUsers['ville'].'</td>';
echo '<td>'.$recupUsers['metier'].'</td>';
echo "</tr></table>";