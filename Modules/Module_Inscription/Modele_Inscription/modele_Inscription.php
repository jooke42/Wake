<?php

class ModeleInscription extends DBMapper {

	
	function nouveauUser($nom, $prenom, $genre, $adresse, $pass, $passConf,$email ,$datNais, $telephone) {
		
		$req=self::$database->prepare("select * from user where email like '$email'");
		
		$req->execute();

		$resultat = $req->fetch();
		
		$emailConf=$resultat['email'];	
	
		if($email==$emailConf) {
			
			header ("Refresh: 0;URL=index.php?action=4&Module=Inscription");
		}
		else if($pass!=$passConf) {
			
		
			header ("Refresh: 0;URL=index.php?action=3&Module=Inscription");	
		}
		else {
			

			$pass=md5($pass);
			$req=self::$database->prepare("INSERT INTO user (nom,prenom,genre,adresse,email,password,datNais,telephone) VALUES ('$nom','$prenom','$genre','$adresse','$email','$pass','$datNais','$telephone'); ");
		
			$req->execute();
			header ("Refresh: 0;URL=index.php?action=0&Module=Connexion");
		}	
		
		
	}
}

?>
