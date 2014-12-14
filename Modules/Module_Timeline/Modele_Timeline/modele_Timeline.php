<?php

class ModeleTimeline extends DBMapper {
	function affichagePublication() {
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}
		$req=self::$database->prepare("select * from publication where idUser=$idUser ORDER BY datePub desc");
		
		$req->execute();
		
		return $req;
	}

	function affichagePublicationUser($idContact) {
		
		$req=self::$database->prepare("select * from publication where idUser=$idContact ORDER BY datePub desc");
		
		$req->execute();
		
		return $req;
	}
	

	function affichageCommentaire($idPub) {


		$idUser=$_SESSION['idUser'];

		$req=self::$database->prepare("select * from commentaire where idUser=$idUser and idPub=$idPub ");
		
		$req->execute();
		return $req;
	}
		

	function ajoutPublication($titre,$contenu) {
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}
		
		$datePub = date('Y-m-d');		
	
		$req=self::$database->prepare("INSERT INTO publication (idUser,titre,contenu,datePub) VALUES ('$idUser','$titre','$contenu','$datePub') ");
		
		$req->execute();
		header ("Refresh: 0;URL=index.php?action=0&Module=Timeline");
	}
    function ajoutPublicationUSer($titre,$contenu,$idContact) {


        $datePub = date('Y-m-d');

        $req=self::$database->prepare("INSERT INTO publication (idUser,titre,contenu,datePub) VALUES ('$idContact','$titre','$contenu','$datePub') ");

        $req->execute();
        header ("Refresh: 0;URL=index.php?action=3&Module=Timeline&idContact=$idContact");
    }

	function ajoutCommentaire($idPub,$contenuCom,$idContact) {

		$idUser=$_SESSION['idUser'];

        if($idContact==$idUser) {
            $action=1;

        }
        else {
            $action=3;
        }
        $dateCom = date('Y-m-d');

		$req=self::$database->prepare("INSERT INTO commentaire (idUser,idPub,contenu,dateCom) VALUES ('$idUser','$idPub','$contenuCom','$dateCom') ");
		
		$req->execute();

		header ("Refresh: 0;URL=index.php?action=$action&Module=Timeline&idContact=$idContact");

	}
}

?>
