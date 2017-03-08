<?php
if($_POST AND empty($_POST['mail'])){
	echo "<h2>champs mail vide</h2><br>";
}else{
	echo "pseudo : " .$_POST['pseudo']."<br>";
	echo "mail : " .$_POST['mail']."<br>";
}
foreach ($_POST as $indice => $valeur) {
	echo "$indice :valeur";
}
?>