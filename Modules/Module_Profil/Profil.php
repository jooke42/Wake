<?php

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");

include_once("Controleur_".$module."/controleur_".$module.".php");
include_once("Vue_".$module."/vue_".$module.".php");
include_once("Modele_".$module."/modele_".$module.".php");

class Profil extends Module {
	
	function __construct() {
		$module=get_class($this);
		$nomControleur='Controleur'.$module;
		$monControleur=new $nomControleur($module);
        include_once("Modules/Module_Photo/Controleur_Photo/controleur_Photo.php");
        include_once("Modules/Module_Photo/Modele_Photo/modele_Photo.php");
        include_once("Modules/Module_Photo/Vue_Photo/vue_Photo.php");

        $nomControleurPhoto='ControleurPhoto';
		$monControleurPhoto=new $nomControleurPhoto("Photo");
		
		

		if(!isset($actionProfil)) {
			if(isset($_GET['actionProfil'])) {
				$actionProfil=$_GET['actionProfil'];
			}
			else {
				$actionProfil=0;
			}
		}
        if(isset($_POST['nom'])) {
            $nom=$_POST['nom'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $genre=$_POST['genre'];
            $metier=$_POST['metier'];
            $prenom=$_POST['prenom'];
            $datNais=$_POST['datNais'];
            $telephone=$_POST['telephone'];
        }
		
		switch($actionProfil) {
			case 0:
				//Affichage des informations de l'utilisateur
				$monControleur->affichageProfil($monControleurPhoto);
			break;

			case 1:
                $monControleur->affichageProfilModif($monControleurPhoto);
			break;

			case 2:
                $monControleur->modifProfil($nom,$prenom,$pass,$email,$genre,$datNais,$telephone,$metier);
			break;

			case 3:
		
			break;

			default:
		
			break;
		}
	}
}


?>
