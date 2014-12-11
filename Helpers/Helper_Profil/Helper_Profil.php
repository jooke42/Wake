<?php

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");

include_once("Controleur_Helper_Profil/controleur_Helper_Profil.php");
include_once("Vue_Helper_Profil/vue_Helper_Profil.php");
include_once("Modele_Helper_Profil/modele_Helper_Profil.php");

class Helper_Profil extends Module {
	
	function __construct() {
		$HelperProfil="HelperProfil";
		$nomControleur='ControleurHelperProfil';
		$monControleur=new $nomControleur($HelperProfil);

        include_once("Modules/Module_Photo/Controleur_Photo/controleur_Photo.php");
        include_once("Modules/Module_Photo/Modele_Photo/modele_Photo.php");
        include_once("Modules/Module_Photo/Vue_Photo/vue_Photo.php");

        $nomControleurPhoto='ControleurPhoto';
		$monControleurPhoto=new $nomControleurPhoto("Photo");
		
		if(isset($_GET['idContact'])) {
			
			$action=0;
			$idContact=$_GET['idContact'];
		}
		else {
			$action=1;
			$idContact=$_SESSION['Utilisateur']["idUser"];
		}
		
		switch($action) {
			case 0:
				$req=$monControleur->reqNomPhotoUser($idContact);
			
				$monControleur->affichageNomPhotoUser($req,$monControleurPhoto);
			break;
			case 1:	
				$req=$monControleur->reqNomPhoto();
				$monControleur->affichageNomPhoto($req,$monControleurPhoto);	
			break;
		}
		
	}
}


?>
