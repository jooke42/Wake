<?php

Class VueContact{

	static function AfficherToutLesContacts($ListeContacts){
			echo '<div id="profil"> ';
			while($resultat = $ListeContacts->fetch()) {
				?>
				<div id="profil-infos" style="width:45%;display:inline-block;">
				<img src="images/bandeau-site.jpg" alt="error"/>
				<?php
				
				echo'<a href="index.php?Module=Timeline&action=3&idContact='.$resultat['idUser'].'">';
				echo $resultat['nom']."  ";
				echo $resultat['prenom'] ."   ";
				echo '</a>';
				if ($_SESSION['idUser']!= $resultat['idUser1']){
					if($resultat['idUser1'] == $_SESSION['idUser'] ){
						echo "        ami";
						echo '<a href="index.php?Module=Contact&action=deleteContact&idUser='.$resultat['idUser'].'">supprimer Contact</a>';
					}else{
						echo '<a href="index.php?Module=Contact&action=contactRequest&idUser='.$resultat['idUser'].'">ajouter Contact</a>';
							
					}
					
				}
				
				?>
				</div>
				<?php
			}
			echo '</div>';
	
	
	}

}




?>
