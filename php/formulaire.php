<?php
if($_POST){
	echo "Prénom : " .$_POST['prenom']."<br>";
	echo "Description : " .$_POST['description']."<br>";
	echo "ville : " .$_POST['ville']."<br>";
	echo "codepostal : " .$_POST['codepostal']."<br>";
	echo "adresse : " .$_POST['adresse']."<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		label{float: left;width: 95px;font-style: italic;font-family: Calibri, sans-serif;}
		h1{margin: 0 0 10px 200px; font-family: font-family: Calibri, sans-serif;}
	</style>
</head>
<body>
	<form method="post" action="">
		<label for="prenom">Prénom</label>
		<input type="text" name="prenom" id="prenom">
		<br>
		<label for="ville">ville</label>
		<input type="text" name="ville" id="ville">
		<br>
		<label for="codepostal">codepostal</label>
		<input type="text" name="codepostal" id="codepostal">
		<br>
		<label for="adresse">adresse</label>
		<input type="text" name="adresse" id="adresse">
		<br>
		<label for="description">Description</label>
		<textarea type="text" name="description" id="description"></textarea>
		<input type="submit" name="submit">
	</form>
</body>
</html>