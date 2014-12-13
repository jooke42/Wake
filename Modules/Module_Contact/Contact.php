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
		$ListeContactsManager=new ListeContactManager();
			switch($action){
					case "afficherToutLesContacts":
						
						$ListeContacts=$ListeContactsManager->GetListeContact();
						$ListeContacts=$ListeContacts->GetListeContact();
						$controleur->AfficherListeContact($ListeContacts);
						break;
					case "searchContact":
						$ListeContacts=$modele->seachProfil($search);
						$controleur->AfficherToutLesContacts($ListeContacts);
						break;
					case "contactChange":
						$ListeContacts= array();
						foreach($_POST as $idContact => $etat){
							array_push($ListeContacts, new UnContact($idContact, $etat));
						}
						$ListeContactsManager->SetListeContact($ListeContacts);
						
						
						break;
					case "deleteContact":
						$modele->deleteContact($_GET['idUser']);
						break;
					default:
						$ListeContacts=$ListeContactsManager->GetListeContact();
						$ListeContacts=$ListeContacts->GetListeContact();
						$controleur->AfficherListeContact($ListeContacts);
						break;
	
	
	
	}
	}
	
	
 
 }
 ?>
