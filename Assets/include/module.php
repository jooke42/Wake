<?php


if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");


class Module {
	var $contenu;
	var $titre;

	public static function getTitre() {
		return $this->titre;
	}		
	
	public static function getContenu() {
		return $this->contenu;
	}

}
?>
