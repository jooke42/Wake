<?php
if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");
   
 //include_once("Controleur_".$module."/".$module.".php");

class ControleurContact{
	private $vue;
	function __construct(){
		$this->vue=new VueContact();
		
	
	}
	 function AfficherListeContact($ListeContacts)
	{
		
		
	$this->vue->AfficherListeContact($ListeContacts);
		
	}
	
}


 
 ?>
