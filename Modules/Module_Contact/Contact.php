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
		$search=isset($_POST['search'])?$_POST['search']:'victor';
		$ListeContactsManager=new ListeContactManager();
			switch($action){
					case "afficherToutLesContacts":
						
						$ListeContacts=$ListeContactsManager->GetListeContact();
						$ListeContacts=$ListeContacts->GetListeContact();
						$controleur->AfficherListeContact($ListeContacts);
						break;
					case "searchContact":
						$ListeContacts=$ListeContactsManager->seachProfil($search);
						$controleur->AfficherListeContact($ListeContacts);
						break;
					case "contactChange":

						$ListeContacts= array();
						foreach($_POST as $idContact => $etat){
							array_push($ListeContacts, new UnContact($idContact, $etat));
						}
						$ListeContactsManager->SetListeContact($ListeContacts);
<<<<<<< HEAD
						header("Location: index.php?Module=Contact");
=======
						header ("Refresh: 0;URL=index.php?action=afficherToutLesContacts&Module=Contact");
>>>>>>> 3636c8c83cedd5f12438df27eb59cf8ac3d34f85
						
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
