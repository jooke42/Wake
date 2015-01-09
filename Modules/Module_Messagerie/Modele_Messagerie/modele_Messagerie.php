<?php

class ModeleMessagerie extends DBMapper {
	
	function __construct($module) {}
	
	function afficherListeContact() {
	
		$idUser = $_SESSION['idUser'];
		$req = self::$database->prepare("SELECT DISTINCT nom, prenom 
										FROM contact, user 
										WHERE (idUser1 = $idUser 
										OR idUser2 = $idUser)
										AND etat = 1");
		$req->execute();
		
		return $req;
	
	}

	function afficherConversation() {
	
		// Requete préparée PHP pour récupérer les messages écrits suivant un indice, 0 pour moi, 1 pour l'autre
		// optionnel : Systeme de notif si nouveau message
	
		// REVOIR REQUETE
		$idDestinataire = $_POST['idDestinataire'];
		$req = self::$database->prepare("SELECT id, contenu from message where id = ?");
		$req->execute();
		
		return $req;
	
	}
	
	function envoyerMessage() {
		
		$dateJour = now();
		$heureEnvoi = date("H");
		$minuteEnvoi = date("i");
		$secondeEnvoi = date("s");
		$contenuMessage = $_POST['contenuMessage'];
		$idDestinataire = $_POST['idDestinataire'];
		$idUser = $_SESSION['idUser'];
		$req = self::$database->prepare("INSERT INTO message (dateEnvoi, heureEnvoi, minuteEnvoi, secondeEnvoi, contenu, idUserDestination, idUserSource) VALUES ($dateJour, $heureEnvoi, $minuteEnvoi, $secondeEnvoi, '$contenuMessage', $idUserDestination, $idUserSource)");
		$req->execute();
	
	}
		
}

?>
