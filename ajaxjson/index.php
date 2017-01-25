<!DOCTYPE html>
<html>
	<head>
		<title>Ajax Json</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="personne">Laura</div>
		<div id="resultat"></div>
		<button type="button" onclick="requeteinformations()">Consulter les informations</button>
		<script>
			function requeteinformations()
			{
				var requeteAjax;
				
				var personne = document.getElementById("personne");
				personne = personne.innerHTML;
				var param = "personne=" + personne;
				
				if(window.XMLHttpRequest) //si le navigateur prend en charge XMLHttpRequest...
				{
					requeteAjax = new XMLHttpRequest();
				}
				else
				{
					requeteAjax = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
					
				requeteAjax.open('POST','ajaxjson.php',true);
				
				
				//lors de l'utilisation du post, il faut sp�cifier le content-type : 
				requeteAjax.setRequestHeader("Content-type","application/x-www-form-urlencoded");//oblig� de la sp�cifier lors du POST ! 				
				requeteAjax.onreadystatechange = function ()
				{
					if(requeteAjax.readyState == 4 && requeteAjax.status == 200)
					{
						var obj = JSON.parse(requeteAjax.responseText); //je parse la r�sultat r�cup�r� lors du traitement : obtenir des donn�es d'affichage au bon format. 
						document.getElementById('resultat').innerHTML = obj.resultat; 
					}
				}

				requeteAjax.send(param); 
			}		
		</script>
	</body>
</html>