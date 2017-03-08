<?php
if(isset($_POST['pseudo'])) $pseudo=htmlspecialchars(addslashes($_POST['pseudo'])); else $pseudo="";
if(isset($_POST['mail'])) $mail=htmlspecialchars(addslashes($_POST['mail'])); else $mail="";
if($_POST){
	if(empty($_POST['mail']) OR empty($_POST['pseudo'])){
		echo "<h2>champs mail vide</h2><br>";
	}else{
		echo "pseudo : " .$_POST['pseudo']."<br>";
		echo "mail : " .$_POST['mail']."<br>";
	}
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	</form>
	<form method="post" action="">
		<label for="pseudo">pseudo</label>
		<input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo; ?>" required>
		<br>
		<label for="mail">mail</label>
		<input type="email" name="mail" id="mail" value="<?php echo $mail; ?>" required>
		<input type="submit" name="envoyer">
	</form>
</body>
</html>
<?php
}
foreach ($_POST as $indice => $valeur) {
	echo "$indice :valeur";
}
?>