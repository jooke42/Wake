<?php

class VueConnexion {
	
	function affichageFormConnexion() {
	
			if(!isset($_SESSION['Utilisateur'])) {
				echo '<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="Assets/css/style_connexion.css" >


</head>
<body><div class="wrapper">
		<div id="main" style="padding:50px 0 0 0;">
		<img src="Assets/css/images/website_logo.png" alt="" style="width: 95%;" />
		<!-- Form -->

	<form id="contact-form" name="input" action ="index.php?Module=Connexion&action=1" method="post" enctype="multipart/form-data">
			<h3>Connexion</h3>
			<h4></h4>
			<div>
				<label>
					<span>Email: (required)</span>
					<input placeholder="Please enter your email address" type="email" name="email" tabindex="2" required>
				</label>
			</div>
			<div>
				<label>
					<span>Password: (required)</span>
					<input placeholder="Please enter your password" type="password" name="pass" tabindex="3" required>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">Se connecter</button>
			</div>
			<a href=index.php?Module=Inscription&action=0>S\'inscrire en cliquant ici </a>
		</form>

		<!-- /Form -->

		</div>
	</div>';
			}
			else {
				echo '<br>Vous êtes déjà connecté<br>';
			}
	}	
}
?>

