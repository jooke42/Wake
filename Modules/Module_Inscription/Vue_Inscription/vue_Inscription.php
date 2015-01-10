<?php

class VueInscription {

	function affichageFormInscription() {
		if(!isset($_SESSION['Utilisateur'])) {
			echo '
		<html>
		<head>
			<meta charset="UTF-8">
			<title>Wake - Inscription</title>
			<link href="Assets/css/style_inscription.css" rel="stylesheet">
			<meta name="viewport" content="width=device-width,initial-scale=1.0">

		</head>

		<body>
		<div class="wrapper">
		<div id="main" style="padding:50px 0 0 0;">
		<!--<img src="./css/images/website_logo.png" alt="" style="width: 95%;" />-->

		<!-- Form -->

		<form name="input" id="contact-form" action ="index.php?Module=Inscription&action=1" method="post" enctype="multipart/form-data">
			<h3>Inscription</h3>
			<h4></h4>
			<div>
				<label>
					<span class="label label-info">Nom</span>
					<input placeholder="Entrer votre nom" type="text" tabindex="1" name="nom" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Prenom : </span>
					<input placeholder="Entrer votre prenom" type="text" tabindex="1" name="prenom" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email :</span>
					<input placeholder="Entrer votre email" type="text" tabindex="1" name="email" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Mot de passe : </span>
					<input placeholder="Entrer votre mot de passe" type="password" tabindex="1" name="pass" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Mot de passe confirmation : </span>
					<input placeholder="Entrer votre mot de passe" type="password" tabindex="1" name="passConf" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Date de naissance : </span>
					<input placeholder="YYYY-MM-DD" tabindex="5" type ="date" name="datNais" required>
				</label>
			</div>
			<div>
				<label>
					<span>Genre :  </span>
					<select name="genre">
						<option value="1">Masculin</option>
						<option value="0">Feminin</option>
					</select>
				</label>
			</div>
			<div>
				<label>
					<span>Adresse : </span>
					<input placeholder="Entrer votre adresse" type="text" tabindex="1" name="adresse" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Telephone : </span>
					<input placeholder="Entrer votre numero de téléphone" type="text" tabindex="1" name="telephone" required autofocus>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">S\'inscrire</button>
			</div>
			</form>
		<!-- /Form -->

		</div>
	</div>

	<script src="js/scripts.js"></script>

</body>
</html>';
		}
		else {
			echo '<br>Vous êtes déjà inscrit<br>';
		}
	}
}

?>
