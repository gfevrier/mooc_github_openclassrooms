<?php

/**
 * Accueil tutoriel 1 - introduction à ExtJS
 * --> Ce fichier a été ajouté dans le repository GitHub
 */
 
// Enregistrement de la visite
$sNomFichierVisites = 'visites.log';
$sDate = date('Y-m-d H:i:s');
$sNavigateur = $_SERVER['HTTP_USER_AGENT'];
$sIP = $_SERVER['REMOTE_ADDR'];
$sProvenance = (isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'?');
$sChaineVisite = $sDate . ' | ' . $sNavigateur . ' ('. $sIP .')' . ' | Referrer : ' . $sProvenance . "\n";
file_put_contents($sNomFichierVisites, $sChaineVisite, FILE_APPEND);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Tutoriel 1 - Introduction à ExtJS</title>

	<link rel="stylesheet" href ="../css/tutoriels.css" />
	
    <!-- Style utilisé pour le "div" -->
    
</head>
<body>
	
	<div class="conteneur_principal">
		
		<h1>Tutoriel 1 : introduction à ExtJS</h1>
		<p>
			Cette page est un complément au tutoriel "Introduction à ExtJS".<br/>
			Vous y trouverez notamment les codes sources utilisés.
		</p>
		<ul>
			<li><a href="sources/index_1.html" target="_blank">Exemple 1 : ma première fenêtre</a></li>
			<li><a href="sources/index.html" target="_blank">Exemple 2 : un formulaire simple</a></li>
			<li><a href="sources/tutoriel_1_introduction_a_extjs.zip" target="_blank">Le code source complet</a></li>
		</ul>
	</div>
	
</body>
</html>

