<?php

class ModeleHelperProfil extends DBMapper {
	
	function reqNomPhoto() {
	
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}

		$req=self::$database->prepare("select * from user where idUser=$idUser");
		
		$req->execute();
			
		return $req;

	}
	function reqNomPhotoUser($idContact) {
	
		$req=self::$database->prepare("select * from user where idUser=$idContact");
		
		$req->execute();

		return $req;

	}
}
?>
