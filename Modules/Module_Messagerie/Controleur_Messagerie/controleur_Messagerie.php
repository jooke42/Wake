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
		
		function afficherConversation() {
			$req = $this->modele_Messagerie->afficherConversation(); // SELECT
			$this->vue_Messagerie->afficherConversation($req);
		}

		function envoyerMessage() {
			$this->modele_Messagerie->envoyerMessage(); // INSERT
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
