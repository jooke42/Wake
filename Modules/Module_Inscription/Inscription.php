<?php 

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");



include_once("Controleur_".$module."/controleur_".$module.".php");
include_once("Vue_".$module."/vue_".$module.".php");
include_once("Modele_".$module."/modele_".$module.".php");

class Inscription extends Module {
	
	function __construct() {
		
		$module=get_class($this);
		$nomControleur='Controleur'.$module;
		$monControleur=new $nomControleur($module);
		
		
		if(isset($_POST['nom'])) {
			$nom=mysql_real_escape_string($_POST['nom']);
			$pass=mysql_real_escape_string($_POST['pass']);
			$email=mysql_real_escape_string($_POST['email']);
			$genre=mysql_real_escape_string($_POST['genre']);
			$prenom=mysql_real_escape_string($_POST['prenom']);
			$adresse=mysql_real_escape_string($_POST['adresse']);
			$datNais=mysql_real_escape_string($_POST['datNais']);
			$passConf=mysql_real_escape_string($_POST['passConf']);
			$telephone=mysql_real_escape_string($_POST['telephone']);
	
	
		}

		if(!isset($action)) {
			if(isset($_GET['action'])) {
				$action=$_GET['action'];
			}
			else {
				$action=0;
			}
		}


		switch($action) {
			case 0:
				
				$monControleur->affichageFormInscription();
			break;

			case 1:
		
				$monControleur->nouveauUser($nom, $prenom, $genre,$adresse, $pass, $passConf,$email ,$datNais, $telephone);
			break;

			case 3:
				echo "/!\ Mot de passes non identiques /!\ ";
				ControleurInscription::affichageFormInscription();
			break;

			case 4:
				echo  "/!\ Adresse mail déjà utilisée /!\ ";
				ControleurInscription::affichageFormInscription();
			break;
			default:
				ControleurInscription::affichageFormInscription();
			break;
		}
	}
}
?>

