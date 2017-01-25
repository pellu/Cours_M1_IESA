<?php
//Afficher du contenu ajax via une base de donnée mysql en connexion PDO
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ajax sql</title>
		<meta charset="utf-8">
	</head>
	<body>
		<select name="user" onchange="showUser(this.value);">
			<optgroup label="Sélectionner une personne">
				<option value="1">Henri Dupont</option>
				<option value="2">Hector Dumoulin</option>
				<option value="3">Hélène Carpentier</option>
				<option value="4">Xavier Simon</option>
				<option value="5">Marine Blévin</option>
			</optgroup>
		</select>
		<div id="recupInfos">
			<b>Les informations des personnes s'afficheront à cet endroit</b>
		</div>
		<script>
			function showUser(str){
				var requeteAjax;
				if(str == ""){
					document.getElementById('recupInfos').innerHTML = "";
					return true;
				}else{
					if(window.XMLHttpRequest){
						requeteAjax = new XMLHttpRequest();
					}else{
						requeteAjax = new ActiveXObject("Microsoft.XMLHTTP");
					}
					requeteAjax.onreadystatechange = function (){
						if(requeteAjax.readyState == 4 && requeteAjax.status == 200){
							document.getElementById('recupInfos').innerHTML = requeteAjax.responseText;
						}
					}
					requeteAjax.open('GET','user.php?userID=' + str, true);
					requeteAjax.send();
				}
			}
		</script>
	</body>
</html>