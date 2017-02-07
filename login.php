<?php
// inclusion du fichier contenant les fonctions générales
include('fonction.inc');

// fonctionqui vérifie si l'identification est correcte
function utilisateur_existe($identifiant,$mot_de_passe)
{
	return(bool) rand(0,1);
}

// Initialisation des données
if (isset($_POST['connexion']))
{
	$identifiant = valeur_saisie($_POST['identifiant']);
	$mot_de_passe = valeur_saisie($_POST['mot_de_passe']);
	
	// vérification si l'utilisateur existe
	if (utilisateur_existe($identifiant,$mot_de_passe))
	{
		header('location:accueil.php');
		exit;
	}
	else
	{
		$message = 'Identification incorrecte. ';
		$message = 'Essayez de nouveau ');
	}
}
?>
 
