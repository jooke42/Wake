<?php

class ModeleTimeline extends DBMapper {

	function affichagePublication() {
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}
		$req=self::$database->prepare("SELECT *
FROM publication, user
WHERE
publication.idAuteur = user.idUser

AND publication.idUser =$idUser
ORDER BY idPublication DESC ");

		$req->execute();
		
		return $req;
	}

	function affichagePublicationUser($idContact) {
		
		$req=self::$database->prepare("SELECT *
FROM publication, user
WHERE
publication.idAuteur = user.idUser

AND publication.idUser =$idContact
ORDER BY idPublication DESC");

		$req->execute();
		
		return $req;
	}
	

	function affichageCommentaire($idPub) {


		$idUser=$_SESSION['idUser'];

		$req=self::$database->prepare("select * from commentaire,user where idPub=$idPub and commentaire.idUser=user.idUser");
		$req->execute();
		return $req;
	}
		

	function ajoutPublication($contenu) {
		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}

		$datePub=date('Y-m-d');

		$req=self::$database->prepare("INSERT INTO publication (idUser,idAuteur,contenu,datePub) VALUES ('$idUser','$idUser','$contenu','$datePub') ");
		
		$req->execute();

		header ("Refresh: 0;URL=index.php?action=0&Module=Timeline");
	}
    function ajoutPublicationUSer($contenu,$idContact) {

		if(isset($_SESSION['idUser'])) {
			$idUser=$_SESSION['idUser'];
		}

        $datePub = date('Y-m-d');

        $req=self::$database->prepare("INSERT INTO publication (idUser,idAuteur,contenu,datePub) VALUES ('$idContact','$idUser','$contenu','$datePub') ");

        $req->execute();
        header ("Refresh: 0;URL=index.php?action=3&Module=Timeline&idContact=$idContact");
    }

	function ajoutCommentaire($idPub,$contenuCom,$idContact) {

		$idUser=$_SESSION['idUser'];

        if($idContact==$idUser) {
            $action=0;

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
