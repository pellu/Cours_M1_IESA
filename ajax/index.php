
<!DOCTYPE html>
<html>
	<head>
		<title>Autocomplete</title>
		<meta charset="UTF-8">
		<style>
			form{width: 50%; margin: auto;}
			form,h3,p{text-align: center;}
		</style>
	</head>
	<body>
		<main>
			<h3>Indiquez les premières lettres d'un pays</h3>
			<form method="" action="">
				<label for="pays">Pays</label>
				<input type="text" id="pays" onkeyup="toto(this.value);">
			</form>
			<div>
				<p>Suggestions</p>
				<ul id="suggestions"></ul>
			</div>
		</main>
		<script>
			function toto(str){
				var requeteAjax;
				if(window.XMLHttpRequest){ //si le navigateur prend en charge XMLHttpRequest
					requeteAjax = new XMLHttpRequest();
				}else{
					requeteAjax = new ActiveXObject("Microsoft.XMLHttp"); //servername.typename
				}
				//onreadystatechange : nous permet de décomposer les statuts de la requête
				requeteAjax.onreadystatechange = function(){
					/*
						readyState => correspond à l'état du client. 5 valeurs :
						0 -> création de l'objet ajax mais celui-ci n'a pas encore été initialisé
						1 -> l'objet Ajax est initialisé mais pas encore envoyé
						2 -> la méthode send() a été appelé 
						3 -> le serveur commence à traiter les informations : loading
						4 -> toutes les données ont été réceptionnées

						status => correspond à l'état du serveur.
						200 -> tout va bien
						301 -> problème de redirection
						500 -> problème serveur
					*/
					if(requeteAjax.readyState == 4 && requeteAjax.status == 200){
						document.getElementById('suggestions').innerHTML = requeteAjax.responseText;
					}
				}
				requeteAjax.open('GET','donnees.php?q=' + str);
				requeteAjax.send();
			}
		</script>
	</body>
</html>