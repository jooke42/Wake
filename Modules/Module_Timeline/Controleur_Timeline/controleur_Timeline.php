<?php

class ControleurTimeline {
	public $maVue;
	public $monModele;
	function __construct($module) {

		$nomVue='Vue'.$module;
		$nomModele='Modele'.$module;

		$this->monModele=new $nomModele();		
		$this->maVue=new $nomVue();
	}
	function affichagePublication() {
		$req=$this->monModele->affichagePublication();
		$this->maVue->affichagePublication($req,$this);
	}
	function affichagePublicationUser($idContact) {
		$req=$this->monModele->affichagePublicationUser($idContact);
		$this->maVue->affichagePublication($req,$this);
	}
	function affichageCommentaire($idPub) {
		$reqCom=$this->monModele->affichageCommentaire($idPub);
		$this->maVue->affichageCommentaire($idPub, $reqCom);
	}
	function affichageFormAjoutPub() {
		$this->maVue->affichageFormAjoutPub();
	}

	function ajoutPublication($titre,$contenu) {
		$this->monModele->ajoutPublication($titre,$contenu);
	}
    function ajoutPublicationUser($titre,$contenu,$idContact) {
        $this->monModele->ajoutPublicationUser($titre,$contenu,$idContact);
    }
	function ajoutCommentaire($idPub,$contenuCom,$idContact) {
		$this->monModele->ajoutCommentaire($idPub,$contenuCom,$idContact);
	}
	
}

?>
