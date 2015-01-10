<?php

class ControleurPhoto {
	public $maVue;
	public $monModele;
	function __construct($module) {

		$nomVue='Vue'.$module;
		$nomModele='Modele'.$module;

		$this->monModele=new $nomModele();		
		$this->maVue=new $nomVue();	

	}
	function affichageFormPhoto() {
		$this->maVue->affichageFormPhoto();
	}
	function uploadPhoto($idPub,$index,$destination,$maxsize,$extensions) {
		$idPhoto=$this->monModele->uploadPhoto($idPub,$index,$destination,$maxsize,$extensions);
        return $idPhoto;
	}
	function affichagePhotoReq() {
		$req=$this->monModele->affichagePhotoReq();
		return $req;
	}
	function affichagePhotoProfilReq() {
		$req=$this->monModele->affichagePhotoProfilReq();
		return $req;
	}

	

	function affichagePhotoProfil($req) {
		$this->maVue->affichagePhotoProfil($req);
	}
	function affichagePhotoProfilComplet() {
   		$req=$this->affichagePhotoProfilReq();
		$this->affichagePhotoProfil($req);
	}
	//////////USER////////////////
	function affichagePhotoProfilCompletUser($idContact) {
		$req=$this->affichagePhotoProfilReqUser($idContact);
		$this->affichagePhotoProfil($req);
		
	}
	function affichagePhotoProfilReqUser($idContact) {
		$req=$this->monModele->affichagePhotoProfilReqUser($idContact);
		return $req;
	}	

	


	function affichagePhotoUser($idUser) {
		// affichage de toutes les photos d'un utilisateur
		$req=$this->monModele->affichagePhotoReq($idUser);
		$this->maVue->affichagePhotoUser($req);
	}
	
	function setPhotoProfil($idUser,$idPhoto) {
		
		$this->monModele->setPhotoProfil($idUser,$idPhoto);
	}
	function deletePhoto($idPhoto, $idUser) {
		$this->monModele->deletePhoto($idPhoto, $idUser);
	}
}

?>
