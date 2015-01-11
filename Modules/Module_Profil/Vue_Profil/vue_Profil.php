<?php

class VueProfil {
	
	function affichageProfil($monControleurPhoto) {
		echo '<div class="col-lg-12">

				<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Identité </span></div></h2>
					<br>
					<div class="col-lg-6">
						<span class="label label-info">Nom</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["nom"].'</strong></span><br><br>
						<span class="label label-info">Prénom</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["prenom"].'</strong></span><br><br>
						<span class="label label-info">Date de Naissance</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["datNais"].'</strong></span><br><br>
					</div>
					<div class="col-lg-6">
						<span class="label label-info">Ville</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["adresse"].'</strong></span><br><br>
						<span class="label label-info">Numéro de téléphone</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["telephone"].'</strong></span><br><br>
						<span class="label label-info">E-Mail</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["email"].'</strong></span><br><br>
					</div>
				</div>
				<div class="col-lg-12">
					<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Job </span></div></h2>
					<br>
					<div class="col-lg-6">
						<span class="label label-info">Status</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']['status'].'</strong></span><br><br>
						<span class="label label-info">Métier</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']["metier"].'</strong></span><br><br>
					</div>
					<div class="col-lg-6">
						<span class="label label-info">Lieu de travail</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']['lieuTravail'].'</strong></span><br><br>
						<span class="label label-info">Études</span><span style="margin-left: 15px;"><strong>'.$_SESSION['Utilisateur']['etude'].'</strong></span><br><br>
					</div>
				</div>';
				$this->affichageProfilPhoto($monControleurPhoto);
				  echo '<a style="margin-left: 15px; font-size: 13px;" href="index.php?Module=Profil&actionProfil=1" alt="Modifier données">Modifier vos données personnelles</a>
				<div class="col-lg-12">
					<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Amis </span></div></h2>
					<br>
					<div class="col-lg-12">
						<div class="list-group">
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="list-group">
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
							</div>
						</div>
					</div>
				</div>';



	}



    function affichageProfilModif($monControleurPhoto) {
		echo '<div class="col-lg-12">
				 <form method="post" action="index.php?Module=Profil&actionProfil=2" enctype="multipart/form-data">
				<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Identité </span></div></h2>
					<br>
					<div class="col-lg-6">
						<span class="label label-info">Nom</span><span style="margin-left: 15px;"> <input type="text" name="nom" size="20" value="'.$_SESSION['Utilisateur']["nom"].'" required /></span><br><br>
						<span class="label label-info">Prénom</span><span style="margin-left: 15px;"><strong> <input type="text" name="prenom" size="20" value="'.$_SESSION['Utilisateur']["prenom"].'" required /></strong></span><br><br>
						<span class="label label-info">Date de Naissance</span><span style="margin-left: 15px;"><strong> <input type="text" name="datNais" size="20" value="'.$_SESSION['Utilisateur']["datNais"].'" required /></strong></span><br><br>
						<span class="label label-info">Genre</span>
							<span style="margin-left: 15px;"><select name="genre" required >
								<option value="1">Masculin</option>
								<option value="0">Feminin</option>
							</select></span>
					</div>
					<div class="col-lg-6">
						<span class="label label-info">Ville</span><span style="margin-left: 15px;"><strong> <input type="text" name="adresse" size="20" value="'.$_SESSION['Utilisateur']["adresse"].'" required /></strong></span><br><br>
						<span class="label label-info">Numéro de téléphone</span><span style="margin-left: 15px;"><strong> <input type="text" name="telephone" size="20" value="'.$_SESSION['Utilisateur']["telephone"].'" required /></strong></span><br><br>
						<span class="label label-info">E-Mail</span><span style="margin-left: 15px;"><strong> <input type="text" name="email" size="20" value="'.$_SESSION['Utilisateur']["email"].'" required /></strong></span><br><br>
					</div>
				</div>
				<div class="col-lg-12">
					<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Job </span></div></h2>
					<br>
					<div class="col-lg-6">
						<span class="label label-info">Status</span><span style="margin-left: 15px;"><strong> <input type="text" name="status" size="20" value="'.$_SESSION['Utilisateur']["status"].'" required /></strong></span><br><br>
						<span class="label label-info">Métier</span><span style="margin-left: 15px;"><strong> <input type="text" name="metier" size="20" value="'.$_SESSION['Utilisateur']["metier"].'" required /></strong></span><br><br>
					</div>
					<div class="col-lg-6">
						<span class="label label-info">Lieu de travail</span><span style="margin-left: 15px;"><strong> <input type="text" name="lieuTravail" size="20" value="'.$_SESSION['Utilisateur']["lieuTravail"].'" required /></strong></span><br><br>
						<span class="label label-info">Études</span><span style="margin-left: 15px;"><strong> <input type="text" name="etude" size="20" value="'.$_SESSION['Utilisateur']["etude"].'" required /></strong></span><br><br>
					</div>
					<label>Entrez mot de passe : </label>
                	 <br>
					<input type="password" name="pass" size="20" required />
					<input name="Envoyer" value="Envoyer" type="submit">
					</form>
				</div>


				<div class="col-lg-12">
					<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Amis </span></div></h2>


					<div class="col-lg-12">
						<div class="list-group">
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="list-group">
							<div class="list-group-item">
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
								<div class="row-picture">
									<img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
								</div>
							</div>
						</div>
					</div>
				</div>';
    }
function affichageProfilPhoto($monControleurPhoto) {
	
			echo '<div class="col-lg-12">
					<h2><div class="icon-preview"><i class="mdi-image-timer-auto" style="margin-right: 15px;"></i><span>Photo </span></div></h2>
					<br>';
					$monControleurPhoto->affichageFormPhoto();
			echo '</div>';
		}


}

?>
