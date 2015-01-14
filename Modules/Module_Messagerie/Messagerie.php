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
					$action = $_GET['action'];
					
				else 
					$action = 0;
				if(isset($_POST['idDestinataire'])) {
					$idDestinataire=$_POST['idDestinataire'];
				}

				elseif(isset($_GET['idDestinataire'])) {
					$idDestinataire=$_GET['idDestinataire'];
				}
				else {
					$idDestinataire=NULL;
				}

				if(isset($_POST['contenuMessage'])) {
					$contenuMessage=$_POST['contenuMessage'];
				}
				else {
					$contenuMessage=NULL;
				}
			switch($action) {

				case 0:
					$this->controleur_Messagerie->afficherListeContact();
					break;

				case 1:

					$this->controleur_Messagerie->afficherConversation($idDestinataire);
					break;

				case 2:
					$this->controleur_Messagerie->envoyerMessage($contenuMessage,$idDestinataire);
					break;

				default:
					$this->controleur_Messagerie->afficherListeContact();
					break;
				}
				
			}
			
		}
		
	}


?>
