<?php

class ControleurHelperProfil {
	private $maVue;
	private $monModele;
	function __construct($HelperProfil) {

		$nomVue='Vue'.$HelperProfil;
		$nomModele='Modele'.$HelperProfil;

		$this->monModele=new $nomModele();		
		$this->maVue=new $nomVue();

	}
	function reqNomPhoto() {
		$req=$this->monModele->reqNomPhoto();
		return $req;
	}
	function reqNomPhotoUser($idContact) {
		$req=$this->monModele->reqNomPhotoUser($idContact);
		return $req;
	}
	function affichageNomPhoto($req,$monControleurPhoto) {
		$this->maVue->affichageNomPhoto($req,$monControleurPhoto);
	}
	function affichageNomPhotoUser($req,$monControleurPhoto) {
		$this->maVue->affichageNomPhotoUser($req,$monControleurPhoto);
	}

}

?>
