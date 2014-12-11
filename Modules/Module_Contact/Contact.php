<?php

if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");
   
include_once("Controleur_".$module."/controleur_".$module.".php");
include_once("Vue_".$module."/vue_".$module.".php");
include_once("Modele_".$module."/modele_".$module.".php");

 class Contact extends Module{
	 
	
	function __construct(){
		
		$modele=new ModeleContact();
		 $controleur= new ControleurContact();
		$action=isset($_GET['action'])?$_GET['action']:'afficherToutLesContacts';
		$search=isset($_POST['search-bar'])?$_POST['search-bar']:'victor';
			switch($action){
					case "afficherToutLesContacts":
						$ListeContacts=$modele->getContacts();
						$controleur->AfficherToutLesContacts($ListeContacts);
						break;
					case "searchContact":
						$ListeContacts=$modele->seachProfil($search);
						$controleur->AfficherToutLesContacts($ListeContacts);
						break;
					case "contactRequest":
						$modele->contactRequest($_GET['idUser']);
						break;
					case "deleteContact":
						$modele->deleteContact($_GET['idUser']);
						break;
					default:
						$ListeContacts=$modele->getContacts($_GET['idUser']);
						$controleur->AfficherToutLesContacts($ListeContacts);
						break;
	
	
	
	}
	}
	
	
 
 }
 ?>
