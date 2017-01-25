<?php

$tab = array(); //array pour y stocker les informations de mon fichier json

extract($_POST); 

$fichier = file_get_contents('fichier.json'); 

$json = json_decode($fichier,true); //je décode le contenu de mon fichier json
//var_dump($json); 

foreach($json as $valeurs)
{
	if($valeurs['prenom'] == strtolower($personne)) //je vérifie dans le tableau si un résultat correspond au contenu de $personne 
	{
		$tab['resultat'] = $valeurs['idEmploye'] . '<br>'; 
		$tab['resultat'] .= $valeurs['nom'] . '<br>'; 
		$tab['resultat'] .= $valeurs['salaire'] . '<br>'; 
		$tab['resultat'] .= $valeurs['dateEmbauche']; 
	}
}

echo json_encode($tab); //retourne une représentation JSON 

?>