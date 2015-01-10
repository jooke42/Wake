<?php

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");


class Photo extends Module {
	
	function __construct() {
		
		$module=get_class($this);

		include_once("Controleur_".$module."/controleur_".$module.".php");
		include_once("Vue_".$module."/vue_".$module.".php");
		include_once("Modele_".$module."/modele_".$module.".php");
		
		$nomControleur='Controleur'.$module;
		$monControleur=new $nomControleur($module);
		
		if(!isset($actionPhoto)) {
			if(isset($_GET['actionPhoto'])) {
				$actionPhoto=mysql_real_escape_string($_GET['actionPhoto']);
			}
			else {
				$actionPhoto=0;
			}
		}

		if(isset($_POST['MAX_FILE_SIZE'])) {

			$maxsize=mysql_real_escape_string($_POST['MAX_FILE_SIZE']);
		}
		else {
			$titre=null;
			$description=null;
			$maxsize=null;	
		}
		if(!isset($idPub)) {
			$idPub=NULL;
		}

		if(isset($_FILES['photo'])) {
			$destination='Assets/photo/'.$_FILES['photo']['name'];
		}
		else {
			$destination=NULL;
		}	
		if(isset($_GET['idContact'])) {
			$idUser=mysql_real_escape_string($_GET['idContact']);
		}
		else {
			$idUser=$_SESSION['Utilisateur']["idUser"];
		}
		if(isset($_GET['idPhoto'])) {
			$idPhoto=$_GET['idPhoto'];
		}

	
		switch($actionPhoto) {
			case 0:	
				
				$monControleur->affichagePhotoUser($idUser);
			case 1:
				$upload=$monControleur->uploadPhoto($idPub,'photo',$destination,$maxsize,array('png','gif','jpg','jpeg'));
				
			break;

			case 2:
				$monControleur->affichagePhotoProfilComplet();
			break;

			case 3:
				$monControleur->affichagePhotoUser();
			break;
			case 4:
				
				$idPhoto=$monControleur->uploadPhoto($idPub,'photo',$destination,$maxsize,array('png','gif','jpg','jpeg'));
				$idUser=$_SESSION['idUser'];
				$monControleur->setPhotoProfil($idUser,$idPhoto);
				
				header ("Refresh: 0;URL=index.php?Module=Profil");
			break; 

			case 5:
				$monControleur->affichageFormPhoto();
			break;
			case 6:
				$monControleur->deletePhoto($idPhoto,$idUser);
				header ("Refresh: 0;URL=index.php?Module=Photo");
				break;
			case 7:
				$monControleur->setPhotoProfil($idUser,$idPhoto);
				header ("Refresh: 0;URL=index.php?Module=Photo");
				break;
			default:
		
			break;
			
		}
	}	
}	


?>


