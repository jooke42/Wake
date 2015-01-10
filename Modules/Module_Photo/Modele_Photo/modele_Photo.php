<?php

class ModelePhoto extends DBMapper {


	function uploadPhoto($idPub,$index,$destination,$maxsize,$extensions) {
		//UPLOAD SUR LE FTP
		if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
		
		//Test2: taille limite
		if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
		//Test3: extension
		$ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
		if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
		//Déplacement
	
	  	$upload=move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
		
		//INFO DANS BDD
		if($upload) {
			if(isset($_SESSION['idUser'])) {
				$idUser=$_SESSION['idUser'];
			}
			$req=self::$database->prepare("INSERT INTO photo (idPublication,idUser,photo,taille,type) VALUES ('$idPub','$idUser','$destination','$maxsize','$ext') ");

			$req->execute();
            $idPhoto=self::$database->lastInsertId();
            return $idPhoto;
			//header ("Refresh: 0;URL=index.php?Module=Profil");
		}
		
		
	}

	function affichagePhotoReq($idUser) {
		
		
		$req=self::$database->prepare("select * from user,photo where user.idUser=$idUser and photo.idUser=$idUser ");
		
		$req->execute();
		
		return $req;
	}


	function affichagePhotoProfilReq() {
		
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}
		
		$req=self::$database->prepare("select idPhoto from user where idUser=$idUser ");
		
		
		
		$req->execute();
		$resultat=$req->fetch();
		$idPhoto=$resultat['idPhoto'];
		$req=self::$database->prepare("select photo from photo where photo.idUser=$idUser and photo.idPhoto=$idPhoto limit 1 ");
		$req->execute();		
		return $req;

	}
	

	function affichagePhotoProfilReqUser($idContact) {
		
		
		
		$req=self::$database->prepare("select idPhoto from user where idUser=$idContact ");
		
		
		
		$req->execute();
		$resultat=$req->fetch();
		$idPhoto=$resultat['idPhoto'];
		$req=self::$database->prepare("select photo from photo where photo.idUser=$idContact and photo.idPhoto=$idPhoto limit 1 ");
		$req->execute();		
		return $req;

	}


	function setPhotoProfil($idUser,$idPhoto) {
		
		$req=self::$database->prepare("UPDATE user SET idPhoto=$idPhoto WHERE idUser=$idUser");
		$req->execute();
	}	
	function deletePhoto($idPhoto, $idUser) {
		$req=self::$database->prepare("DELETE FROM photo where idPhoto=$idPhoto");
		$req->execute();
	}
	
}

?>
