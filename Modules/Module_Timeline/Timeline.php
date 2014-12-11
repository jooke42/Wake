<?php

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");

include_once("Controleur_".$module."/controleur_".$module.".php");
include_once("Vue_".$module."/vue_".$module.".php");
include_once("Modele_".$module."/modele_".$module.".php");

class Timeline extends Module {
	
	function __construct() {
		
		$module=get_class($this);
		$nomControleur='Controleur'.$module;
		$monControleur=new $nomControleur($module);
		
		
		if(!isset($action)) {
			if(isset($_GET['action'])) {
				$action=$_GET['action'];
			}
			else {
				$action=0;
			}
		}

		if(isset($_POST['titre'])) {
			$titre=$_POST['titre'];
			$contenu=$_POST['contenu'];
		}
		if(isset($_POST['contenuCom'])) {
			$contenuCom=$_POST['contenuCom'];
			$idPub=$_POST['idPub'];
		}
		if(isset($_GET['idContact'])) {
			$idContact=$_GET['idContact'];
		}
		switch($action) {
			case 0:
				// Afficher les publications + formulaire ajout , action par default
				$monControleur->affichageFormAjoutPub();
				$monControleur->affichagePublication();
		
			break;

			case 1:
				// ajouter une publication a ma timeline
				$monControleur->ajoutPublication($titre,$contenu);
			break;

			case 2:
				$monControleur->ajoutCommentaire($idPub,$contenuCom);
			break;

			case 3:
				$monControleur->affichageFormAjoutPub();
				$monControleur->affichagePublicationUser($idContact);
			break;

			default:
		
			break;
		}
	}
}


?>
