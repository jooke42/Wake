<?php

class VueConnexion {
	
	function affichageFormConnexion() {
	
			if(!isset($_SESSION['Utilisateur'])) {
				echo '<form name="input" action ="index.php?Module=Connexion&action=1" method="post" enctype="multipart/form-data">
					<label>Email : </label>
					<br>
			   		<input type="text" name="email" size="20" required  /> 
			  		<br>
			  		<label>Mot de passe</label>
					<br>
				 	<input type="password" name="pass" size="20" />
					<br>
			   		<input name="Envoyer" value="Envoyer" type="submit">
				</form><br>
				<a href=index.php?Module=Inscription&action=0>S\'inscrire en cliquant ici </a>	';
			}
			else {
				echo '<br>Vous êtes déjà connecté<br>';
			}
		
		
	}	
}

?>
