<?php

class ControleurProfil {
	public $maVue;
	public $monModele;
	public $monControleurPhoto;
	function __construct($module) {

		$nomVue='Vue'.$module;
		$nomModele='Modele'.$module;

		$this->monModele=new $nomModele();		
		$this->maVue=new $nomVue();
		
		
	
	}
	function affichageProfil($monControleurPhoto) {
		
		$this->maVue->affichageProfil($monControleurPhoto);
	}
    function affichageProfilModif($monControleurPhoto) {

        $this->maVue->affichageProfilModif($monControleurPhoto);
    }
    function modifProfil($nom,$prenom,$pass,$email,$genre,$datNais,$telephone,$metier) {
        $this->monModele->modifProfil($nom,$prenom,$pass,$email,$genre,$datNais,$telephone,$metier);
    }
}

?>
