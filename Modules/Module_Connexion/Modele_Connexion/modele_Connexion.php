<?php

class ModeleConnexion extends DBMapper {
	
	function connexion($email,$pass)  {
		
		$pass=md5($pass);
		
		$req=self::$database->prepare("select * from user where email like ':email'");
		$req->bindValue(':email', $email, PDO::PARAM_STR);
		$req->execute();
		
		$resultat=$req->fetch();

		$passConf=$resultat['password'];
		
		if($passConf!=$pass) {
			header ("Refresh: 0;URL=index.php?action=2&Module=Connexion");
		}
		else {
			$_SESSION['Utilisateur']=$resultat;
			$_SESSION['idUser']=$resultat['idUser'];

			header ("Refresh: 0;URL=index.php");
		}
			
	}
}

?>
