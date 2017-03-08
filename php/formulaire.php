<?php
if($_POST){
	echo "Prénom : " .$_POST['prenom']."<br>";
	echo "Description : " .$_POST['description']."<br>";
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
		<label for="description">Description</label>
		<textarea type="text" name="descriptio" id="description"></textarea>
		<input type="submit" name="submit">
	</form>
</body>
</html>