<?php



	class ControleurMessagerie {

		private $vue_Messagerie;
		private $modele_Messagerie;

		function __construct($module) {
			$nomVue='Vue'.$module;
			$nomModele='Modele'.$module;

			$this->monModele=new $nomModele($module);
			$this->maVue=new $nomVue($module);

		
		}

		function afficherListeContact() { 
			$req = $this->monModele->afficherListeContact(); // SELECT
			$this->maVue->afficherListeContact($req);
		}
		
		function afficherConversation($idDestinataire) {
			$req = $this->monModele->afficherConversation($idDestinataire); // SELECT
			$this->maVue->afficherConversation($req,$idDestinataire);
		}

		function envoyerMessage($contenuMessage,$idDestinataire) {

			$this->monModele->envoyerMessage($contenuMessage,$idDestinataire); // INSERT
		}

		/* Optionnel */
		/*function trierListeContact() {
			// SELECT ASCENDANT
		}*/

		/* Optionnel */
		/*function viderFilMessage() {
			// DELETE
		}*/	
			
	}

?>
