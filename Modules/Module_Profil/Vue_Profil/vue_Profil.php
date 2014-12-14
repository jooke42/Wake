<?php

class VueProfil {
	
	function affichageProfil($monControleurPhoto) {
		echo '<div id="profil">
				<div id="profil-infos">
					<div id="profil-gauche">

						<p class="elem_paragraphe">Nom : ';
						echo $_SESSION['Utilisateur']["nom"];
						echo '</p>
						<p class="elem_paragraphe">Prénom : ';
						echo $_SESSION['Utilisateur']["prenom"];
						echo '</p>
						<p class="elem_paragraphe">Genre : ';
						if($_SESSION['Utilisateur']["genre"]==1) {
							echo "Homme";
						}
						else {
							echo "Femme";
						}
						echo '</p>
						<p class="elem_paragraphe">Email : ';
						echo $_SESSION['Utilisateur']["email"];
						echo '</p>
                            <br><br>
                            <a href="index.php?Module=Profil&actionProfil=1" alt="Modifier données">Modifier vos données personnelles</a>
					</div>
					<div id="profil-droite">
						<p class="elem_paragraphe">Date de Naissance : ';
						echo $_SESSION['Utilisateur']["datNais"];
						echo '</p>
						<p class="elem_paragraphe">Telephone : ';
						echo $_SESSION['Utilisateur']["telephone"];
						echo '</p>
						<p class="elem_paragraphe">Métier : ';
						echo $_SESSION['Utilisateur']["metier"];
						echo '</p>';
						$this->affichageProfilPhoto($monControleurPhoto);
					echo '</div>
					<div id="profil-amis">
						<p><em>Ici y\'aura les amis</em></p>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div><br>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div><br>
						<a id="lien-ami" href="#">Voir tous les contacts...</a>
					</div>
				</div>
			</div>';
	}



    function affichageProfilModif($monControleurPhoto) {

        echo '<div id="profil">
				<div id="profil-infos">
					<div id="profil-gauche">
					     <form method="post" action="index.php?Module=Profil&actionProfil=2" enctype="multipart/form-data">
						<label>Nom: *</label>
                         <br>
				        <input type="text" name="nom" size="20" value="'.$_SESSION['Utilisateur']["nom"].'" required />
				        <br>
				    <label>Prenom : </label>
                 <br>
				<input type="text" name="prenom" size="20" value="'.$_SESSION['Utilisateur']["prenom"].'" required />
				<br>
				<label>Genre : </label>
                 <br>
				<select name="genre" required >
					<option value="1">Masculin</option>
					<option value="0">Feminin</option>
				</select>
				<br><br>
				<label>Email : </label>
                 <br>
				<input type="text" name="email" size="20" value ="'.$_SESSION['Utilisateur']["email"].'" required />
				<br>';
           echo ' </div>
            <div id="profil-droite">


				<label>Date de naissance : </label>
                 <br>
				<input type="date" name="datNais" size="20" required value="'.$_SESSION['Utilisateur']["datNais"].'" />
				<br>
				<label>Telephone :  </label>
                 <br>
				<input type="text" name="telephone" size="20" required value="'.$_SESSION['Utilisateur']["telephone"].'" />
				<br>
				<label>Metier : </label>
                 <br>
				<input type="text" name="metier" size="20" value="'.$_SESSION['Utilisateur']["metier"].'" />
				<br><br>
				<label>Entrez mot de passe : </label>
                 <br>
				<input type="password" name="pass" size="20" required />

				<br><br>
				<input name="Envoyer" value="Envoyer" type="submit">
				</form>
          </div>

					<div id="profil-amis">
						<p><em>Ici y\'aura les amis</em></p>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div><br>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div>
						<div class="ami"></div><br>
						<a id="lien-ami" href="#">Voir tous les contacts...</a>
					</div>
				</div>
			</div>';
    }
	function affichageProfilPhoto($monControleurPhoto) {
		$monControleurPhoto->affichageFormPhoto();
		
	}


}

?>
