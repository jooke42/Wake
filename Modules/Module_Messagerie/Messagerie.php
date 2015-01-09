<?php 

	if (! defined ('TEST_INCLUDE'))
 	  die ("Vous ne pouvez pas acceder directement à ce fichier");

	include_once("Controleur_".$module."/controleur_".$module.".php");
	include_once("Vue_".$module."/vue_".$module.".php");
	include_once("Modele_".$module."/modele_".$module.".php");
	class Messagerie extends Module {
		
		private $controleur_Messagerie;	

		function __construct() {
		
			$module = get_class($this);
			$nomControleur = 'Controleur'.$module;
			$this->controleur_Messagerie = new $nomControleur($module);

			if(!isset($action)) {

				if(isset($_GET['action']))
					$action = mysql_real_escape_string($_GET['action']);
					
				else 
					$action = 0;

			switch($action) {

				case 0:
					$this->controleur_Messagerie->afficherListeContact();
					break;

				case 1:
					$this->controleur_Messagerie->afficherConversation();
					break;

				case 2:
					$this->controleur_Messagerie->envoyerMessage();
					break;

				default:
					$this->controleur_Messagerie->afficherListeContact();
					break;
				}
				
			}
			
		}
		
	}


?>
