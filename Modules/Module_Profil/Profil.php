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
            $nom=mysql_real_escape_string($_POST['nom']);
            $pass=mysql_real_escape_string($_POST['pass']);
            $email=mysql_real_escape_string($_POST['email']);
            $genre=mysql_real_escape_string($_POST['genre']);
            $metier=mysql_real_escape_string($_POST['metier']);
			$etude=mysql_real_escape_string($_POST['etude']);
			$adresse=mysql_real_escape_string($_POST['adresse']);
			$lieuTravail=mysql_real_escape_string($_POST['lieuTravail']);
			$status=mysql_real_escape_string($_POST['status']);
            $prenom=mysql_real_escape_string($_POST['prenom']);
            $datNais=mysql_real_escape_string($_POST['datNais']);
            $telephone=mysql_real_escape_string($_POST['telephone']);
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
                $monControleur->modifProfil($nom,$prenom,$pass,$email,$genre,$adresse,$datNais,$telephone,$metier,$status,$lieuTravail,$etude);
			break;

			case 3:
		
			break;

			default:
		
			break;
		}
	}
}


?>
