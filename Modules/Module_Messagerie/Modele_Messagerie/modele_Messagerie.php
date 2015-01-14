<?php

class ModeleMessagerie extends DBMapper {
	
	function __construct($module) {}
	
	function afficherListeContact() {
	
		$idUser = $_SESSION['idUser'];
		$req = self::$database->prepare("SELECT DISTINCT idUser, nom, prenom
										FROM contact, user 
										WHERE (idUser1 = $idUser 
										OR idUser2 = $idUser)
										AND etat = 1");
		$req->execute();
		
		return $req;
	
	}

	function afficherConversation($idDestinataire) {

		$idUser=$_SESSION['idUser'];
		$req = self::$database->prepare("SELECT DISTINCT *
						FROM message,user WHERE ((message.idUserDestination= $idDestinataire and message.idUserSource= $idUser) or (message.idUserDestination= $idUser and message.idUserSource= $idDestinataire)) and user.idUser=message.idUserSource");
		$req->execute();
		
		return $req;
	
	}
	
	function envoyerMessage($contenuMessage,$idDestinataire) {
		$dateJour = date('Y-m-d');
		$heureEnvoi = date("H"); 
		$minuteEnvoi = date("i"); 
		$secondeEnvoi = date("s"); 


		$idUser = $_SESSION['idUser'];
		$req = self::$database->prepare("INSERT INTO message (idUserSource, idUserDestination, dateEnvoi, heureEnvoi, minuteEnvoi, secondeEnvoi, contenu) VALUES ('$idUser','$idDestinataire','$dateJour','$heureEnvoi','$minuteEnvoi','$secondeEnvoi','$contenuMessage')");
		$req->execute();

		header ("Refresh: 0;URL=index.php?Module=Messagerie&action=1&idDestinataire=$idDestinataire");
	}
		
}

?>
