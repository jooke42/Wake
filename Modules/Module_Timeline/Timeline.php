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

		if(isset($_POST['contenu'])) {
			$contenu=$_POST['contenu'];
		}
        else {
            $contenu=NULL;
        }
		if(isset($_POST['contenuCom'])) {
			$contenuCom=$_POST['contenuCom'];
			$idPub=$_POST['idPub'];
		}
		if(isset($_GET['idContact'])) {
			$idContact=$_GET['idContact'];
		}
        else {
            $idContact=$_SESSION['idUser'];
        }
		switch($action) {
			case 0:
				// Afficher les publications + formulaire ajout , action par default
				$monControleur->affichageFormAjoutPub();
				$monControleur->affichagePublication();
		
			break;

			case 1:
				// ajouter une publication a ma timeline
				$monControleur->ajoutPublication($contenu);
			break;

			case 2:
				$monControleur->ajoutCommentaire($idPub,$contenuCom,$idContact);
			break;

			case 3:
				$monControleur->affichageFormAjoutPub();
				$monControleur->affichagePublicationUser($idContact);
			break;

            case 4:
                $monControleur->ajoutPublicationUser($contenu,$idContact);
                break;

			default:
		
			break;
		}
	}
}


?>
