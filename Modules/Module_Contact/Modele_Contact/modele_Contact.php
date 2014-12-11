<?php
if (! defined ('TEST_INCLUDE'))
   die ("Vous ne pouvez pas acceder directement à ce fichier");
   
   
class ModeleContact extends DBMapper {
	function __construct(){
	
	}
	public function getContacts(){
		$id=isset($_SESSION['idUser']) ? $_SESSION['idUser'] : 1;
		
		$req=self::$database->prepare("SELECT *
						FROM contact
						JOIN user ON contact.idUser2 = user.idUser
						WHERE idUser1 LIKE '$id'
						AND etat =
						TRUE");
		
		
		$tab=array($id);
		$req->execute();
		
		$resultat=$req;
	
		return $resultat;
	}
	public function seachProfil($Query){

		$id=isset($_SESSION['idUser']) ? $_SESSION['idUser'] : 1;
		
		$req=self::$database->prepare("SELECT distinct * FROM (SELECT * FROM user WHERE MATCH (nom,prenom) AGAINST ('$Query*' IN BOOLEAN MODE) )as 
		user LEFT JOIN contact ON user.idUser = contact.idUser2");
		
		
		//$tab=array($id);
		$req->execute();
		
		$resultat=$req;
	
		return $resultat;

	}
	public function contactRequest($idContact){
		$id=isset($_SESSION['idUser']) ? $_SESSION['idUser'] : 1;
		
		
		$req=self::$database->prepare("INSERT INTO contact(`idUser1`, `idUser2`, `etat`) VALUES ($id,$idContact,1)");
		
		
		//$tab=array($id);
		$test=$req->execute();
		
		header('Refresh: 0; url="index.php?Module=Contact"');



	}
	public function deleteContact($idContact){
		$id=isset($_SESSION['idUser']) ? $_SESSION['idUser'] : 1;
		
		
		$req=self::$database->prepare("DELETE FROM contact where idUser1=$id and idUser2=$idContact or idUser2=$id and idUser1=$idContact");
		
		
		//$tab=array($id);
		$test=$req->execute();
		header('Refresh: 0; url="index.php?Module=Contact"');
		



	}

	


}
   
   
   
   
   
   
   
   
   
   
 ?>
